<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderList(){
        $orders = Order::latest()->paginate(10);
        return view("order.orders_list")->with(["orders"=>$orders]);
    }
}
