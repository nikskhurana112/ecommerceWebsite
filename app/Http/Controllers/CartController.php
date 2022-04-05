<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function store(Request $req){
        if(Auth::check()){
        
        $user = Auth::user()->username;

        $product = Product::findOrFail($req->id);

        Cart::add($product->id, $product->name, $req->quantity, $product->price);
        Cart::store($user);
        session()->flash("success", "Added to Cart Successfully");

        return redirect()->back();
        }
    }

    public function remove(Request $req){

        Cart::remove($req->id);

    }
    public function showCart(){
        
        if(Auth::check()){
            $userCart = Auth::user()->username;
            Cart::restore($userCart);
            return view('main.cart');
        } 
    }
}
