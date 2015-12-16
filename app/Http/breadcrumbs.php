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