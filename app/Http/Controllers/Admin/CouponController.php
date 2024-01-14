<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function showAllCoupons()
    {
        $items = Coupon::paginate(10);

        return view('Admin.pages.Coupon.list', ['items' => $items, 'title' => 'Coupon list']);
    }

    public function couponStore(Request $request)
    {
        try {
            $status = request('status', 'off');
            Coupon::create([
                'coupon_code' => $request->coupon_code,
                'percentage' => $request->percentage,
                'valid_till' => $request->valid_till,
                'is_active' => ($status === 'on') ? true : false,
            ]);
        } catch (Exception $exception) {
            toastr()->Error('Something Went Wrong!!!');
        }
        toastr()->Success('You have successfully created a new Coupon!!!');

        return back();
    }

    public function toggle(Request $request, Coupon $coupon): JsonResponse
    {
        try {
            $status = (bool) $request->input('status');
            $coupon->update(['is_active' => $status]);
            $data = ['message' => 'Success! status updated', 'is_active' => $coupon->is_active, 'id' => $coupon->id];
        } catch (Exception $exception) {
            $data['message'] = 'Sorry! something went wrong';

            return response()->json($data, $status = 500);
        }

        return response()->json($data);
    }

    public function edit(Request $request, Coupon $coupon): RedirectResponse
    {
        try {
            $status = request('status', 'off');
            $coupon->update([
                'coupon_code' => $request->coupon_code,
                'percentage' => $request->percentage,
                'valid_till' => $request->valid_till,
                'is_active' => ($status === 'on') ? true : false,
            ]);
        }catch (Exception $exception) {
            toastr()->Error('Something Went Wrong!!!');
        }
        toastr()->Success('You have successfully updated a Coupon!!!');

        return back();
    }

    public function delete(Coupon $coupon)
    {
        try {
            $coupon->delete();
        }catch (Exception $exception) {
            toastr()->Error('Something Went Wrong!!!');
        }
        toastr()->Success('You have successfully Deleted a Coupon!!!');

        return back();
    }
}
