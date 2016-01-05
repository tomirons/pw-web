<?php

namespace App\Http\Controllers\Front;

use App\ShopItem;
use Huludini\PerfectWorldAPI\API;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'auth' );

        $this->middleware( 'selected.character', ['only' => ['postPurchase', 'postGift'] ] );

        $this->middleware( 'server.online', ['only' => 'postPurchase'] );
    }

    public function getIndex()
    {
        pagetitle( [ trans( 'main.apps.shop' ), settings( 'server_name' ) ] );
        $items = ShopItem::paginate( settings( 'shop_items_per_page' ) );
        return view( 'front.shop.index', compact( 'items' ) );
    }

    public function getMask( $mask )
    {
        pagetitle( [ trans( 'main.apps.shop' ), settings( 'server_name' ) ] );
        $items = ShopItem::where( 'mask', $mask )->paginate( settings( 'shop_items_per_page' ) );
        return view( 'front.shop.index', compact( 'items' ) );
    }

    public function postPurchase( ShopItem $item )
    {
        $user = Auth::user();
        $item_price = ( $item->discout > 0 ) ? $item->price - ( $item->price / 100 * $item->discount ) : $item->price;

        if ( $user->money >= $item_price )
        {
            $api = new API();
            $mail = array(
                'title' => trans( 'shop.mail_item.title', ['name' => settings( 'server_name' )] ),
                'message' => trans( 'shop.mail_item.message', ['name' => $item->name, 'count' => $item->count, 'staff' => settings( 'server_name' )] ),
                'money' => 0,
                'item' => array(
                    'id' => $item->item_id,
                    'pos' => 0,
                    'count' => $item->count,
                    'max_count' => $item->max_count,
                    'data' => $item->octet,
                    'proctype' => $item->protection_type,
                    'expire_date' => $item->expire_date,
                    'guid1' => 0,
                    'guid2' => 0,
                    'mask' => $item->mask,
                ),
            );
            $api->sendMail( Auth::user()->characterId(), $mail['title'], $mail['message'], $mail['item'], $mail['money'] );
            $user->money = $user->money - $item_price;
            $user->save();
            flash()->success( trans( 'shop.purchase_complete', ['name' => $item->name] ) );
        }
        else
        {
            flash()->error( trans( 'main.not_enough', ['currency' => strtolower( settings( 'currency_name' ) )] ) );
        }
        return redirect()->back();
    }

    public function postGift( Request $request, ShopItem $item )
    {
        $this->validate($request, [
            'friends' => 'required|array|min:1',
        ]);

        $user = Auth::user();
        $item_price = ( $item->discount > 0 ) ? ( $item->price - ( $item->price / 100 * $item->discount ) ) : $item->price;

        if ( $user->money > $item_price )
        {
            $api = new API();
            $mail = array(
                'title' => trans( 'shop.gift_item.title' ),
                'message' => trans( 'shop.gift_item.message', ['name' => $item->name, 'count' => $item->count, 'player' => $user->characterName()] ),
                'money' => 0,
                'item' => array(
                    'id' => $item->item_id,
                    'pos' => 0,
                    'count' => $item->count,
                    'max_count' => $item->max_count,
                    'data' => $item->octet,
                    'proctype' => $item->protection_type,
                    'expire_date' => $item->expire_date,
                    'guid1' => 0,
                    'guid2' => 0,
                    'mask' => $item->mask,
                ),
            );
            foreach ( $request->friends as $friend )
            {
                if ( $api->sendMail( $friend, $mail['title'], $mail['message'], $mail['item'], $mail['money'] ) )
                {
                    //TODO Add notifications
                    $user->money = $user->money - $item_price;
                    $user->save();
                    flash()->success( trans( 'shop.gift_complete', ['name' => $item->name, 'count' => count( $request->friends )] ) );
                }
                else
                {
                    flash()->error( trans( 'main.server_not_online' ) );
                }
            }
        }
        else
        {
            flash()->error( trans( 'main.not_enough', ['currency' => strtolower( settings( 'currency_name' ) )] ) );
        }
        return redirect()->back();
    }
}
