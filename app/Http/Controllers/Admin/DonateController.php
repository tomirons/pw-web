<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Efriandika\LaravelSettings\Facades\Settings;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function getSettings()
    {
        pagetitle( [ trans( 'main.settings' ), trans( 'main.apps.donate' ), settings( 'server_name' ) ] );
        return view( 'admin.donate.settings' );
    }

    public function postPaypalSettings( Request $request )
    {
        $this->validate($request, [
            'paypal_status' => '',
            'paypal_client_id' => 'required_with:paypal_status',
            'paypal_secret' => 'required_with:paypal_status',
            'paypal_currency' => 'required_with:paypal_status',
            'paypal_min' => 'required_with:paypal_status|numeric|min:1',
            'paypal_per' => 'required_with:paypal_status|numeric|min:1'
        ]);

        Settings::set('paypal_status', $request->paypal_status);

        Settings::set('paypal_double', $request->paypal_double);

        Settings::set('paypal_client_id', $request->paypal_client_id);

        Settings::set('paypal_secret', $request->paypal_secret);

        Settings::set('paypal_currency', $request->paypal_currency);

        Settings::set('paypal_min', $request->paypal_min);

        Settings::set( 'paypal_per', $request->paypal_per );

        flash()->success( trans( 'main.settings_saved' ) );

        return redirect( 'admin/donate/settings' );
    }

    public function postPaymentwallSettings( Request $request )
    {
        $this->validate($request, [
            'paymentwall_status' => '',
            'paymentwall_link' => 'required_with:paymentwall_status',
            'paymentwall_key' => 'required_with:paymentwall_status',
        ]);

        Settings::set('paymentwall_status', $request->paymentwall_status);

        Settings::set('paymentwall_double', $request->paymentwall_double);

        if (str_contains($request->paymentwall_link, 'iframe')) {
            preg_match('/src="([^"]+)"/', $request->paymentwall_link, $match);
            Settings::set('paymentwall_link', $match[1]);
        } else {
            Settings::set( 'paymentwall_link', $request->paymentwall_link );
        }

        Settings::set( 'paymentwall_key', $request->paymentwall_key );

        flash()->success( trans( 'main.settings_saved' ) );

        return redirect( 'admin/donate/settings' );

    }
}
