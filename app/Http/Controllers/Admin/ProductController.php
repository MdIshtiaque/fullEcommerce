<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Color;
use App\Models\Currency;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

    public function productStore(Request $request): RedirectResponse
    {
        try {
            $validatedData = $request->validate([
                'image' => 'required|array',
                'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg, webp|max:2048', // Example for image files
                // Add other fields and rules as needed
            ]);

            DB::beginTransaction();
            $photoString = $request->input('photo')[0];
            $photoArray = explode(',', $photoString);
            $tags = json_encode($request->tag);
            $status = request('publish', 'off');
            $coupon = request('coupon', 'off');
            foreach($request->category as $category) {
                $product = Product::create([
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

                foreach ($request->file('image') as $photo) {
                    if(in_array($photo->getClientOriginalName(), $photoArray))
                    {
                        $image = $product->productImage()->create([
                            'product_id' => $product->id,
                        ]);
                        upload($image, $photo, 'image');
                    }
                }

                if ($coupon === 'on') {
                    $product->productCoupon()->create([
                        'product_id' => $product->id,
                        'coupon_code'=> $request->coupon_code,
                        'percentage' => $request->coupon_percentage
                    ]);
                }

            }
            DB::commit();
        }catch (Exception $exception) {
            DB::rollback();
            dd($exception);
        }

        return redirect()->route('admin.addNewProduct');
    }
}
