<section class="featured spad">
    <div class="container">
        <div class="row featured__filter">

            @foreach($products as $products)

                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <div class="featured__item clickable-div">
                        {{--                        <a href="{{url('product_details', $products->id)}}" class="clickable_link">--}}
                        <a>


                            <button type="button"
                                    class="btn btn-primary"
                                    data-toggle="modal"
                                    data-target="#descriptionModal"
                                    data-title="{{$products->title}}"
                                    data-description="{{$products->description}}"
                                    data-image="products/{{$products->image}}"
                                    data-category="{{$products->category}}"
                                    data-quantity="{{$products->quantity}}"
                                    data-price="{{$products->price}}"
                                    data-discount="{{$products->discount_price}}">

                                Click for description
                            </button>

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

            {{--            Modal pop-up for product description--}}
            <div class="modal fade" id="descriptionModal" tabindex="-1" role="dialog" aria-labelledby="descriptionLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">


                        <div class="modal-header">

                            <h5 class="modal-title" id="modalTitle">Product Title</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>

                        <div class="modal-body" id="modalDescription">
                            Product description will go here.
                        </div>


                    </div>
                </div>
            </div>


        </div>

    </div>
</section>

