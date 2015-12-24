<?php

namespace App\Http\Controllers\Front;

use App\Payment;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use wadeshuler\paypalipn\IpnListener;

class DonateController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'auth' );
    }

    public function getIndex()
    {
        pagetitle( [ trans( 'main.apps.donate' ), settings( 'server_name' ) ] );
        return view( 'front.donate.index' );
    }

    public function postDonate( Request $request )
    {
        // Prepare GET data
        $query = array();
        $query['cmd'] = '_xclick';
        $query['notify_url'] = url( 'donate/paypal' );
        $query['return'] = url( 'shop' );
        $query['cancel_return'] = url( 'donate' );
        $query['currency_code'] = settings( 'paypal_currency' );
        $query['no_shipping'] = 0;
        $query['no_note'] = 0;
        $query['business'] = settings( 'paypal_email' );
        $query['item_name'] = $request->tokens . ' ' . settings( 'currency_name' );
        $query['quantity'] = 1;
        $query['amount'] = $request->dollars;
        $query['custom'] = Auth::user()->ID;

        // Prepare query string
        $query_string = http_build_query( $query );

        return redirect( 'https://www.paypal.com/cgi-bin/webscr?' . $query_string );
    }

    public function postIPN( Request $request )
    {
        $listener = new IpnListener();

        // default options
        $listener->use_curl = true;
        $listener->follow_location = false;
        $listener->timeout = 30;
        $listener->verify_ssl = true;

        if ($verified = $listener->processIpn())
        {
            // Valid IPN
            /*
                1. Check that $_POST['payment_status'] is "Completed"
                2. Check that $_POST['txn_id'] has not been previously processed
                3. Check that $_POST['receiver_email'] is your Primary PayPal email
                4. Check that $_POST['payment_amount'] and $_POST['payment_currency'] are correct
            */
            $transactionRawData = $listener->getRawPostData();      // raw data from PHP input stream
            $transactionData = $listener->getPostData();            // POST data array
            $custom = $request->custom;

            if ( $request->payment_status == 'Completed' )
            {
                if ( !Payment::where( 'transaction_id', $request->txn_id )->exists() )
                {
                    if ( $request->receiver_email == settings( 'paypal_email' ) )
                    {
                        $user = User::find( $custom );

                        $payment_amount = settings( 'paypal_double' ) ? ( $request->mc_gross * settings( 'paypal_per' ) ) * 2 : $request->mc_gross * settings( 'paypal_per' );

                        Payment::create([
                            'user_id' => $user->ID,
                            'transaction_id' => $request->txn_id,
                            'amount' => $payment_amount
                        ]);

                        $user->money = $user->money + $payment_amount;
                        $user->save();
                    }
                }
            }

            // Feel free to modify path and filename. Make SURE THE DIRECTORY IS WRITEABLE!
            // For security reasons, you should use a path above/outside of your webroot
            file_put_contents('ipn_success.log', print_r($transactionData, true) . PHP_EOL, LOCK_EX | FILE_APPEND);

        } else {

            // Invalid IPN
            $errors = $listener->getErrors();

            // Feel free to modify path and filename. Make SURE THE DIRECTORY IS WRITEABLE!
            // For security reasons, you should use a path above/outside of your webroot
            file_put_contents('ipn_errors.log', print_r($errors, true) . PHP_EOL, LOCK_EX | FILE_APPEND);

        }
    }

    public function postPaymentwall( Request $request )
    {
        /**
         *  Pingback Listener Script
         *  For Virtual Currency API
         *  Copyright (c) 2010-2013 Paymentwall Team
         */

        /**
         *  Define your application-specific options
         */
        define( 'SECRET', settings( 'paymentwall_key' ) );
        define( 'IP_WHITELIST_CHECK_ACTIVE', true );

        define( 'CREDIT_TYPE_CHARGEBACK', 2 );

        /**
         *  The IP addresses below are Paymentwall's
         *  servers. Make sure your pingback script
         *  accepts requests from these addresses ONLY.
         *
         */
        $ipsWhitelist = array(
            '174.36.92.186',
            '174.36.96.66',
            '174.36.92.187',
            '174.36.92.192',
            '174.37.14.28'
        );

        /**
         *  Collect the GET parameters from the request URL
         */
        $userId = isset( $request->uid ) ? $request->uid : null;
        $credits = isset( $request->currency ) ? $request->currency : null;
        $type = isset( $request->type ) ? $request->type : null;
        $refId = isset( $request->ref ) ? $request->ref : null;
        $signature = isset( $request->sig ) ? $request->sig : null;
        $sign_version = isset( $request->sign_version ) ? $request->sign_version : null;

        $result = false;

        /**
         *  If there are any errors encountered, the script will list them
         *  in an array.
         */
        $errors = array ();

        if ( !empty( $userId ) && !empty( $credits ) && isset( $type ) && !empty( $refId ) && !empty( $signature ) )
        {
            $signatureParams = array();

            if ( empty( $sign_version ) || $sign_version <= 1 )
            {
                $signatureParams = array(
                    'uid' => $userId,
                    'currency' => $credits,
                    'type' => $type,
                    'ref' => $refId
                );
            }
            else
            {
                $signatureParams = array();
                foreach ( $_GET as $param => $value )
                {
                    $signatureParams[ $param ] = $value;
                }
                unset( $signatureParams['sig'] );
            }

            /**
             *  check if IP is in whitelist and if signature matches
             */
            $signatureCalculated = $this->calculatePingbackSignature( $signatureParams, SECRET, $sign_version );

            /**
             *  Run the security check -- if the request's origin is one
             *  of Paymentwall's servers, and if the signature matches
             *  the parameters.
             */
            if ( !IP_WHITELIST_CHECK_ACTIVE || in_array( $_SERVER['REMOTE_ADDR'], $ipsWhitelist ) )
            {
                if ( $signature == $signatureCalculated )
                {
                    $result = true;
                    $user = User::find( $userId );

                    if ( settings( 'paymentwall_double' ) )
                    {
                        $n_credits = $credits * 2;
                    }
                    else
                    {
                        $n_credits = $credits;
                    }

                    if ( $type == CREDIT_TYPE_CHARGEBACK )
                    {
                        /**
                         *  Deduct credits from user. Note that currency amount
                         *  sent for chargeback is negative, e.g. -5, so be
                         *  careful about the sign Don't deduct negative
                         *  number, otherwise user will gain credits instead
                         *  of losing them
                         *
                         */
                        // Remove credits from user
                        $user->money = $user->money + $n_credits;
                        $user->save();

                        $payment = Payment::find( $refId );
                        $payment->delete();
                    }
                    else
                    {
                        // Give credits to user
                        $user->money = $user->money + $n_credits;
                        $user->save();

                        Payment::create([
                            'user_id' => $user->ID,
                            'transaction_id' => $refId,
                            'amount' => $n_credits
                        ]);
                    }
                }
                else
                {
                    $errors['signature'] = 'Signature is not valid!';
                }
            }
            else
            {
                $errors['whitelist'] = 'IP not in whitelist!';
            }
        }
        else
        {
            $errors['params'] = 'Missing parameters!';
        }

        /**
         *  Always make sure to echo OK so Paymentwall
         *  will know that the transaction is successful.
         */
        if ( $result )
        {
            echo 'OK';
        }
        else
        {
            echo implode( ' ', $errors );
        }
    }

    /**
     *  Signature calculation function
     */
    function calculatePingbackSignature( $params, $secret, $version )
    {
        $str = '';
        if ( $version == 2 )
        {
            ksort( $params );
        }
        foreach ( $params as $k => $v )
        {
            $str .= "$k=$v";
        }
        $str .= $secret;
        return md5( $str );
    }
}
