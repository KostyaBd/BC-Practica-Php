<!DOCTYPE html>
<html lang="en">
<head>

    <base href="/public"
    @include('admin.css')

    <style type="text/css">

        .div_center{
            text-align: center;
            padding-top: 40px;
        }

        .font_size{
            font-size: 40px;
            padding-bottom: 40px;
        }

        .text_color{
            color: black;
            padding-bottom: 20px;
        }

        label{
            display: inline-block;
            width: 200px;
        }

        .div_design{
            padding-bottom: 15px;
        }


    </style>

</head>
<body>
<div class="container-scroller">

    @include('admin.sidebar')

    @include('admin.navbar')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="div_center">

                {{--            notification in case category was added succesfully--}}
                @if(session()->has('message'))
                    <div class="alert alert-success">

                        {{--                    button to close notification--}}
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                        {{session()->get('message')}}
                    </div>
                @endif

                <h1 class="font_size">Add Product</h1>

                <form action="{{url('/edit_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="div_design">
                        <label>Product Title</label>
                        <input class="text_color" type="text" name="title" value="{{$product->title}}" placeholder="Write a Title" required="">
                    </div>

                    <div class="div_design">
                        <label>Product Description</label>
                        <input class="text_color" type="text" name="description" value="{{$product->description}}" placeholder="Write a Description" required="">
                    </div>

                    <div class="div_design">
                        <label>Product Price</label>
                        <input class="text_color" type="number" min="0" name="price" value="{{$product->price}}" placeholder="Write a Price" required="">
                    </div>

                    <div class="div_design">
                        <label>Discount Price</label>
                        <input class="text_color" type="number" min="0" name="discount" value="{{$product->discount_price}}" placeholder="Write a Discount Price">
                    </div>

                    <div class="div_design">
                        <label>Product Quantity</label>
                        <input class="text_color" type="number" min="0" name="quantity" value="{{$product->quantity}}" placeholder="Write a Quantity" required="">
                    </div>

                    <div class="div_design">
                        <label>Product Category</label>
                        <select class="text_color" name="category" required="">
                            <option value="{{$product->category}}" selected="">{{$product->category}}</option>

                            @foreach($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="div_design">
                        <label>Current Product Image</label>
                        <img style="margin: auto" width="100" src="/products/{{$product->image}}" alt="">

                    </div>

                    <div class="div_design">
                        <label>Change Product Image</label>
                        <input type="file" name="image">

                    </div>

                    <div class="div_design">
                        <input type="submit" value="Update Product" class="btn btn-primary">

                    </div>

                </form>

            </div>
        </div>
    </div>

@include('admin.script')

</body>
</html>
