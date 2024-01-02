<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoryToProductController extends Controller
{
    public function showCategoryWiseProducts(Category $category) {
        $itemsPerPage = 10;
        $items = ProductCategory::with('product', 'product.productImage', 'product.symbol')->whereCategory_id($category->id)->paginate($itemsPerPage);
        $categories = Category::all();
        return view('pages.shop.products', ['items' => $items, 'categories' => $categories]);
    }

    public function showAllProducts() {
        $itemsPerPage = 10;
        $items = ProductCategory::with('product', 'product.productImage', 'product.symbol')->paginate($itemsPerPage);
        $categories = Category::all();
        return view('pages.shop.products', ['items' => $items, 'categories' => $categories]);
    }
}
