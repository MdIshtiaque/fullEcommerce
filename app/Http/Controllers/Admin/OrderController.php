<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showAllOrder()
    {
        $items = Order::with('user')->paginate(10);

        return view('Admin.pages.order.list', ['items' => $items, 'title' => 'Order List']);
    }
}
