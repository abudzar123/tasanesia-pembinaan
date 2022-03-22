<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('halaman_petani',function (User $user){
            return $user->role ==='admin' || $user->role ==='institusi' || $user->role ==='pembina' || $user->role ==='petani'; 
        });

        Gate::define('halaman_pembina',function (User $user){
            return $user->role ==='admin' || $user->role ==='institusi'  || $user->role ==='pembina';
        });
        
        Gate::define('halaman_institusi',function (User $user){
            return $user->role ==='admin' || $user->role ==='institusi' ;
        });

        Gate::define('halaman_admin',function (User $user){
            return $user->role === 'admin';
        });
    }
}
