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


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Completed Orders History</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Phone </th>
                                    <th> Address </th>
                                    <th> Product </th>
                                    <th> Qt </th>
                                    <th> Total $ </th>
                                    <th> Payment </th>
                                    <th> Status </th>
                                    <th> Delete </th>
                                    <th> Mark undone </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)

                                    <tr>
                                        <td>{{$order->name}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->phone}}</td>
                                        <td>{{$order->address}}</td>
                                        <td>{{$order->product_title}}</td>
                                        <td>{{$order->quantity}}</td>
                                        <td>{{$order->price}} $</td>
                                        <td>{{$order->payment_status}}</td>
                                        <td>{{$order->delivery_status}}</td>
                                        <td><a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('delete_order', $order->id)}}">Delete</a> </td>
                                        <td><a class="btn btn-success" href="{{url('mark_undone_order', $order->id)}}">Mark Undone</a> </td>

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
