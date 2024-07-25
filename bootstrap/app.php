<?php

use App\Http\Middleware\Authenticated;
use Illuminate\Foundation\Application;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->group('web', [
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        ]);

        $middleware->group('api', [

        ]);
        $middleware->alias([
            'guest' => RedirectIfAuthenticated::class,
            'auth'=>Authenticated::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
