<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderedProduct;
use Illuminate\Http\Request;
use Mpdf\Mpdf;

class InvoiceController extends Controller
{
    public function showInvoice(Order $order)
    {
        $order = $order->load('billingDetail');
        $items = OrderedProduct::with('cart.product')->whereOrder_id($order->id)->get();
        $categories = Category::all();

        return view('pages.invoice.invoice', ['order' => $order, 'items' => $items, 'categories' => $categories]);
    }

    public function downloadInvoice(Order $order): void
    {

//        TODO: Need to Fix Design Breake
        $order = $order->load('billingDetail');
        $items = OrderedProduct::with('cart.product')->whereOrder_id($order->id)->get();

        $html = view('pages.invoice.download-invoice', ['order' => $order, 'items' => $items])->render();

        $mpdf = new Mpdf();
        $mpdf->writeHTML($html);

        $filename = 'Invoice-' . $order->order_code . '.pdf';
        $mpdf->Output($filename, 'D');
    }
}
