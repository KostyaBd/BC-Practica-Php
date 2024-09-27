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


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Products</h4>
                        <p class="card-description">Edit and delete products</p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th> Title </th>
                                    <th> Description </th>
                                    <th> Quantity </th>
                                    <th> Price </th>
                                    <th> Discount Price </th>
                                    <th></th>
                                    <th> Image </th>
                                    <th> Delete </th>
                                    <th> Edit </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $products)

                                    <tr>
                                        <td>{{$products->title}}</td>
                                        <td>{{ Str::limit($products->description, 20) }}</td>
                                        <td>{{$products->quantity}}</td>
                                        <td>{{$products->category}}</td>
                                        <td>{{$products->price}}</td>
                                        <td>{{$products->discount}}</td>
                                        <td><img src="/products/{{$products->image}}"></td>
                                        <td><a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('delete_product', $products->id)}}">Delete</a> </td>
                                        <td><a class="btn btn-success" href="{{url('edit_product', $products->id)}}">Edit</a> </td>

                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('admin.script')

</body>
</html>
