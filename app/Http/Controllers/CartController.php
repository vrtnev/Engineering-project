<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view('cart');
    }

    public function order()
    {
        return view('order');
    }

    public function cartAdd($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $orderId = Order::create()->id;
            session(['orderId'=> $orderId]);
        } else {
            
        }
        $order = Order::find($orderId);
        dump($orderId);
    }
}
