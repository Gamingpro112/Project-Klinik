<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>@yield('title')</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="{{ url('assets/library/admin/images/favicon.ico') }}">

        <!-- morris css -->
        <link rel="stylesheet" href="{{ url('./assets/library/admin/plugins/morris/morris.css') }}">

        <!-- DataTables -->
        <link href="{{ url('assets/library/admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/library/admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ url('assets/library/admin/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ url('assets/library/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/library/admin/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/library/admin/css/style.css') }}" rel="stylesheet" type="text/css" />

        @stack('styles')

    </head>


    <body>
        @include('includes.admin.loader')
        <div class="header-bg">
            <!-- Navigation Bar-->
            <header id="topnav">
                <div class="topbar-main">
                    <div class="container-fluid">

                        <!-- Logo-->
                        <div>
                            <a href="index.html" class="logo">
                                <img src="{{ url('assets/library/admin/images/logo.png') }}" alt="Logo Website" height="26"> 
                            </a>
                        </div>
                        <!-- End Logo-->

                        <div class="menu-extras topbar-custom navbar p-0">
                            <ul class="list-inline ml-auto mb-0">

                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list nav-user">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <img src="{{ url('assets/library/admin/images/users/avatar-6.jpg') }}" alt="user" class="rounded-circle">
                                        <span class="d-none d-md-inline-block ml-1">{{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i> </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <form action="{{ route('logout') }}" method="POST">
                                          @csrf
                                          <button type="submit" class="dropdown-item"><i class="dripicons-exit text-muted"></i> Logout</button>
                                        </form>
                                    </div>
                                </li>
                                <li class="menu-item list-inline-item">
                                    <!-- Mobile menu toggle-->
                                    <a class="navbar-toggle nav-link">
                                        <div class="lines">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                    <!-- End mobile menu toggle-->
                                </li>

                            </ul>

                        </div>
                        <!-- end menu-extras -->

                        <div class="clearfix"></div>

                    </div> <!-- end container -->
                </div>
                <!-- end topbar-main -->

                <!-- MENU Start -->
                <div class="navbar-custom">
                    <div class="container-fluid">       
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            @include('includes.admin.navigation')
                            <!-- End navigation menu -->
                        </div> <!-- end #navigation -->
                    </div> <!-- end container -->
                </div> <!-- end navbar-custom -->
            </header>
            <!-- End Navigation Bar-->

        </div>
        <!-- header-bg -->

        <div class="wrapper">
            <div class="container-fluid">
              @yield('content')
            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © 2019 - 2020 Zinzer <span class="d-none d-md-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- jQuery  -->
        <script src="{{ url('assets/library/admin/js/jquery.min.js') }}"></script>
        <script src="{{ url('assets/library/admin/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ url('assets/library/admin/js/modernizr.min.js') }}"></script>
        <script src="{{ url('assets/library/admin/js/waves.js') }}"></script>
        <script src="{{ url('assets/library/admin/js/jquery.slimscroll.js') }}"></script>

        <!--Morris Chart-->
        <script src="{{ url('assets/library/admin/plugins/morris/morris.min.js') }}"></script>
        <script src="{{ url('assets/library/admin/plugins/raphael/raphael.min.js') }}"></script>

        <!-- Required datatable js -->
        <script src="{{ url('assets/library/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('assets/library/admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{ url('assets/library/admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ url('assets/library/admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ url('assets/library/admin/plugins/datatables/jszip.min.js') }}"></script>
        <script src="{{ url('assets/library/admin/plugins/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ url('assets/library/admin/plugins/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ url('assets/library/admin/plugins/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ url('assets/library/admin/plugins/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ url('assets/library/admin/plugins/datatables/buttons.colVis.min.js') }}"></script>
        <!-- Responsive examples -->
        <script src="{{ url('assets/library/admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ url('assets/library/admin/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

        <!-- Datatable init js -->
        <script src="{{ url('assets/library/admin/pages/datatables.init.js') }}"></script>

        <!-- dashboard js -->
        <script src="{{ url('assets/library/admin/pages/dashboard.int.js') }}"></script>

        <!-- App js -->
        <script src="{{ url('assets/library/admin/js/app.js') }}"></script>

        @stack('scripts')

    </body>
</html>