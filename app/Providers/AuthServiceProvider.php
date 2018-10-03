<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Categorias:
        // 0 - Usuário
        // 1 - admin
        // 2 - ...
        Gate::define('admin', function () {
            // 0 -> user
            // 1 -> administrador
            // 2 -> cliente
            return \Auth::user()->category == 1;
        });
    }
}
