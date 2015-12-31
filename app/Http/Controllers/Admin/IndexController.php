<?php

namespace App\Http\Controllers\Admin;

use Github\Client;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function getIndex()
    {
        $client = new Client();
        $releases = $client->api( 'repo' )->releases()->all( 'huludini', 'pw-web' );
        pagetitle( [ trans( 'main.dashboard' ), settings( 'server_name' ) ] );
        return view( 'admin.index', compact( 'version_info', 'releases' ) );
    }
}
