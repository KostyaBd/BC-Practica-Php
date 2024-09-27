<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            {{--Product 1--}}
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{$total_products_active}}</h3>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Total products active</h6>
                    </div>
                </div>
            </div>

            {{--Product 2--}}
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{$total_products}}</h3>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Total products</h6>
                    </div>
                </div>
            </div>

            {{--Product 3--}}
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{$active_orders}}</h3>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Active orders</h6>
                    </div>
                </div>
            </div>

            {{--Product 4--}}
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{$total_users}}</h3>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Total customers accounts</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Last 10 Active Orders</h4>
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
