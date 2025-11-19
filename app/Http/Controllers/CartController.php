<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop(){
        return view('shop');
    }
    public function cart(){
        return view('cart');
    }
}
