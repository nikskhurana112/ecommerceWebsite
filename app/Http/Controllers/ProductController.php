<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function displayIndex(){
        return view('main.index');
    }
    public function showCart(){
        return view('main.cart');
    }
    public function productList(){
        return view('main.productList');
    }
    public function productDetails(){
        return view('main.productDetails');
    }
}
