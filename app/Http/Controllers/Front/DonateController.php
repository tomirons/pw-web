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
        return view( 'front.donate.index' );
    }

    public function postDonate( Request $request )
    {
        // Prepare GET data
        $query = array();
        $query['cmd'] = '_xclick';
        $query['notify_url'] = url( 'paypal' );
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
                if ( Payment::where( 'transaction_id', $request->txn_id )->count() == 0 )
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
}
