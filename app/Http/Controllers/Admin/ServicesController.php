<?php

namespace App\Http\Controllers\Admin;

use App\Service;
use Efriandika\LaravelSettings\Facades\Settings;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function getEdit()
    {
        pagetitle( [ trans( 'services.edit' ), settings( 'server_name' ) ] );
        $services = Service::all();
        return view( 'admin.services.view', compact( 'services' ) );
    }

    public function postEdit( Request $request )
    {
        $services = Service::all();

        foreach ( $services as $service )
        {
            $service->enabled = $request->{$service->key . '_enabled'};
            $service->price = $request->{$service->key . '_price'};
            $service->save();
        }

        flash()->success( trans( 'services.edit_success' ) );

        return redirect( 'admin/services' );
    }

    public function getSettings()
    {
        pagetitle( [ trans( 'main.settings' ), trans( 'main.apps.services' ), settings( 'server_name' ) ] );
        return view( 'admin.services.settings' );
    }

    public function postSettings( Request $request )
    {
        $this->validate($request, [
            'teleport_world_tag' => 'required|numeric|min:1',
            'teleport_x' => 'required|numeric|min:1',
            'teleport_y' => 'required|numeric|min:1',
            'teleport_z' => 'required|numeric|min:1',
            'level_cap' => 'required|numeric|min:1'
        ]);

        Settings::set( 'teleport_world_tag', $request->teleport_world_tag );

        Settings::set( 'teleport_x', $request->teleport_x );

        Settings::set( 'teleport_y', $request->teleport_y );

        Settings::set( 'teleport_z', $request->teleport_z );

        Settings::set( 'level_up_cap', $request->level_cap );

        flash()->success( trans( 'main.settings_saved' ) );

        return redirect( 'admin/services/settings' );
    }
}
