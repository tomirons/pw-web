<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Auth */
Route::controller( 'auth', 'Auth\AuthController', [
    'getRegister' => 'auth.register',
    'getLogin'    => 'auth.login',
]);

/* Character */
Route::get( 'character/select/{role_id}', 'Front\CharacterController@getSelect' );

// Password reset link request routes...
Route::post( 'password/email', 'Auth\PasswordController@postEmail' );

// Password reset routes...
Route::get( 'password/reset/{token}', 'Auth\PasswordController@getReset' );
Route::post( 'password/reset', 'Auth\PasswordController@postReset' );

/* News */
Route::get( '/', ['as' => 'news.index', 'uses' => 'Front\NewsController@getIndex'] );

/* Shop */
Route::get( 'shop', ['as' => 'shop.index', 'uses' => 'Front\ShopController@getIndex'] );
Route::post( 'shop/purchase/{shop_item}', 'Front\ShopController@postPurchase' );
Route::post( 'shop/gift/{shop_item}', 'Front\ShopController@postGift' );
Route::get( 'shop/mask/{shop_mask}', ['as' => 'shop.mask', 'uses' => 'Front\ShopController@getMask'] );

/* Donate */
Route::get( 'donate', ['as' => 'donate.index', 'uses' => 'Front\DonateController@getIndex'] );
Route::post( 'donate', 'Front\DonateController@postDonate' );
Route::post( 'paypal', 'Front\DonateController@postIPN' );
Route::post( 'paymentwall', 'Front\DonateController@postPaymentwall' );

/* Vote */
Route::get( 'vote', ['as' => 'vote.index', 'uses' => 'Front\VoteController@getIndex'] );
Route::get( 'vote/check/{vote_site}', 'Front\VoteController@getCheck' );

/* Voucher */
Route::get( 'voucher', ['as' => 'voucher.index', 'uses' => 'Front\VoucherController@getIndex'] );
Route::post( 'voucher/redeem', 'Front\VoucherController@postRedeem' );

/* Services */
Route::get( 'services', ['as' => 'services.index', 'uses' => 'Front\ServicesController@getIndex'] );
Route::post( 'services/{service}', 'Front\ServicesController@postPurchase' );

/* Ranking */
Route::get( 'ranking', 'Front\RankingController@getIndex' );
Route::get( 'ranking/player/{sub}', ['as' => 'ranking.index', 'uses' => 'Front\RankingController@getPlayer'] );
Route::get( 'ranking/faction', function(){
    return redirect( 'ranking/faction/level' );
});
Route::get( 'ranking/faction/{sub}', ['as' => 'ranking.index', 'uses' => 'Front\RankingController@getFaction'] );

/* Not Working */
//Route::get( 'ranking/territory', ['as' => 'ranking.index', 'uses' => 'Front\RankingController@getTerritory'] );

/* Admin */
Route::group( ['prefix' => 'admin' ], function() {

    Route::get( '/', ['as' => 'admin.index', 'uses' => 'Admin\IndexController@getIndex'] );

    /* System */
    Route::group( ['prefix' => 'system', 'as' => 'admin.system.'], function() {

        Route::get( 'panel', ['as' => 'panel', 'uses' => 'Admin\SystemController@getPanel'] );
        Route::post( 'panel', 'Admin\SystemController@postPanel' );

//        Route::get( 'widget', ['as' => 'widget', 'uses' => 'Admin\SystemController@getWidget'] );
//        Route::post( 'widget', 'Admin\SystemController@postWidget' );

    });

    /* News */
    Route::get( 'news/settings', ['as' => 'admin.news.settings', 'uses' => 'Admin\NewsController@getSettings'] );
    Route::post( 'news/settings', 'Admin\NewsController@postSettings' );
    Route::resource( 'news', 'Admin\NewsController' );

});
