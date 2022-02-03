<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('admin')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="  {{asset('/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">

    <!-- style from custom css -->
    <link rel="stylesheet" href="{{asset('/dist/css/custom.css')}}">


</head>

<body class="hold-transition sidebar-mini login_bg">
    <div class="container-fluid ">
        <div class="row">
            <div class="card col-lg-3 p-2 col-md-6 col-sm-block card-box shadow position-card">
                @if($errors->any())
                <div class="alert alert-danger">
                    {{$errors->first()}}
                </div>
                @endif
                <div class="p-1 card-title bg-primary text-center">
                    <h4>Admin Login</h4>
                </div>

                <!-- form start -->
                <form method="post" action="{{route('adminlogin')}}" id="quickForm">
                    <!-- {{url('/admin')}} -->
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password " required>
                        </div>
                        <div class="form-group mb-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="terms" value="1" class="custom-control-input"
                                    id="exampleCheck1" required>
                                <label class="custom-control-label" for="exampleCheck1">I agree to the
                                    <a href="#">terms of service</a>.</label>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- /.content -->
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- jquery-validation -->
    <script src="{{asset('/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/plugins/jquery-validation/additional-methods.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- Page specific script -->
    <script src="{{asset('/dist/js/custom.js')}}"></script>
</body>

</html>
