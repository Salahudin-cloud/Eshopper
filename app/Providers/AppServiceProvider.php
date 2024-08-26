<?php

namespace App\Providers;

use App\Interfaces\UserInterfaces;
use App\Repositories\UserRepository;
use App\Services\UserServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(UserInterfaces::class, UserRepository::class);
        $this->app->bind(UserServices::class, function ($app) {
            return new UserServices($app->make(UserInterfaces::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
