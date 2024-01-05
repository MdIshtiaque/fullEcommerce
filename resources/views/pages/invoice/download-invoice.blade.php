<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Template</title>
</head>
<body style="font-family: Helvetica, sans-serif; font-size: 13px; margin: 0; padding: 0;">
<div style="max-width: 680px; margin: 20px auto; border: 1px solid #000; padding: 40px;">

    <table style="width: 100%;">
        <tr>
            <td style="width: 87px; height: 75px; background: #000; color: #fff; text-align: center; font-size: 11px;">
                <div style="width: 75px; height: 75px; line-height: 75px;">Ecommerce</div>
            </td>
            <td style="background: #ffd9e8; border-left: 15px solid #fff; padding-left: 30px; font-size: 26px; font-weight: bold; letter-spacing: -1px;">
                <div style="height: 75px; line-height: 75px;">Order invoice</div>
            </td>
            <td style="width: 75px;"> <!-- Empty cell for alignment, adjust width as needed -->
            </td>
        </tr>
    </table>

    <br><br>

    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="width: 50%; background: #eee; padding: 20px;">
                <strong>Date:</strong> {{ $order->created_at }}<br>
                <strong>Payment type:</strong> {{ $order->payment_type }}<br>
            </td>
            <td style="background: #eee; padding: 20px;">
                <strong>Order-code:</strong> {{ $order->order_code }}<br>
                <strong>E-mail:</strong> {{ $order->user->email }}<br>
                <strong>Phone:</strong> {{ $order->billingDetail->phone }}<br>
            </td>
        </tr>
    </table>

    <br>

    <table style="width: 100%;">
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="vertical-align: top; padding-right: 10px;">
                            <div
                                style="background: #ffd9e8; width: 50px; height: 50px;
                                background-image: url('{{ public_path('assets/images/logo/delivery.png') }}');
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: 25px;
                                float: left; margin-right: 10px; margin-bottom: 15px;">
                            </div>
                        </td>
                        <td style="vertical-align: top; margin-left: 60px !important;">
                            <strong>Delivery</strong><br>
                            {{ $order->billingDetail->name }}<br>
                            Queens high 17 B<br>
                            SE-254 57 Helsingborg<br>
                            Sweden
                        </td>
                    </tr>
                </table>
            </td>
            <td style="padding: 0;">
                <table style="border-collapse: collapse;">
                    <tr>
                        <td style="vertical-align: top; padding-right: 100px;">
                            <div
                                style="background: #ffd9e8; width: 50px; height: 50px;
                                background-image: url('{{ public_path('assets/images/logo/delivery.png') }}');
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: 25px;">
                            </div>
                        </td>
                        <td style="vertical-align: top; margin-left: 60px !important;">
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

    <div
        style="background: #ffd9e8; width: 50px; height: 50px; background-image: url('https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/shopping-cart-shop-drop-trolly-128.png'); background-repeat: no-repeat; background-position: center; background-size: 25px; float: left; margin-right: 10px; margin-bottom: 15px;">
    </div>
    <h3 style="margin-left: 60px;">Your Products</h3>

    <table style="width: 100%; border-collapse: collapse; border-bottom: 1px solid #eee;">
        <thead>
        <tr>
            <th style="background: #eee; text-transform: uppercase; padding: 15px; font-size: 11px; border-right: 1px solid #eee;">
                Products
            </th>
            <th style="background: #eee; text-transform: uppercase; padding: 15px; font-size: 11px; border-right: 1px solid #eee;">
                Quantity
            </th>
            <th style="background: #eee; text-transform: uppercase; padding: 15px; font-size: 11px; border-right: 1px solid #eee;">
                Price
            </th>
            <th style="background: #eee; text-transform: uppercase; padding: 15px; font-size: 11px; border-right: 1px solid #eee;">
                Total
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td style="padding: 7px 14px; border-left: 1px solid #eee; border-right: 1px solid #eee; border-bottom: 1px solid #eee;">
                    <span style="color: #777; font-size: 11px;">#64000L</span><br>{{ $item->cart->product->name }}</td>
                <td style="padding: 7px 14px; border-left: 1px solid #eee; border-right: 1px solid #eee; border-bottom: 1px solid #eee;">{{ $item->cart->quantity }}</td>
                <td style="padding: 7px 14px; border-left: 1px solid #eee; border-right: 1px solid #eee; border-bottom: 1px solid #eee;">{{ $item->cart->quantity }}
                    <span style="color: #777;">X</span> {{ $item->cart->price }} TK
                </td>
                <td style="padding: 7px 14px; border-left: 1px solid #eee; border-right: 1px solid #eee; border-bottom: 1px solid #eee;">{{ $item->cart->total_price }}
                    TK
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <br>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr>
            <td style="text-align: right;">
                <table style="width: auto; margin-left: auto; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 5px; font-weight: bold;">Sub-total:</td>
                        <td style="padding: 5px; text-align: right;">{{ $order->total_charge }} TK</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px; font-weight: bold;">Shipping fee:</td>
                        <td style="padding: 5px; text-align: right;">0 TK</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px; font-weight: bold;">Grand total:</td>
                        <td style="padding: 5px; text-align: right;">{{ $order->total_charge }} TK</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</div>
</body>
</html>
