<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Template</title>
    <style>
        /* Custom CSS */
        body {
            font-family: Helvetica, sans-serif;
            font-size: 13px;
        }

        .container {
            max-width: 680px;
            margin: 0 auto;
            border: 2px solid #000; /* Add border here */
            padding: 20px; /* Optional: Add some padding around the content */
            position: relative;
        }

        .logotype {
            background: #000;
            color: #fff;
            width: 75px;
            height: 75px;
            line-height: 75px;
            text-align: center;
            font-size: 11px;
        }

        .column-title {
            background: #eee;
            text-transform: uppercase;
            padding: 15px 5px 15px 15px;
            font-size: 11px
        }

        .column-detail {
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
        }

        .column-header {
            background: #eee;
            text-transform: uppercase;
            padding: 15px;
            font-size: 11px;
            border-right: 1px solid #eee;
        }

        .row {
            padding: 7px 14px;
            border-left: 1px solid #eee;
            border-right: 1px solid #eee;
            border-bottom: 1px solid #eee;
        }

        .alert {
            background: #ffd9e8;
            padding: 20px;
            margin: 20px 0;
            line-height: 22px;
            color: #333
        }

        .socialmedia {
            background: #eee;
            padding: 20px;
            display: inline-block
        }

        .download-button {
            display: block;
            width: 200px;
            padding: 10px;
            margin: 20px auto;
            text-align: center;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* If using an 'a' tag */
        }

        .download-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">

    <table width="100%">
        <tr>
            <td width="75px">
                <div class="logotype">Ecommerce</div>
            </td>
            <td width="300px">
                <div
                    style="background: #ffd9e8;border-left: 15px solid #fff;padding-left: 30px;font-size: 26px;font-weight: bold;letter-spacing: -1px;height: 73px;line-height: 75px;">
                    Order invoice
                </div>
            </td>
            <td></td>
        </tr>
    </table>
    <br><br>
    <table width="100%" style="border-collapse: collapse;">
        <tr>
            <td width="50%" style="background:#eee;padding:20px;">
                <strong>Date:</strong> {{ $order->created_at }}<br>
                <strong>Payment type:</strong> {{ $order->payment_type }}<br>
            </td>
            <td style="background:#eee;padding:20px;">
                <strong>Order-code:</strong> {{ $order->order_code }}<br>
                <strong>E-mail:</strong> {{ $order->user->email }}<br>
                <strong>Phone:</strong> {{ $order->billingDetail->phone }}<br>
            </td>
        </tr>
    </table>
    <br>
    <table width="100%">
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="vertical-align: text-top;">
                            <div
                                style="background: #ffd9e8 url(https://cdn0.iconfinder.com/data/icons/commerce-line-1/512/comerce_delivery_shop_business-07-128.png);width: 50px;height: 50px;margin-right: 10px;background-position: center;background-size: 42px;"></div>
                        </td>
                        <td>
                            <strong>Delivery</strong><br>
                            {{ $order->billingDetail->name }}<br>
                            Queens high 17 B<br>
                            SE-254 57 Helsingborg<br>
                            Sweden
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td style="vertical-align: text-top;">
                            <div
                                style="background: #ffd9e8 url(https://cdn4.iconfinder.com/data/icons/app-custom-ui-1/48/Check_circle-128.png) no-repeat;width: 50px;height: 50px;margin-right: 10px;background-position: center;background-size: 25px;"></div>
                        </td>
                        <td>
                            <strong>Delivery</strong><br>
                            {{ $order->billingDetail->name }}<br>
                            Queens high 17 B<br>
                            SE-254 57 Helsingborg<br>
                            Sweden
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br>
    {{--    <table width="100%" style="border-top:1px solid #eee;border-bottom:1px solid #eee;padding:0 0 8px 0">--}}
    {{--        <tr>--}}
    {{--            <td><h3>Checkout details</h3>Your checkout made by VISA Card **** **** **** 2478--}}
    {{--            <td>--}}
    {{--        </tr>--}}
    {{--    </table>--}}
    <br>
    <div
        style="background: #ffd9e8 url(https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/shopping-cart-shop-drop-trolly-128.png) no-repeat;width: 50px;height: 50px;margin-right: 10px;background-position: center;background-size: 25px;float: left; margin-bottom: 15px;"></div>
    <h3>Your Products</h3>

    <table width="100%" style="border-collapse: collapse;border-bottom:1px solid #eee;">
        <tr>
            <td width="40%" class="column-header">Products</td>
            <td width="20%" class="column-header">Quantity</td>
            <td width="20%" class="column-header">Price</td>
            <td width="20%" class="column-header">Total</td>
        </tr>
        @foreach($items as $item)
            <tr>
                <td class="row"><span style="color:#777;font-size:11px;">#64000L</span><br>{{ $item->cart->product->name }}</td>
                <td class="row">{{ $item->cart->quantity }}</td>
                <td class="row">{{ $item->cart->quantity }} <span style="color:#777">X</span> {{ $item->cart->price }} TK</td>
                <td class="row">{{ $item->cart->total_price }} TK</td>
            </tr>
        @endforeach
    </table>
    <br>
    <table width="100%" style="background:#eee;padding:20px;">
        <tr>
            <td>
                <table width="300px" style="float:right">
                    <tr>
                        <td><strong>Sub-total:</strong></td>
                        <td style="text-align:right">{{ $order->total_charge }} TK</td>
                    </tr>
                    <tr>
                        <td><strong>Shipping fee:</strong></td>
                        <td style="text-align:right">0 TK</td>
                    </tr>
                    <tr>
                        <td><strong>Grand total:</strong></td>
                        <td style="text-align:right">{{ $order->total_charge }} TK</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
    <a href="path_to_your_download" class="download-button">Download Invoice</a>
<!-- container -->
</body>
</html>
