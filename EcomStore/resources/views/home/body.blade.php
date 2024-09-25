<section class="featured spad">
    <div class="container">
        <div id="products_container" class="row featured__filter products-container">
            @foreach($products as $product)
                @if($product->quantity >= 1)
                    <div class="col-lg-3 col-md-4 col-sm-6 ">
                        <div class="featured__item clickable-div"
                             data-toggle="modal"
                             data-target="#descriptionModal"
                             data-title="{{$product->title}}"
                             data-description="{{$product->description}}"
                             data-image="products/{{$product->image}}"
                             data-category="{{$product->category}}"
                             data-quantity="{{$product->quantity}}"
                             data-price="{{$product->price}}"
                             data-discount="{{$product->discount_price}}"
                             data-id="{{$product->id}}"
                             data-quantityMax="{{$product->quantity}}">

                            <div class="featured__item__pic set-bg" data-setbg="products/{{$product->image}}"></div>

                            <div class="featured__item__text">
                                <h6><a href="{{url('product_details', $product->id)}}">{{$product->title}}</a></h6>

                                @if($product->discount_price == null)
                                    <h5>${{$product->price}}</h5>
                                @else
                                    <h5>
                                        <s style="color: red; font-weight: normal;">{{$product->price}}</s><span> ${{$product->discount_price}}</span>
                                    </h5>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            {{-- Blade file for modal pop-up product description --}}
            @include('home.modal_details')
        </div>
    </div>
</section>
