<?php

namespace App\Providers;

use App\Interfaces\CategoriesBrandsInterfaces;
use App\Interfaces\CategoriesColorsInterfaces;
use App\Interfaces\CategoriesItemsInterfaces;
use App\Interfaces\CategoriesSizeInterfaces;
use App\Interfaces\UserInterfaces;
use App\Repositories\CategoriesBrandsRepository;
use App\Repositories\CategoriesColorsRepository;
use App\Repositories\CategoriesItemsRepository;
use App\Repositories\CategoriesSizeRepository;
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
        $bindings = [
            // [Interface, Repository, Service]
            [\App\Interfaces\UserInterfaces::class, \App\Repositories\UserRepository::class, \App\Services\UserServices::class],
            [\App\Interfaces\CategoriesItemsInterfaces::class, \App\Repositories\CategoriesItemsRepository::class, \App\Services\CategoriesItemsServices::class],
            [\App\Interfaces\CategoriesColorsInterfaces::class, \App\Repositories\CategoriesColorsRepository::class, \App\Services\CategoriesColorsServices::class],
            [\App\Interfaces\CategoriesBrandsInterfaces::class, \App\Repositories\CategoriesBrandsRepository::class, \App\Services\CategoriesBrandsServices::class],
            [\App\Interfaces\CategoriesSizeInterfaces::class, \App\Repositories\CategoriesSizeRepository::class, \App\Services\CategoriesSizeServices::class],
        ];

        foreach ($bindings as [$interface, $repository, $service]) {
            $this->app->bind($interface, $repository);
            $this->app->bind($service, function ($app) use ($interface, $service) {
                return new $service($app->make($interface));
            });
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
