<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
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
        $tags = json_encode($request->tag);
        $status = request('publish', 'off');

        foreach($request->category as $category) {
            Product::create([
                'category_id' => $category,
                'currency_id' => $request->currency,
                'created_by'  => $request->added_by,
                'code'        => generateUniqueCode(),
                'name'        => $request->name,
                'description' => $request->description,
                'tags'        => $tags,
                'price'       => $request->price,
                'is_active'   => ($status === 'on') ? true : false,
            ]);
        }
    }
}
