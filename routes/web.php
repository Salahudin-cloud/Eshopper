<?php

use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\categories\ItemsController;
use App\Http\Controllers\admin\categories\ColorsController;
use App\Http\Controllers\admin\ItemSellController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// frontend 

Route::get('/', [IndexController::class, 'index']);

Route::get('contact', [ContactController::class, 'contactIndex']);

Route::controller(ShopController::class)->group(function () {
    Route::get('shop', 'shopIndex');
    Route::get('shop/chart', 'chartShopIndex');
    Route::get('shop/chart/checkout', 'checkoutShopIndex');
    Route::get('detail/item/{itemSlug}', 'detailShopIndex');
});


// backend ( admin )
Route::get('dashboard', [DashboardController::class, 'dashboardIndex'])->name('dashboard');

// backend route
Route::resources([
    'categories-item' => ItemsController::class,
    'categories-color' => ColorsController::class,
    'brand-item' => BrandController::class,
    'items' => ItemSellController::class
]);
