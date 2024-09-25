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


{{--Categories side bar that sticks when reaches top and products--}}
<section class="hero">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories sticky-div" style="padding: 0 !important;">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
                    <ul>
                        <li><a href="#">Fresh Meat</a></li>
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Fruit & Nut Gifts</a></li>
                        <li><a href="#">Fresh Berries</a></li>
                        <li><a href="#">Ocean Foods</a></li>
                        <li><a href="#">Butter & Eggs</a></li>
                        <li><a href="#">Fastfood</a></li>
                        <li><a href="#">Fresh Onion</a></li>
                        <li><a href="#">Papayaya & Crisps</a></li>
                        <li><a href="#">Oatmeal</a></li>
                        <li><a href="#">Fresh Bananas</a></li>
                    </ul>
                </div>
            </div>

            {{--            Right side from categories bar that will be moving--}}
            <div class="col-lg-9 products_section">

                {{--Product details section--}}

                <section class="product-details spad">
                    <div class="container">

                        {{--            notification in case category was added succesfully--}}
                        @if(session()->has('message'))
                            <div class="alert alert-success">

                                {{--                    button to close notification--}}
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                                {{session()->get('message')}}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="product__details__pic">
                                    <div class="product__details__pic__item">
                                        <img class="product__details__pic__item--large"
                                             src="{{ URL::to('/') }}/products/{{$product->image}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="product__details__text">
                                    <h3>{{$product->title}}</h3>

                                    @if($product->discount_price == null)
                                        <h5>${{$product->price}}</h5>
                                    @else
                                        <h5>
                                            <s style="color: red">{{$product->price}}</s><span> ${{$product->discount_price}}</span>
                                        </h5>
                                    @endif


                                    <p>{{$product->description}}</p>

                                    <form action="{{url('add_to_cart', $product->id)}}" method="POST">

                                        @csrf

                                        @if($product->quantity >= 1)

                                            <input type="submit" class="primary-btn" value="ADD TO CART">

                                            <div class="product__details__quantity" style="padding-bottom: 10px">
                                                <div class="quantity">
                                                    <input type="number" name="quantity" value="1" min="1" max="{{$product->quantity}}" onkeydown="return false;">
                                                </div>
                                            </div>


                                        @else

                                            <h3 style="color: red">Out of stock!</h3>

                                        @endif


                                    </form>

                                    <ul>
                                        <li><b>Availability</b> <span>{{$product->quantity}} units</span></li>
                                        <li><b>Weight</b> <span>1 kg</span></li>
                                        <li><b>Category</b> <span>{{$product->category}}</span></li>

                                        {{--                        Share buttons--}}
                                        {{--                        <li><b>Share on</b>--}}
                                        {{--                            <div class="share">--}}
                                        {{--                                <a href="#"><i class="fa fa-facebook"></i></a>--}}
                                        {{--                                <a href="#"><i class="fa fa-twitter"></i></a>--}}
                                        {{--                                <a href="#"><i class="fa fa-instagram"></i></a>--}}
                                        {{--                                <a href="#"><i class="fa fa-pinterest"></i></a>--}}
                                        {{--                            </div>--}}
                                        {{--                        </li>--}}


                                    </ul>
                                </div>
                            </div>
                            {{--            <div class="col-lg-12">--}}
                            {{--                <div class="product__details__tab">--}}
                            {{--                    <ul class="nav nav-tabs" role="tablist">--}}
                            {{--                        <li class="nav-item">--}}
                            {{--                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"--}}
                            {{--                               aria-selected="true">Description</a>--}}
                            {{--                        </li>--}}
                            {{--                        <li class="nav-item">--}}
                            {{--                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"--}}
                            {{--                               aria-selected="false">Information</a>--}}
                            {{--                        </li>--}}
                            {{--                        <li class="nav-item">--}}
                            {{--                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"--}}
                            {{--                               aria-selected="false">Reviews <span>(1)</span></a>--}}
                            {{--                        </li>--}}
                            {{--                    </ul>--}}
                            {{--                    <div class="tab-content">--}}
                            {{--                        <div class="tab-pane active" id="tabs-1" role="tabpanel">--}}
                            {{--                            <div class="product__details__tab__desc">--}}
                            {{--                                <h6>Products Infomation</h6>--}}
                            {{--                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.--}}
                            {{--                                    Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus--}}
                            {{--                                    suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam--}}
                            {{--                                    vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada.--}}
                            {{--                                    Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat,--}}
                            {{--                                    accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a--}}
                            {{--                                    pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula--}}
                            {{--                                    elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus--}}
                            {{--                                    et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam--}}
                            {{--                                    vel, ullamcorper sit amet ligula. Proin eget tortor risus.</p>--}}
                            {{--                                <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem--}}
                            {{--                                    ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet--}}
                            {{--                                    elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum--}}
                            {{--                                    porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus--}}
                            {{--                                    nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.--}}
                            {{--                                    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed--}}
                            {{--                                    porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum--}}
                            {{--                                    sed sit amet dui. Proin eget tortor risus.</p>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="tab-pane" id="tabs-2" role="tabpanel">--}}
                            {{--                            <div class="product__details__tab__desc">--}}
                            {{--                                <h6>Products Infomation</h6>--}}
                            {{--                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.--}}
                            {{--                                    Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.--}}
                            {{--                                    Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam--}}
                            {{--                                    sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo--}}
                            {{--                                    eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.--}}
                            {{--                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent--}}
                            {{--                                    sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac--}}
                            {{--                                    diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante--}}
                            {{--                                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;--}}
                            {{--                                    Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.--}}
                            {{--                                    Proin eget tortor risus.</p>--}}
                            {{--                                <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem--}}
                            {{--                                    ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet--}}
                            {{--                                    elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum--}}
                            {{--                                    porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus--}}
                            {{--                                    nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="tab-pane" id="tabs-3" role="tabpanel">--}}
                            {{--                            <div class="product__details__tab__desc">--}}
                            {{--                                <h6>Products Infomation</h6>--}}
                            {{--                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.--}}
                            {{--                                    Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.--}}
                            {{--                                    Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam--}}
                            {{--                                    sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo--}}
                            {{--                                    eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.--}}
                            {{--                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent--}}
                            {{--                                    sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac--}}
                            {{--                                    diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante--}}
                            {{--                                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;--}}
                            {{--                                    Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.--}}
                            {{--                                    Proin eget tortor risus.</p>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                    </div>--}}
                            {{--                </div>--}}
                            {{--            </div>--}}
                        </div>
                    </div>
                </section>
                <!-- Product Details Section End -->

                {{--<!-- Related Product Section Begin -->--}}
                {{--<section class="related-product">--}}
                {{--    <div class="container">--}}
                {{--        <div class="row">--}}
                {{--            <div class="col-lg-12">--}}
                {{--                <div class="section-title related__product__title">--}}
                {{--                    <h2>Related Product</h2>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--        </div>--}}
                {{--        <div class="row">--}}
                {{--            <div class="col-lg-3 col-md-4 col-sm-6">--}}
                {{--                <div class="product__item">--}}
                {{--                    <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">--}}
                {{--                        <ul class="product__item__pic__hover">--}}
                {{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
                {{--                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>--}}
                {{--                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}
                {{--                    <div class="product__item__text">--}}
                {{--                        <h6><a href="#">Crab Pool Security</a></h6>--}}
                {{--                        <h5>$30.00</h5>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--            <div class="col-lg-3 col-md-4 col-sm-6">--}}
                {{--                <div class="product__item">--}}
                {{--                    <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">--}}
                {{--                        <ul class="product__item__pic__hover">--}}
                {{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
                {{--                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>--}}
                {{--                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}
                {{--                    <div class="product__item__text">--}}
                {{--                        <h6><a href="#">Crab Pool Security</a></h6>--}}
                {{--                        <h5>$30.00</h5>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--            <div class="col-lg-3 col-md-4 col-sm-6">--}}
                {{--                <div class="product__item">--}}
                {{--                    <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">--}}
                {{--                        <ul class="product__item__pic__hover">--}}
                {{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
                {{--                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>--}}
                {{--                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}
                {{--                    <div class="product__item__text">--}}
                {{--                        <h6><a href="#">Crab Pool Security</a></h6>--}}
                {{--                        <h5>$30.00</h5>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--            <div class="col-lg-3 col-md-4 col-sm-6">--}}
                {{--                <div class="product__item">--}}
                {{--                    <div class="product__item__pic set-bg" data-setbg="img/product/product-7.jpg">--}}
                {{--                        <ul class="product__item__pic__hover">--}}
                {{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
                {{--                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>--}}
                {{--                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}
                {{--                    <div class="product__item__text">--}}
                {{--                        <h6><a href="#">Crab Pool Security</a></h6>--}}
                {{--                        <h5>$30.00</h5>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--        </div>--}}
                {{--    </div>--}}
                {{--</section>--}}
            </div>
        </div>
    </div>
</section>


@include('home.script')

</body>
</html>
