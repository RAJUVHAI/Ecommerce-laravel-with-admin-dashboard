<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('adminBlade')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href=" {{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('/plugins/summernote/summernote-bs4.min.css')}}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- custome css -->
    <link rel="stylesheet" href="{{asset('/dist/css/custom.css')}}">



</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

   
        <!-- Preloader -->
        <div style="background-color: #E5EFF1;" class="preloader flex-column justify-content-center align-items-center">
            <div>
                <img style="border-radius: 50px;width: 100px ; height:100px ;" src="https://i.gifer.com/1amw.gif" alt="">
            </div>
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li>
                    <a href="{{route('logout')}}">
                        <button type="button" class="btn bg-primary"><i class="fa fa-sign-out p-1" aria-hidden="true"></i>Logout</button>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{asset('dist/img/brandingLogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">ecommoerce-logo</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Raju Hosen</a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item menu-open">
                            <a href="{{route('dashboard')}}" class="nav-link {{request()->is('dashboard')?'active':''}}">

                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item {{request()->is('neworder')?'menu-open':(
                        request()->is ('manageorder')?'menu-open':'')}}">

                            <a href="#" class="nav-link  {{request()->is('neworder')?'active':(
                        request()->is ('manageorder')?'active':'')}}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Order
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('neworder')}}" class="nav-link {{request()->is('neworder')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>New Order</p>
                                        <!-- <i class="right fas fa-circle-left"></i> -->
                                    </a>
                                    <!-- <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Order Table</p>
                                            </a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="nav-item ">
                                    <a href="{{route('manageorder')}}" class="nav-link {{ (request()->is('manageorder')) ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage Order</p>

                                    </a>
                                </li>

                            </ul>
                            </a>

                        <li class="nav-item {{request()->is('addproduct')?'menu-open':(
                        request()->is ('manageproduct')?'menu-open':'')}}">
                            <a href="#" class="nav-link {{request()->is('addproduct')?'active':(
                        request()->is ('manageproduct')?'active':'')}}">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Product
                                    <i class="fas fa-angle-left right"></i>
                                    <!-- <span class="badge badge-info right">6</span> -->
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('addproduct')}}" class="nav-link {{request()->is('addproduct')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Product</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('manageproduct')}}" class="nav-link {{request()->is('manageproduct')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage Product</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item {{request()->is('addcatagory')?'menu-open':(
                        request()->is ('parentcatagory')?'menu-open':(
                           request()->is ('childcatagory')?'menu-open':'')
                        )}}">
                        <a href="#" class="nav-link {{request()->is('addcatagory')?'active':(
                           request()->is ('parentcatagory')?'active':(
                           request()->is ('childcatagory')?'active':''))}}">
                           <i class="nav-icon fas fa-chart-pie"></i>                    
                           <p>
                              Catagory
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="{{route('addcatagory')}}"
                                 class="nav-link {{request()->is('addcatagory')?'active':''}}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                    Add Catagory
                                 </p>
                              </a>
                           </li>
                        </ul>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="{{route('parentcatagory')}}"
                                 class="nav-link {{request()->is('parentcatagory')?'active':''}}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                    Parent Catagory
                                 </p>
                              </a>
                           </li>
                        </ul>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="{{route('childcatagory')}}"
                                 class="nav-link {{request()->is('childcatagory')?'active':''}}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                    Child Catagory
                                 </p>
                              </a>
                           </li>
                        </ul>
                     </li>


                      


                        <li class="nav-item {{request()->is('banner')?'menu-open':(
                        request()->is ('deliveryinfo')?'menu-open': (request()->is('privercy')?'menu-open': (request()->is('topslider')?'menu-open': '')  ) )}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    CMS
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('banner')}}" class="nav-link {{request()->is('banner')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Top Banner</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('bottombanner')}}" class="nav-link {{request()->is('bottombanner')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Bottom Banner</p>
                                    </a>
                                </li>
                               
                                <li class="nav-item">
                                    <a href="{{route('deliveryinfo')}}" class="nav-link {{request()->is('deliveryinfo')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Delivery Info</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('privercy')}}" class="nav-link {{request()->is('privercy')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Privercy Policy</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('topslider')}}" class="nav-link {{request()->is('topslider')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Top Slider</p>
                                    </a>
                                </li>

                            </ul>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Setting
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('appsetting')}}" class="nav-link {{request()->is('appsetting')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>App Setting</p>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{route('smssetting')}}" class="nav-link {{request()->is('smssetting')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sms Setting</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('emailsetting')}}" class="nav-link {{request()->is('emailsetting')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Email Setting</p>
                                    </a>
                                </li>

                            </ul>
                        </li>



                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Enveloped
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('subscriber')}}" class="nav-link {{request()->is('subscriber')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Subscriber</p>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{route('contactsms')}}" class="nav-link {{request()->is('contactsms')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Contact sms</p>
                                    </a>
                                </li>
                               

                            </ul>
                        </li>



                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col  ">
                        <i style="font-size:25px;background-color:blue;padding:10px; position:fixed;border-radius:50px;color:white;top:90%;right:5%;z-index:99999999999999999999;" onclick="topFunction()" id="myBtn" title="Go to top" class="fa fa-arrow-circle-o-up" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <!-- /.sidebar -->
        </aside>

      <div class="content-wrapper">
          <div class="content-header">
               <div class="contain">
                  <div class="row mb-2">
                     <div class="col-lg-12">
                        @if (session('status'))
                        <div class="alert alert-success">
                           {{ session('status') }}
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        @endif
                        
                        @if($errors->any())
                            <div class="alert alert-danger">
                                {{$errors->first()}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                     </div>
                  </div>
               </div>
      </div>
        
           
  
     

        @yield('content')
        <!-- Content Wrapper. Contains page content -->

      </div>
    </div>
 

    <!-- ./wrapper -->

    <!-- jQuery -->

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.js')}}"></script>

    <!-- datatbles plugins -->
    <script src=" {{asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}."></script>
    <script src="{{asset('/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>


    <script src="{{asset('dist/js/pages/dashboard3.js')}}"></script>

    <script src="{{asset('dist/js/custom.js')}}"></script>
    <script src="{{asset('dist/js/customTable.js')}}"></script>
    <script src="{{asset('dist/js/summerNote.js')}}"></script>



</body>

</html>