<?php

use App\Http\Controllers\admin\CategoriesItemController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ItemsController;
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

// categories item
Route::resource('categories-item', CategoriesItemController::class)->except([
    'show'
]);

// items
Route::resource('items', ItemsController::class)->except([
    'show'
]);
