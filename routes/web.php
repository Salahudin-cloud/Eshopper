<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, 'index']);

Route::get('shop', [ShopController::class, 'shopIndex']);

Route::get('contact', [ContactController::class, 'contactIndex']);

Route::get('detail/item/{itemSlug}', [ShopController::class, 'detailShopIndex']);
// Route::get('detail', [ShopController::class, 'detailShopIndex']);

Route::get('shop/chart', [ShopController::class, 'chartShopIndex']);

Route::get('shop/chart/checkout', [ShopController::class, 'checkoutShopIndex']);
