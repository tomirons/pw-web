<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\VerifyCsrfToken::class,
        \App\Http\Middleware\NotInstalled::class,
        \App\Http\Middleware\ApplicationEnabled::class,
        \App\Http\Middleware\EmptyCharacterIfServerOffline::class,
        \App\Http\Middleware\SetLanguage::class
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'mask.exists' => \App\Http\Middleware\MaskExists::class,
        'selected.character' => \App\Http\Middleware\SelectedCharacter::class,
        'service.enabled' => \App\Http\Middleware\ServiceEnabled::class,
        'server.online' => \App\Http\Middleware\ServerOnline::class,
        'installed' => \App\Http\Middleware\IsInstalled::class,
        'admin' => \App\Http\Middleware\IsAdmin::class
    ];
}
