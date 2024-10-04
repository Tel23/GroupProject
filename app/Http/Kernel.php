<?php

namespace App\Http\Kernel;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

/**protected $middleware = [
    \App\Http\Middleware\LogRequests::class,
];

protected $routeMiddleware = [
    'checkAge' => \App\Http\Middleware\CheckAge::class,
]; */

class Kernel extends HttpKernel
{
    /**
     * The application's request middleware.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    protected $middleware = [
        //global middleware part added
        \App\Http\Middleware\CheckAge::class,
        \App\Http\Middleware\LogRequest::class,
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array<string, class-string|string>
     */
    protected $routeMiddleware = [
        'checkAge' => \App\Http\Middleware\CheckAge::class,
    ];
}