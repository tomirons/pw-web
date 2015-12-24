<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ShopItemRequest;
use App\ShopItem;
use Efriandika\LaravelSettings\Facades\Settings;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        pagetitle( [ trans( 'shop.index' ), settings( 'server_name' ) ] );
        $items = ShopItem::paginate( settings( 'shop_items_per_page' ) );
        return view( 'admin.shop.view', compact( 'items' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        pagetitle( [ trans( 'shop.create' ), settings( 'server_name' ) ] );
        return view( 'admin.shop.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ShopItemRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store( ShopItemRequest $request )
    {
        ShopItem::create( $request->all() );

        flash()->success( trans( 'shop.create_success' ) );

        return redirect( 'admin/shop' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ShopItem $item
     * @return \Illuminate\Http\Response
     */
    public function edit( ShopItem $item )
    {
        pagetitle( [ trans( 'shop.edit', ['name' => $item->name] ), settings( 'server_name' ) ] );
        return view( 'admin.shop.edit', compact( 'item' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ShopItem $item
     * @param ShopItemRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update( ShopItem $item, ShopItemRequest $request )
    {
        $item->update( $request->all() );

        flash()->success( trans( 'shop.edit_success' ) );

        return redirect( 'admin/shop' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param ShopItem $item
     */
    public function destroy( Request $request, ShopItem $item )
    {
        if ( $request->ajax() )
        {
            $item->delete();
        }
    }

    public function getSettings()
    {
        pagetitle( [ trans( 'main.settings' ), trans( 'main.apps.shop' ), settings( 'server_name' ) ] );
        return view( 'admin.shop.settings' );
    }

    public function postSettings( Request $request )
    {
        Settings::set( 'shop_items_per_page', $request->items_per_page );

        flash()->success( trans( 'main.settings_saved' ) );

        return redirect( 'admin/shop' );
    }
}
