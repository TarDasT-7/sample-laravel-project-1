<?php

namespace App\Providers;

use App\Repositories\auth\AuthenticationRepository;
use App\Repositories\auth\AuthenticationRepositoryInterface;
use App\Services\auth\AuthenticationService;
use App\Services\auth\AuthenticationServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthenticationServiceInterface::class, AuthenticationService::class);
        $this->app->bind(AuthenticationRepositoryInterface::class, AuthenticationRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
