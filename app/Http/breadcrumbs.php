<?php

/* Home */
Breadcrumbs::register( 'home', function( $breadcrumbs )
{
    $breadcrumbs->push( trans( 'main.home' ) );
});

/* News */
Breadcrumbs::register( 'news.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.apps.news' ) );
});

/* Shop */
Breadcrumbs::register( 'shop.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.apps.shop' ) );
});

Breadcrumbs::register( 'shop.mask', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'shop.index' );
});

/* Donate */
Breadcrumbs::register( 'donate.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.apps.donate' ) );
});

/* Vote */
Breadcrumbs::register( 'vote.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.apps.vote' ) );
});

/* Voucher */
Breadcrumbs::register( 'voucher.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.apps.voucher' ) );
});

/* Services */
Breadcrumbs::register( 'services.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.apps.services' ) );
});

/* Ranking */
Breadcrumbs::register( 'ranking.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.apps.ranking' ) );
});

/*
|--------------------------------------------------------------------------
| Admin Breadcrumbs
|--------------------------------------------------------------------------
*/
Breadcrumbs::register( 'admin.index', function( $breadcrumbs )
{
    $breadcrumbs->push( trans( 'main.home' ), route( 'admin.index' ) );
});

/* System */
Breadcrumbs::register( 'admin.system.panel', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'system.panel' ) );
});

Breadcrumbs::register( 'admin.system.widget', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'system.widget' ) );
});

/* News */
Breadcrumbs::register( 'admin.news', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.news' ) );
});

Breadcrumbs::register( 'admin.news.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.news' );
    $breadcrumbs->push( trans( 'news.index' ) );
});

Breadcrumbs::register( 'admin.news.create', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.news' );
    $breadcrumbs->push( trans( 'news.create' ) );
});

Breadcrumbs::register( 'admin.news.edit', function( $breadcrumbs, \App\Article $article )
{
    $breadcrumbs->parent( 'admin.news' );
    $breadcrumbs->push( trans( 'news.edit', ['title' => $article->title] ) );
});

Breadcrumbs::register( 'admin.news.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.news' );
    $breadcrumbs->push( trans( 'main.settings' ) );
});

/* Shop */
Breadcrumbs::register( 'admin.shop', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.shop' ) );
});

Breadcrumbs::register( 'admin.shop.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.shop' );
    $breadcrumbs->push( trans( 'shop.index' ) );
});

Breadcrumbs::register( 'admin.shop.create', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.shop' );
    $breadcrumbs->push( trans( 'shop.create' ) );
});

Breadcrumbs::register( 'admin.shop.edit', function( $breadcrumbs, \App\ShopItem $item )
{
    $breadcrumbs->parent( 'admin.shop' );
    $breadcrumbs->push( trans( 'shop.edit', ['name' => $item->name] ) );
});

Breadcrumbs::register( 'admin.shop.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.shop' );
    $breadcrumbs->push( trans( 'main.settings' ) );
});

/* Donate */
Breadcrumbs::register( 'admin.donate.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.donate' ) );
    $breadcrumbs->push( trans( 'main.settings' ) );
});

/* Voucher */
Breadcrumbs::register( 'admin.voucher', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.voucher' ) );
});

Breadcrumbs::register( 'admin.voucher.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.voucher' );
    $breadcrumbs->push( trans( 'voucher.index' ) );
});

Breadcrumbs::register( 'admin.voucher.create', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.voucher' );
    $breadcrumbs->push( trans( 'voucher.create' ) );
});

Breadcrumbs::register( 'admin.voucher.edit', function( $breadcrumbs, \App\Voucher $voucher )
{
    $breadcrumbs->parent( 'admin.voucher' );
    $breadcrumbs->push( trans( 'voucher.edit', ['code' => $voucher->code] ) );
});