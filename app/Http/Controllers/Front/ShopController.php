<?php

namespace App\Http\Controllers\Front;

use App\ShopItem;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'auth' );

        //$this->middleware('mask.exists', ['only' => ['getMask']]);
    }

    public function getIndex()
    {
        $items = ShopItem::paginate( 12 );
        return view( 'front.shop.index', compact( 'items' ) );
    }

    public function getMask( $mask )
    {
        $items = ShopItem::where( 'mask', $mask )->paginate( 12 );
        return view( 'front.shop.index', compact( 'items' ) );
    }
}
