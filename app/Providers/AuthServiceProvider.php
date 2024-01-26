<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }

    protected $middlewareGroups = [
        'web' => [
            // ... other middleware
            \App\Http\Middleware\RedirectIfAuthenticated::class,
        ],
    
        'api' => [
            // ... other middleware
            'throttle:api',
        ],
    
        'admin' => [
            \App\Http\Middleware\AdminMiddleware::class,
        ],
    
        'user' => [
            \App\Http\Middleware\UserMiddleware::class,
        ],
    ];
    
}
