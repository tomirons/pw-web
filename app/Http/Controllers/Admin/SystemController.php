<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use Efriandika\LaravelSettings\Facades\Settings;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SystemController extends Controller
{
    public function getSettings()
    {
        pagetitle( [ trans( 'system.panel' ), trans( 'main.apps.system' ), settings( 'server_name' ) ] );
        return view( 'admin.system.settings' );
    }

    public function postSettings( Request $request )
    {
        $this->validate($request, [
            'server_name' => 'required|min:5',
            'currency_name' => 'required|min:3',
            'server_ip' => 'required|ip',
            'server_version' => 'required',
            'encryption_type' => 'required'
        ]);

        Settings::set( 'server_name', $request->server_name );

        Settings::set( 'currency_name', $request->currency_name );

        Settings::set( 'server_ip', $request->server_ip );

        Settings::set( 'server_version', $request->server_version );

        Settings::set( 'encryption_type', $request->encryption_type );

        flash()->success( trans( 'system.success' ) );

        return redirect()->back();
    }

    public function getApps()
    {
        pagetitle( [ trans( 'system.apps' ), trans( 'main.apps.system' ), settings( 'server_name' ) ] );
        $apps = Application::all();
        return view( 'admin.system.apps', compact( 'apps' ) );
    }

    public function postApps( Request $request )
    {
        $apps = Application::all();

        foreach ( $apps as $app )
        {
            $app->enabled = $request->{$app->key . '_enabled'};
            $app->save();
        }

        flash()->success( trans( 'system.apps_edit_success' ) );

        return redirect()->back();
    }

    public function getWidget()
    {
        return view( 'admin.system.widget' );
    }
}
