<?php

use App\Http\Controllers\admin\categories\BrandController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\categories\ItemsController;
use App\Http\Controllers\admin\categories\ColorsController;
use App\Http\Controllers\admin\categories\SizeController;
use App\Http\Controllers\admin\ItemSellController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

// frontend 

Route::get('/', [IndexController::class, 'index']);

Route::get('contact', [ContactController::class, 'contactIndex']);

Route::controller(ShopController::class)->group(function () {
    Route::get('shop', 'shopIndex');
    Route::get('shop/cart', 'chartShopIndex');
    Route::get('shop/cart/checkout', 'checkoutShopIndex');
    Route::get('detail/item/{itemSlug}', 'detailShopIndex');
});


// backend ( admin )
Route::get('dashboard', [DashboardController::class, 'dashboardIndex'])->name('dashboard');

// backend route
Route::resource('users',  UsersController::class)->except([
    'show'
]);


Route::resources([
    'categories-item' => ItemsController::class,
    'categories-color' => ColorsController::class,
    'brand-item' => BrandController::class,
    'items' => ItemSellController::class,
    'size-item' => SizeController::class,
    'coupon' => CouponsController::class,
    'transactions' => TransactionController::class
]);
