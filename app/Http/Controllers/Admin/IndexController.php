<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    public function getIndex()
    {
        pagetitle( [ trans( 'main.dashboard' ), settings( 'server_name' ) ] );
        return view( 'admin.index' );
    }
}
