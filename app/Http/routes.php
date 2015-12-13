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
Route::get( 'shop/mask/{mask}', ['as' => 'shop.mask', 'uses' => 'Front\ShopController@getMask'] );

/* Donate */
Route::get( 'donate', ['as' => 'donate.index', 'uses' => 'Front\DonateController@getIndex'] );
Route::post( 'donate', 'Front\DonateController@postDonate' );
Route::post( 'paypal', 'Front\DonateController@postIPN' );

/* Vote */
Route::get( 'vote', ['as' => 'vote.index', 'uses' => 'Front\VoteController@getIndex'] );
Route::get( 'vote/check/{site}', 'Front\VoteController@getCheck' );

Route::group( ['prefix' => 'admin'], function() {

    Route::get( '/', 'Admin\IndexController@getIndex' );

});
