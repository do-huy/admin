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
        //admin //dieuphoi //member
        $this->registerPolicies();

        Gate::define('member', function($user){
            return $user->type == 3;
        });

         Gate::define('admin', function($user){
            return $user->type == 1;
        });
        
    }
}
