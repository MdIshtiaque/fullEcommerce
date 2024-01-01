<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {

        $products = Product::with('productImage')->get();
        $categories = Category::all();
        return view('pages.Home.home', ['products' => $products, 'categories' => $categories]);
    }
}
