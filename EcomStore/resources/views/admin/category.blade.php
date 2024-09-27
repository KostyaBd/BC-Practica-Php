<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.css')

    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .h2_font {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .input_color {
            color: black;
        }

        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid white;
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


            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add a new category</h4>

                        <form class="forms-sample" action="{{url('/add_category')}}" method="POST"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label>Category name</label>
                                <input class="form-control" type="text" name="category_name"
                                       placeholder="Write category name">
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Categories</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <td>Category name</td>
                                    <td>Total products</td>
                                    <td>Available products</td>
                                    <td>Delete</td>
                                    <td>Delete with products</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories_data as $category)

                                    <tr>
                                        <td>{{ $category['category_name'] }}</td>
                                        <td>{{ $category['total_products'] }}</td>
                                        <td>{{ $category['active_products'] }}</td>

                                        <td><a onclick="return confirm('Are you sure you want to delete this category?')"
                                               class="btn btn-danger"
                                               href="{{url('delete_category', $category['id'])}}">Delete</a>
                                        </td>

                                        <td><a onclick="return confirm('Are you sure you want to delete this category with all products?')"
                                               class="btn btn-danger"
                                               href="{{url('delete_category_with_products', [$category['id'], $category['category_name']])}}">Delete with Products</a>
                                        </td>
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
</div>

@include('admin.script')

</body>
</html>
