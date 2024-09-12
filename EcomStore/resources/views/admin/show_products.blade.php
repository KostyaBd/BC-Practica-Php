<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.css')

    <style type="text/css">
        .div_center{
            text-align: center;
            padding-top: 40px;
        }

        .h2_font{
            font-size: 40px;
            padding-bottom: 40px;
        }

        .input_color{
            color: black;
        }

        .center{
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border:  3px solid white;
        }


    </style>

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

            <div class="div_center">
                <h2 class="h2_font">All Products</h2>
            </div>

            <table class="center">

                <tr>
                    <td>Title</td>
                    <td>Description</td>
                    <td>Quantity</td>
                    <td>Category</td>
                    <td>Price</td>
                    <td>Discount Price</td>
                    <td>Image</td>

                    <td>Delete</td>
                    <td>Edit</td>

                </tr>

                @foreach($products as $products)

                    <tr>
                        <td>{{$products->title}}</td>
                        <td>{{$products->description}}</td>
                        <td>{{$products->quantity}}</td>
                        <td>{{$products->category}}</td>
                        <td>{{$products->price}}</td>
                        <td>{{$products->discount}}</td>
                        <td><img src="/products/{{$products->image}}"></td>

                        <td><a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('delete_product', $products->id)}}">Delete</a> </td>
                        <td><a class="btn btn-success" href="{{url('edit_product', $products->id)}}">Edit</a> </td>

                    </tr>

                @endforeach

            </table>

        </div>
    </div>

@include('admin.script')

</body>
</html>
