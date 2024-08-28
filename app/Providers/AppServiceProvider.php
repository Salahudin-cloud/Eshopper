<?php

namespace App\Providers;

use App\Interfaces\CategoriesBrandsInterfaces;
use App\Interfaces\CategoriesColorsInterfaces;
use App\Interfaces\CategoriesItemsInterfaces;
use App\Interfaces\UserInterfaces;
use App\Repositories\CategoriesBrandsRepository;
use App\Repositories\CategoriesColorsRepository;
use App\Repositories\CategoriesItemsRepository;
use App\Repositories\UserRepository;
use App\Services\CategoriesBrandsServices;
use App\Services\CategoriesColorsServices;
use App\Services\CategoriesItemsServices;
use App\Services\UserServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //user 
        $this->app->bind(UserInterfaces::class, UserRepository::class);
        $this->app->bind(UserServices::class, function ($app) {
            return new UserServices($app->make(UserInterfaces::class));
        });

        // categories items 
        $this->app->bind(CategoriesItemsInterfaces::class, CategoriesItemsRepository::class);
        $this->app->bind(CategoriesItemsServices::class, function ($app) {
            return new CategoriesItemsServices($app->make(CategoriesItemsInterfaces::class));
        });

        // categories colors 
        $this->app->bind(CategoriesColorsInterfaces::class, CategoriesColorsRepository::class);
        $this->app->bind(CategoriesColorsServices::class, function ($app) {
            return new CategoriesColorsServices($app->make(CategoriesColorsInterfaces::class));
        });

        // categories brands 
        $this->app->bind(CategoriesBrandsInterfaces::class, CategoriesBrandsRepository::class);
        $this->app->bind(CategoriesBrandsServices::class, function ($app) {
            return new CategoriesBrandsServices($app->make(CategoriesBrandsInterfaces::class));
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
