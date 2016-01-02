<?php

/* Home */
Breadcrumbs::register( 'home', function( $breadcrumbs )
{
    $breadcrumbs->push( trans( 'main.home' ), url( '/' ) );
});

Breadcrumbs::register( 'account.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.account' ) );
    $breadcrumbs->push( trans( 'main.settings' ) );
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

Breadcrumbs::register( 'vote.success', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'vote.index' );
    $breadcrumbs->push( trans( 'vote.success.title' ) );
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
    $breadcrumbs->push( trans( 'main.dashboard' ), route( 'admin.index' ) );
});

/* Members */
Breadcrumbs::register( 'admin.members.manage', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.members' ) );
    $breadcrumbs->push( trans( 'members.manage' ) );
});

/* System */
Breadcrumbs::register( 'admin.system.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.settings' ) );
});

Breadcrumbs::register( 'admin.system.apps', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'system.apps' ) );
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

/* Vote */
Breadcrumbs::register( 'admin.vote', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.vote' ) );
});

Breadcrumbs::register( 'admin.vote.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.vote' );
    $breadcrumbs->push( trans( 'vote.index' ) );
});

Breadcrumbs::register( 'admin.vote.create', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.vote' );
    $breadcrumbs->push( trans( 'vote.create' ) );
});

Breadcrumbs::register( 'admin.vote.edit', function( $breadcrumbs, \App\VoteSite $site )
{
    $breadcrumbs->parent( 'admin.vote' );
    $breadcrumbs->push( trans( 'vote.edit', ['name' => $site->name] ) );
});

/* Services */
Breadcrumbs::register( 'admin.services', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.services' ) );
});

Breadcrumbs::register( 'admin.services.edit', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.services' );
    $breadcrumbs->push( trans( 'services.edit' ) );
});

Breadcrumbs::register( 'admin.services.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.services' );
    $breadcrumbs->push( trans( 'main.settings' ) );
});

/* Ranking */
Breadcrumbs::register( 'admin.ranking.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.ranking' ) );
    $breadcrumbs->push( trans( 'main.settings' ) );
});

/* Management */
Breadcrumbs::register( 'admin.management', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.manage' ) );
});

Breadcrumbs::register( 'admin.management.broadcast', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.management' );
    $breadcrumbs->push( trans( 'management.broadcast' ) );
});

Breadcrumbs::register( 'admin.management.mailer', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.management' );
    $breadcrumbs->push( trans( 'management.mailer' ) );
});

Breadcrumbs::register( 'admin.management.forbid', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.management' );
    $breadcrumbs->push( trans( 'management.forbid' ) );
});

Breadcrumbs::register( 'admin.management.gm.view', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.management' );
    $breadcrumbs->push( trans( 'management.gm' ) );
});

Breadcrumbs::register( 'admin.management.gm.edit', function( $breadcrumbs, App\User $user )
{
    $breadcrumbs->parent( 'admin.management' );
    $breadcrumbs->push( trans( 'management.edit_gm', ['user' => $user->name] ) );
});

Breadcrumbs::register( 'admin.management.chat.watch', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'management.chat' ) );
    $breadcrumbs->push( trans( 'management.watch' ) );
});

Breadcrumbs::register( 'admin.management.chat.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'management.chat' ) );
    $breadcrumbs->push( trans( 'main.settings' ) );
});
