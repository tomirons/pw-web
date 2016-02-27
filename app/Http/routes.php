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

Route::get( 'account/settings', ['as' => 'account.settings', 'uses' => 'Front\AccountController@getSettings'] );
Route::post( 'account/settings/email', 'Front\AccountController@postEmail' );
Route::post( 'account/settings/password', 'Front\AccountController@postPassword' );

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
Route::post( 'shop/purchase/{shop}', 'Front\ShopController@postPurchase' );
Route::post( 'shop/gift/{shop}', 'Front\ShopController@postGift' );
Route::get( 'shop/mask/{shop_mask}', ['as' => 'shop.mask', 'uses' => 'Front\ShopController@getMask'] );

/* Donate */
Route::get( 'donate', ['as' => 'donate.index', 'uses' => 'Front\DonateController@getIndex'] );
Route::post( 'donate/paypal', 'Front\DonateController@postPaypalSubmit' );
Route::get( 'donate/paypal/complete', 'Front\DonateController@postPayPalComplete' );
Route::get( 'donate/paymentwall', 'Front\DonateController@getPaymentwall' );

/* Vote */
Route::get( 'vote', ['as' => 'vote.index', 'uses' => 'Front\VoteController@getIndex'] );
Route::get( 'vote/success/{vote}', ['as' => 'vote.success', 'uses' => 'Front\VoteController@getSuccess'] );
Route::post( 'vote/check/{vote}', 'Front\VoteController@postCheck' );

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
Route::group( ['prefix' => 'admin', 'middleware' => ['auth', 'admin'] ], function() {

    Route::get( '/', ['as' => 'admin.index', 'uses' => 'Admin\IndexController@getIndex'] );

    /* Members */
    Route::get( 'members/manage', ['as' => 'admin.members.manage', 'uses' => 'Admin\MembersController@getManage'] );
    Route::post( 'members/balance/{user}', 'Admin\MembersController@postBalance' );
    Route::post( 'members/search', 'Admin\MembersController@postSearch' );

    /* System */
    Route::group( ['prefix' => 'system', 'as' => 'admin.system.'], function() {

        Route::get( 'settings', ['as' => 'settings', 'uses' => 'Admin\SystemController@getSettings'] );
        Route::post( 'settings', 'Admin\SystemController@postSettings' );
        Route::get( 'apps', ['as' => 'apps', 'uses' => 'Admin\SystemController@getApps'] );
        Route::post( 'apps', 'Admin\SystemController@postApps' );

//        Route::get( 'widget', ['as' => 'widget', 'uses' => 'Admin\SystemController@getWidget'] );
//        Route::post( 'widget', 'Admin\SystemController@postWidget' );

    });

    /* News */
    Route::get( 'news/settings', ['as' => 'admin.news.settings', 'uses' => 'Admin\NewsController@getSettings'] );
    Route::post( 'news/settings', 'Admin\NewsController@postSettings' );
    Route::resource( 'news', 'Admin\NewsController' );

    /* Shop */
    Route::get( 'shop/settings', ['as' => 'admin.shop.settings', 'uses' => 'Admin\ShopController@getSettings'] );
    Route::post( 'shop/settings', 'Admin\ShopController@postSettings' );
    Route::resource( 'shop', 'Admin\ShopController' );

    /* Donate */
    Route::get( 'donate/settings', ['as' => 'admin.donate.settings', 'uses' => 'Admin\DonateController@getSettings'] );
    Route::post( 'donate/paypal', 'Admin\DonateController@postPaypalSettings' );
    Route::post( 'donate/paymentwall', 'Admin\DonateController@postPaymentwallSettings' );

    /* Voucher */
    Route::resource( 'voucher', 'Admin\VoucherController' );

    /* Vote */
    Route::resource( 'vote', 'Admin\VoteController' );

    /* Services */
    Route::get( 'services', ['as' => 'admin.services.edit', 'uses' => 'Admin\ServicesController@getEdit'] );
    Route::post( 'services', 'Admin\ServicesController@postEdit' );
    Route::get( 'services/settings', ['as' => 'admin.services.settings', 'uses' => 'Admin\ServicesController@getSettings'] );
    Route::post( 'services/settings', 'Admin\ServicesController@postSettings' );

    /* Ranking */
    Route::get( 'ranking/settings', ['as' => 'admin.ranking.settings', 'uses' => 'Admin\RankingController@getSettings'] );
    Route::post( 'ranking/settings', 'Admin\RankingController@postSettings' );

    /* Management */
    Route::get( 'management/gm', ['as' => 'admin.management.gm.view', 'uses' => 'Admin\ManagementController@getGM'] );
    Route::post( 'management/gm', 'Admin\ManagementController@postGM' );
    Route::get( 'management/gm/edit/{user}', ['as' => 'admin.management.gm.edit', 'uses' => 'Admin\ManagementController@getGMEdit'] );
    Route::post( 'management/gm/edit/{user}', 'Admin\ManagementController@postGMEdit' );
    Route::get( 'management/gm/remove/{user}', 'Admin\ManagementController@getGMRemove' );
    Route::get( 'management/chat/watch', ['as' => 'admin.management.chat.watch', 'uses' => 'Admin\ManagementController@getChatWatch'] );
    Route::post( 'management/chat/logs', 'Admin\ManagementController@postChatLogs' );
    Route::get( 'management/chat/settings', ['as' => 'admin.management.chat.settings', 'uses' => 'Admin\ManagementController@getChatSettings'] );
    Route::post( 'management/chat/settings', 'Admin\ManagementController@postChatSettings' );
    Route::controller( 'management', 'Admin\ManagementController', [
        'getBroadcast' => 'admin.management.broadcast',
        'getMailer' => 'admin.management.mailer',
        'getForbid' => 'admin.management.forbid'
    ]);
});

/* Installer */
Route::group( ['prefix' => 'admin/install', 'as' => 'admin.installer.'], function()
{
    Route::group( ['middleware' => 'installed'], function()
    {
        get( '/', [
            'as' => 'welcome',
            'uses' => 'Admin\InstallController@welcome'
        ]);

        get( 'settings', [
            'as' => 'settings',
            'uses' => 'Admin\InstallController@getSettings'
        ]);

        post( 'setup', [
            'as' => 'settings.save',
            'uses' => 'Admin\InstallController@postSettings'
        ]);

        /*get( 'environment', [
            'as' => 'environment',
            'uses' => 'Admin\InstallController@environment'
        ]);

        post( 'environment/save', [
            'as' => 'environment.save',
            'uses' => 'Admin\InstallController@save'
        ]);

        get( 'requirements', [
            'as' => 'requirements',
            'uses' => 'Admin\InstallController@requirements'
        ]);

        get( 'permissions', [
            'as' => 'permissions',
            'uses' => 'Admin\InstallController@permissions'
        ]);

        get( 'database', [
            'as' => 'database',
            'uses' => 'Admin\InstallController@database'
        ]);*/

        get( 'complete', [
            'as' => 'complete',
            'uses' => 'Admin\InstallController@complete'
        ]);
    });
});
