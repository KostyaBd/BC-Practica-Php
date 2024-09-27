<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.css')

</head>
<body>
<div class="container-scroller">

    @include('admin.sidebar')

    @include('admin.navbar')


    <div class="main-panel">
        <div class="content-wrapper">

            {{--            notification in case category was added succesfully--}}
            @if(session()->has('message'))
                <div class="alert alert-success">

                    {{--                    button to close notification--}}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                    {{session()->get('message')}}
                </div>
            @endif


            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit product</h4>

                        <form class="forms-sample" action="{{url('/edit_product_confirm', $product->id)}}" method="POST"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label>Product Title</label>
                                <input class="form-control" type="text" name="title" placeholder="Write a Title"
                                       required="" style="color: black;" value="{{$product->title}}">
                            </div>

                            <div class="form-group">
                                <label>Product Description</label>
                                <input class="text_color form-control" type="text" name="description"
                                       placeholder="Write a Description"
                                       required="" style="color: black;" value="{{$product->description}}">
                            </div>

                            <div class="form-group">
                                <label>Product Price</label>
                                <input class="text_color form-control" type="number" min="0" name="price"
                                       placeholder="Write a Price"
                                       required="" style="color: black;" value="{{$product->price}}">
                            </div>

                            <div class="form-group">
                                <label>Discount Price</label>
                                <input class="text_color form-control" type="number" min="0" name="discount"
                                       placeholder="Write a Discount Price" style="color: black;" value="{{$product->discount_price}}">
                            </div>

                            <div class="form-group">
                                <label>Product Quantity</label>
                                <input class="text_color form-control" type="number" min="0" name="quantity"
                                       placeholder="Write a Quantity"
                                       required="" style="color: black;" value="{{$product->quantity}}">
                            </div>

                            <div class="form-group">
                                <label>Product Category</label>
                                <select class="text_color form-control" name="category" required=""
                                        style="color: white;">
                                    <option selected="" value="{{$product->category}}"> value="{{$product->category}}"</option>

                                    @foreach($category as $category)
                                        <option value="{{$category->category_name}}"
                                                style="color: white;">{{$category->category_name}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">

                                <label>Current Product Image</label>
                                <img style="width: 150px" class="justify-start" src="/products/{{$product->image}}" alt="">
                            </div>

                            <div class="form-group">
                                <label>Product Image</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled
                                           placeholder="Upload Image" required="">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary"
                                            type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</div>

@include('admin.script')

</body>
</html>







