<section class="featured spad">
    <div class="container">
        <div class="row featured__filter">

            @foreach($products as $products)

                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <div class="featured__item clickable-div">
                        <a href="{{url('product_details', $products->id)}}" class="clickable_link">

                            <div class="featured__item__pic set-bg" data-setbg="products/{{$products->image}}"></div>

                            <div class="featured__item__text">
                                <h6><a href="{{url('product_details', $products->id)}}">{{$products->title}}</a></h6>

                                @if($products->discount_price == null)
                                    <h5>${{$products->price}}</h5>
                                @else
                                    <h5><s>{{$products->price}}</s> ${{$products->discount_price}}</h5>
                            @endif
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    </div>
</section>

