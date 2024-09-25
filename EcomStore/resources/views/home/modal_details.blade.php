@include('home.script')

<div class="modal fade" id="descriptionModal" tabindex="-1" role="dialog" aria-labelledby="descriptionLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg custom-modal" role="document">
        <div class="modal-content">

            {{--            button to close window pop-up--}}
            {{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
            {{--                    <span aria-hidden="true">&times;</span>--}}
            {{--                </button>--}}

            <div class="modal-body">

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
                                    <div id="modalImageContainer" class="product__details__pic__item">
                                        <img id="modalImage" class="product__details__pic__item--large"
                                             src="" alt="Product image" style="width: 100%; height: auto;">
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="product__details__text">
                                    <h3><span id="modalTitle"></span></h3>

                                    <div class="product__details__price">
                                        <p><strong>Price:</strong> <span id="modalPrice"></span></p>
                                    </div>
                                    {{--                                    show crossed old price if discount--}}
                                    <p id="modalOldPrice" style="display: none; color: red;">
                                        Old Price: <span style="text-decoration: line-through;"
                                                         id="modalOldPriceValue"></span>
                                    </p>


                                    <p id="modalDescription">Product description will go here.</p>

                                    <form id="addToCartForm" method="POST">

                                        @csrf

                                        <input type="hidden" id="productIdInput" name="product_id">
                                        <input type="submit" class="primary-btn" value="ADD TO CART">

                                        <div class="product__details__quantity" style="padding-bottom: 10px">
                                            <div class="quantity">
                                                <input id="modalQuantityInput" type="number" name="quantity" value="1" min="1" onkeydown="return false;" >
                                            </div>
                                        </div>


                                    </form>


                                    <ul>
                                        <li><b>Availability</b> <span id="modalQuantity"></span> <span> units</span>
                                        </li>
                                        <li><b>Weight</b> <span>1 kg</span></li>
                                        <li><b>Category</b> <span id="modalCategory"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
