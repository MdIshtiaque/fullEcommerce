<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Currency;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addNewProduct()
    {

        $admins = User::all();
        $categories = Category::get();
        $colors = Color::get();
        $currencies = Currency::get();

        return view('Admin.pages.product.create', ['title' => 'Add New Product',
                                                        'categories' => $categories,
                                                        'admins' => $admins,
                                                        'colors' => $colors,
                                                        'currencies' => $currencies
                                                        ]);
    }

    public function productStore(Request $request)
    {
        $photoString = $request->input('photo')[0];
        $photoArray = explode(',', $photoString);
        dd($request->all(), $photoArray);
    }
}
