<?php

namespace App\Http\Controllers\Admin;

use Efriandika\LaravelSettings\Facades\Settings;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SystemController extends Controller
{
    public function getPanel()
    {
        return view( 'admin.system.panel' );
    }

    public function postPanel( Request $request )
    {
        Settings::set( 'server_name', $request->server_name );

        Settings::set( 'currency_name', $request->currency_name );

        Settings::set( 'server_version', $request->server_version );

        Settings::set( 'encryption_type', $request->encryption_type );

        flash()->success( trans( 'system.success' ) );

        return redirect( 'admin/system/panel' );
    }

    public function getWidget()
    {
        return view( 'admin.system.widget' );
    }
}
