<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addNewProduct() {
        return view('Admin.pages.product.create', ['title' => 'Add New Product']);
    }
}
