<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    // shop
    public function shopIndex()
    {
        return view('shopMenu');
    }


    // detail shop
    public function detailShopIndex()
    {
        return view('shopDetail');
    }

    // cart shop
    public function chartShopIndex()
    {
        return view('shoppingChart');
    }


    // chekout shop
    public function checkoutShopIndex()
    {
        return view('shoppingCheckout');
    }
}
