@php
    $grand_total = 0;
@endphp

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecom Store</title>

    @include('home.css')

</head>
<body>

@include('home.navbar')

<section class="shoping-cart spad">
    <div class="container" style="padding-top: 20px">

        {{--            notification in case category was added succesfully--}}
        @if(session()->has('message'))
            <div class="alert alert-success">

                {{--                    button to close notification--}}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                {{session()->get('message')}}
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                        <tr>
                            <th class="shoping__product">Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart as $cart)
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="products/{{$cart->image}}" alt="" style="max-height: 100px">
                                    <h5>{{$cart->title}}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    {{$cart->price}}
                                </td>
                                <td class="shoping__cart__quantity">
                                    {{$cart->quantity}}
                                </td>
                                <td class="shoping__cart__total">
                                    ${{ number_format($cart->price * $cart->quantity, 2) }}
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close"></span>
                                </td>
                            </tr>

                            @php
                                $grand_total += $cart->price * $cart->quantity;
                            @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Subtotal <span>$ {{$grand_total}}</span></li>
                        <li>Total <span>$ {{$grand_total}}</span></li>
                    </ul>
                    <a href="{{url('cash_payment')}}" class="primary-btn">CASH Payment (on delivery)</a>
                    <a href="" class="primary-btn" style="margin-top: 20px">CARD Payment</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('home.script')

</body>
</html>
