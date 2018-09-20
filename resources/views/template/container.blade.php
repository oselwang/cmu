<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico"/>

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('css/fonts/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('css/plugin/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('css/plugin/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('css/plugin/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('css/plugin/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('css/plugin/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">

    <!-- Main Theme Style -->
    <link href="{{asset('css/main.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.5/sweetalert2.min.css">
    @yield('style')
</head>

<body class="nav-md">
{{csrf_field()}}
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{url('home')}}" class="site_title"> <span>CV. CMU</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{Auth::user()->nama}}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
            @if(\Session::get('dealer_id') != null)
                @if(Auth::user()->hasRole('Owner'))
                    @include('template.menu.owner')
                @elseif(Auth::user()->hasRole('Staff Bengkel'))
                    @include('template.menu.staff_bengkel')
                @endif
            @endif
            <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"> </i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                {{Auth::user()->nama}}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="{{url('auth/logout')}}"><i class="fa fa-sign-out pull-right"></i> Log
                                        Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
    @yield('content')
    <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('js/plugin/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('js/plugin/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('js/plugin/chart.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('js/plugin/gauge.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('js/plugin/bootstrap-progressbar.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('js/plugin/icheck.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('js/plugin/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('js/plugin/jquery.flot.js')}}"></script>
<script src="{{asset('js/plugin/jquery.flot.pie.js')}}"></script>
<script src="{{asset('js/plugin/jquery.flot.time.js')}}"></script>
<script src="{{asset('js/plugin/jquery.flot.stack.js')}}"></script>
<script src="{{asset('js/plugin/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('js/plugin/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('js/plugin/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('js/plugin/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('js/plugin/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('js/plugin/jquery.vmap.js')}}"></script>
<script src="{{asset('js/plugin/jquery.vmap.world.js')}}"></script>
<script src="{{asset('js/plugin/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('js/plugin/moment.min.js')}}"></script>
<script src="{{asset('js/plugin/daterangepicker.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('js/custom.js')}}"></script>
@if(env('APP_ENV') != 'local')
    <script src="{{asset('js/global.min.js')}}"></script>
@else
    <script src="{{asset('js/global.local.min.js')}}"></script>
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.5/sweetalert2.min.js"></script>
@yield('script')
@include('template.flash')
</body>
</html>
