<?php

namespace App\Http\Controllers\Front;

use App\Service;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function getIndex()
    {
        $services = Service::all();
        return view( 'front.services.index', compact( 'services' ) );
    }
}
