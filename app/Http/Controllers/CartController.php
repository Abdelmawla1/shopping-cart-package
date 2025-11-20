<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop(){
        $products = Product::all();
        return view('shop', compact('products'));
    }
    public function cart(){
        return view('cart');
    }
    public function addToCart($product_id){
        $product = Product::findOrFail($product_id);
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => [
                'image' => $product->image
            ]
        ]);
        return redirect()->back();
    }
}
