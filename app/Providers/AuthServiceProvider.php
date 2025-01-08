<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Repositories\Auth\AuthRepositoryInterface;
use App\Repositories\Auth\AuthRepository;
use App\Services\Auth\AuthServiceInterface;
use App\Services\Auth\AuthService;
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

    public function register()
    {

        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
        
        $this->app->bind(AuthServiceInterface::class, AuthService::class);
    }
    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
