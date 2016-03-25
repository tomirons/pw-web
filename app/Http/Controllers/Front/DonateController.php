<?php

namespace App\Http\Controllers\Front;

use App\Payment;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Omnipay\Omnipay;
use Paymentwall_Pingback;
use wadeshuler\paypalipn\IpnListener;

class DonateController extends Controller
{
    protected $gateway;

    public function __construct()
    {
        $this->middleware( 'auth', ['except' => 'getPaymentwall'] );

        $this->gateway = Omnipay::create( 'PayPal_Rest' );
        $this->gateway->initialize([
            'clientId' => settings( 'paypal_client_id' ),
            'secret'   => settings( 'paypal_secret' ),
            'testMode' => false,
        ]);
    }

    public function getIndex()
    {
        pagetitle( [ trans( 'main.apps.donate' ), settings( 'server_name' ) ] );
        return view( 'front.donate.index' );
    }

    public function postPaypalSubmit( Request $request )
    {
        $transaction = $this->gateway->purchase([
            'amount'        => number_format( $request->dollars, 2 ),
            'currency'      => settings( 'paypal_currency' ),
            'description'   => trans( 'donate.paypal.description', [ 'amount' => $request->dollars, 'currency' => settings( 'currency_name' ) ] ),
            'returnUrl'     => url( 'donate/paypal/complete' ),
            'cancelUrl'     => url( 'donate' ),
        ]);
        $response = $transaction->send();

        if ( $response->isRedirect() )
        {
            $response->redirect();
        }
        else
        {
            echo $response->getMessage();
        }
    }

    public function postPaypalComplete( Request $request )
    {
        $complete = $this->gateway->completePurchase([
            'transactionReference' => $request->paymentId,
            'payerId' => $request->PayerID,
        ]);

        $response = $complete->send();
        $data = $response->getData();

        if ( $data['state'] === 'approved' )
        {
            $user = Auth::user();
            $amount = round( $data['transactions'][0]['amount']['total'] );

            $payment_amount = settings( 'paypal_double' ) ? ( $amount * settings( 'paypal_per' ) ) * 2 : $amount * settings( 'paypal_per' );

            Payment::create([
                'user_id' => $user->ID,
                'transaction_id' => $data['id'],
                'amount' => $payment_amount
            ]);

            $user->money = $user->money + $payment_amount;
            $user->save();

        }

        flash()->success( trans( 'donate.paypal.success' ) );
        return redirect( 'donate' );
    }

    /**
     * Process the PaymentWall payment
     *
     * @param Request $request
     */
    public function getPaymentWall( Request $request )
    {
        $pingback = new Paymentwall_Pingback( $_GET, $_SERVER['REMOTE_ADDR'] );
        if ( $pingback->validate() )
        {
            $virtualCurrency = $pingback->getVirtualCurrencyAmount();
            $user = User::find( $request->uid );

            if ( settings( 'paymentwall_double' ) )
            {
                $n_credits = $virtualCurrency * 2;
            }
            else
            {
                $n_credits = $virtualCurrency;
            }

            if ( $pingback->isDeliverable() )
            {
                // Give credits to user
                $user->money = $user->money + $n_credits;
                $user->save();

                Payment::create([
                    'user_id' => $user->ID,
                    'transaction_id' => $request->ref,
                    'amount' => $n_credits
                ]);
            }
            elseif ( $pingback->isCancelable() )
            {
                // Remove credits from user
                $user->money = $user->money + $n_credits;
                $user->save();

                $payment = Payment::find( $request->ref );
                $payment->delete();
            }
            echo 'OK'; // Paymentwall expects response to be OK, otherwise the pingback will be resent
        }
        else
        {
            echo $pingback->getErrorSummary();
        }
    }
}
