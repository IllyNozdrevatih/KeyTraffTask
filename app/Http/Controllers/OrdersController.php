<?php

namespace App\Http\Controllers;

use App\Order;


class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::where('count','>','2')
            ->with(['operator','offer'])
            ->where('operator_id','>','10')
            ->orWhere('operator_id','>','12')
            ->get();


        return view('orders.index',compact('orders'));
    }
}
