<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(): View|Application|Factory
    {
        $categories = Category::all();
        $items = Cart::with('product.productImage')->whereUser_id(auth()->user()->id)->get();

        return view('pages.shop.checkout', ['items' => $items, 'categories' => $categories]);
    }
}
