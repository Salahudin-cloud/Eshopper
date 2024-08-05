<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, 'index']);

Route::get('shop', [ShopController::class, 'shopIndex']);

Route::get('contact', [ContactController::class, 'contactIndex']);