<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductController extends Controller
{
    public function displayIndex(){
        
        $products = Product::all();
        $cart = Cart::content();
        return view('main.index')->with(['products' => $products, "cart" => $cart]);
    }
    public function productList(){
        $products = Product::all();
        return view('main.productList')->with(['products' => $products]);
    }

    public function productInfo(Request $req){

        $product = Product::find($req->id);
        return view("main.productDetails")->with(["product" => $product]);
    }
    public function cart(){

    }
}
