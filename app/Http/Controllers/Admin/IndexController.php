<?php

namespace App\Http\Controllers\Admin;

use GrahamCampbell\GitHub\GitHubManager;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    protected $github;

    public function __construct( GitHubManager $github )
    {
        $this->github = $github;
    }

    public function getIndex()
    {
        $releases = $this->github->api( 'repo' )->releases()->all( 'huludini', 'pw-web' );
        pagetitle( [ trans( 'main.dashboard' ), settings( 'server_name' ) ] );
        return view( 'admin.index', compact( 'version_info', 'releases' ) );
    }
}
