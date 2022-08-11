<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <!-- <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}">
  Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/timepicker_css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">

    <style>
        .span-info {
            background-color: rgb(178, 224, 116);
            padding: 5px;
            border-radius: 4px;
        }

        .span-warning {
            background-color: yellow;
            padding: 5px;
            border-radius: 4px;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('admin.dashboard')}}"
                        class="nav-link {{ isset($page) && ($page == 'dashboard') ? 'active': '' }}">Home</a>
                </li>

            </ul>


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                        <!-- <span class="badge badge-warning navbar-badge">15</span> -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.edit',session()->get('user.id'))}}" class="dropdown-item">
                            <i class="fas fa-edit"></i> Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.logout',session()->get('user_type')) }}" class="dropdown-item">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside
            class="main-sidebar  elevation-4 {{session()->get('user_type') == 'admin' ? 'sidebar-dark-primary' : 'sidebar-light-primary'}}">
            <!-- Brand Logo -->
            <a href="{{ route('admin.dashboard') }}" class="brand-link">
                <span class="brand-text font-weight-light">ADMIN PANEL</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('admin/images/user.png') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ session()->get('user.email')}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="{{ route('admin.dashboard') }}"
                                class="nav-link {{ isset($page) && ($page == 'dashboard') ? 'active': '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('inbox') }}"
                                class="nav-link {{ (isset($page) && $page == 'inbox') ? 'active': '' }}">
                                <!-- <i class="nav-icon far fa-image"></i> -->
                                <i class=" nav-icon fas fa-sitemap" style=""></i>
                                <p>
                                    Inbox

                                    @if (session()->get('user_type') == 'admin')
                                    @php
                                    $order=\App\Model\Order::where('order_status','Pending')->get();
                                    @endphp
                                    @else
                                    @php
                                    $order=\App\Model\Order::where('affiliation_id',session()->get('user')->affiliation_id)->where('order_status','Pending')->get();
                                    @endphp
                                    @endif

                                    @if ($order->count() > 0)
                                    <span class="badge badge-warning">{{$order->count()}}</span>
                                    @endif

                                </p>
                            </a>
                        </li>
                        @if (session()->get('user_type') == 'admin')
                        <li class="nav-item">
                            <a href="#"
                                class="nav-link {{ isset($page) && ($page == 'vendor_setting') ? 'active': '' }}">
                                <i class="nav-icon far fas fa-star"></i>
                                <p>
                                    Vendor

                                </p>
                                <i class="right fas fa-angle-left"></i>

                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('vendor.list') }}"
                                        class="nav-link {{ isset($page) && ($page == 'vendor_setting') ? 'active': '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            List
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('vendor.add') }}"
                                        class="nav-link {{ isset($page) && ($page == 'vendor_setting') ? 'active': '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Add
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                                class="nav-link {{ isset($page) && ($page == 'admin_setting') ? 'active': '' }}">
                                <i class="nav-icon far fas fa-user"></i>
                                <p>
                                    Admin User

                                </p>
                                <i class="right fas fa-angle-left"></i>

                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.list') }}"
                                        class="nav-link {{ isset($page) && ($page == 'admin_setting') ? 'active': '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            List
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.add') }}"
                                        class="nav-link {{ isset($page) && ($page == 'admin_setting') ? 'active': '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Add
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif


                        <li class="nav-item">
                            <a href="#"
                                class="nav-link {{ isset($page) && ($page == 'offer_setting') ? 'active': '' }}">
                                <i class="nav-icon far fas fa-gift"></i>
                                <p>
                                    Offer

                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('offer.list') }}"
                                        class="nav-link {{ isset($page) && ($page == 'offer_setting') ? 'active': '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            List
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('offer.add') }}"
                                        class="nav-link {{ isset($page) && ($page == 'offer_setting') ? 'active': '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Add
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @if (session()->get('user_type') == 'admin')

                        <li class="nav-item">
                            <a href="#"
                                class="nav-link {{ isset($page) && ($page == 'offer_type_setting') ? 'active': '' }}">
                                <i class="nav-icon far fas fa-list"></i>
                                <p>
                                    Offer Type

                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('offertype.list') }}"
                                        class="nav-link {{ isset($page) && ($page == 'offer_type_setting') ? 'active': '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            List
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('offertype.add') }}"
                                        class="nav-link {{ isset($page) && ($page == 'offer_type_setting') ? 'active': '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Add
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        {{-- <li class="nav-item">
                            <a href="#"
                                class="nav-link {{ isset($page) && ($page == 'brand_setting') ? 'active': '' }}">
                                <i class="nav-icon far fas fa-check"></i>
                                <p>
                                    Brand

                                </p>
                                <i class="right fas fa-angle-left"></i>

                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('brand.list') }}"
                                        class="nav-link {{ isset($page) && ($page == 'brand_setting') ? 'active': '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            List
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('brand.add') }}"
                                        class="nav-link {{ isset($page) && ($page == 'brand_setting') ? 'active': '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Add
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}

                        <li class="nav-item">
                            <a href="{{ route('product.list') }}"
                                class="nav-link {{ (isset($page) && $page == 'product') ? 'active': '' }}">
                                <!-- <i class="nav-icon far fa-image"></i> -->
                                <i class=" nav-icon fas fa-box" style=""></i>
                                <p>
                                    Products
                                </p>
                            </a>
                        </li>
                        @if (session()->get('user_type') == 'admin')
                        <li class="nav-item">
                            <a href="{{ route('productcategory.list') }}"
                                class="nav-link {{ (isset($page) && $page == 'productcategory') ? 'active': '' }}">
                                <!-- <i class="nav-icon far fa-image"></i> -->
                                <i class=" nav-icon fas fa-bars"></i>
                                <p>
                                    Category
                                </p>
                            </a>
                        </li>
                        @endif
                        {{-- <li class="nav-item">
                            <a href="{{ route('inbox') }}"
                                class="nav-link {{ (isset($page) && $page == 'inbox') ? 'active': '' }}">
                                <!-- <i class="nav-icon far fa-image"></i> -->
                                <i class=" nav-icon fas fa-brnad" style=""></i>
                                <p>
                                    Brand
                                </p>
                            </a>
                        </li> --}}

                        {{-- <li class="nav-item">
                            <a href="{{ route('news.list') }}"
                                class="nav-link {{ (isset($page) && $page == 'news') ? 'active': '' }}">
                                <i class=" nav-icon fas fa-newspaper"></i>
                                <p>
                                    তথ্যভান্ডার
                                </p>
                            </a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a href="{{ route('gallery.list') }}"
                                class="nav-link {{ (isset($page) && $page == 'gallery') ? 'active': '' }}">
                                <i class=" nav-icon fas fa-camera"></i>
                                <p>
                                    গ্যালারী
                                </p>
                            </a>
                        </li> --}}
                        @if (session()->get('user_type') == 'admin')

                        <li class="nav-item">
                            <a href="{{ route('bannerimage.list') }}"
                                class="nav-link {{ (isset($page) && $page == 'bannerimage') ? 'active': '' }}">
                                <!-- <i class="nav-icon far fa-image"></i> -->
                                <i class=" nav-icon fas fa-images"></i>
                                <p>
                                    Banner Images
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('settings.list') }}"
                                class="nav-link {{ (isset($page) && $page == 'settings') ? 'active': '' }}">
                                <!-- <i class="nav-icon far fa-image"></i> -->
                                <i class=" nav-icon fas fa-cog"></i>
                                <p>
                                    Settings
                                </p>
                            </a>
                        </li>
                        @endif

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1 class="m-0 text-dark">Dashboard</h1> -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active">@yield('pageName')</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                @if(session()->has('message'))
                <p id="flashMessage" class="alert {{ session()->get('alert-class', 'alert-info') }}">{{
                    session()->get('message') }}</p>
                @endif
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020-2021 <a href="#">Lorem Ipsum</a>.</strong>
            All rights reserved.

        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    // <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    // <script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <!-- Summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}">
    </script>
    <!-- DataTables -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('admin/timepicker_js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker4').datetimepicker({
                pickTime: false
            });
        });

    </script>
    <script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
    <link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet" />

    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script src="{{asset('assets_website/js/daterangepicker.js')}}"></script>

    <script>
        $(function () {


            $('.select2').select2()
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                // "paging": true,
                // "lengthChange": false,
                // "searching": false,
                // "ordering": true,
                // "info": true,
                // "autoWidth": false,
                // "responsive": true,
                 "responsive": true,
                "autoWidth": false
            });
        });
        $(document).ready(function() {
        $('.summernote').summernote();
        });
        $(document).ready(function () {
            setTimeout(function () {
                $("#flashMessage").slideUp(1000);
            }, 3000);
        });

    </script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    @yield('footer_css_js')

</body>

</html>