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
                        <h4 class="card-title">Edit user</h4>

                        <form class="forms-sample" action="{{url('/edit_user_confirm', $user->id)}}" method="POST"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label>Name</label>
                                <input class="text_color form-control" type="text" name="name"
                                       placeholder="Name"
                                       required="" style="color: black;" value="{{$user->name}}">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="text_color form-control" type="email" name="email"
                                       placeholder="Email@example.com"
                                       required="" style="color: black;" value="{{$user->email}}">
                            </div>

                            <div class="form-group">
                                <label>Role</label>
                                <select class="text_color form-control" name="username" required=""
                                        style="color: white;">
                                    <option selected="" value="0">0</option>

                                    <option value="1" style="color: white;">1</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input class="text_color form-control" type="number" name="phone"
                                       placeholder=""
                                       required="" style="color: black;" value="{{$user->phone}}">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input class="text_color form-control" type="text" name="address"
                                       placeholder=""
                                       required="" style="color: black;" value="{{$user->address}}">
                            </div>

                            <div class="form-group">
                                <label>Password(encrypted)</label>
                                <input class="text_color form-control" type="text" name="password"
                                       placeholder=""
                                       style="color: black;" value="{{$user->password}}">
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







