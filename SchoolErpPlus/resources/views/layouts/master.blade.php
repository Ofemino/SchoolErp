<?php
/**
 * Created by PhpStorm.
 * User: Femi Adesanya
 * Date: 2017-02-22
 * Time: 4:43 PM
 */ ?>

        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SchERP | @yield('pageTitle')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset("assets/bootstrap/css/bootstrap.min.css")}}">
    <!-- mdi materialize design css-->
    {{--    <link rel="stylesheet" href="{{asset("assets/css/materialize.min.css")}}">--}}
    {{--<link rel="stylesheet" href="{{asset("assets/css/material.min.css")}}">--}}
    <!-- custom css-->
    <link rel="stylesheet" href="{{asset("assets/css/AppStyles.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/MyCustomStyles.css")}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/css/AdminLTE.min.css")}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset("assets/css/skins/_all-skins.min.css")}}">

    <!-- for sweetalert css. -->
    <link rel="stylesheet" href="{{asset("assets/css/sweetalert2.min.css")}}">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset("assets/plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>



    <script>
        $(function () {
 //           alert("OK");
//            showInfoMessageWithHtml("This is a test", "info")
        })

    </script>

    <meta name="_token" content="{{ Session::token() }}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        @include('layouts.mainHeader')
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        @if (Auth::check())
            @include('layouts.leftSideMenu')
        @endif
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper no-padding" style="background-color: white!important;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-md-12"
                     style="background-color: lightgrey; color: black; font-size: medium; font-weight: 200;">
                    <h3>
                        @yield('contentHeader')
                    </h3>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.1
        </div>
        <strong>Copyright &copy; 2015-<?php echo date("Y") ?> <a href="http://PhemwareSolutions.com">Phemware
                Solutions</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        @include('layouts.rightSideMenu')
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


<!-- sweatalert2 purposes -->
<script src="{{asset("assets/js/sweetalert2.min.js")}}"></script>
<script src="{{asset("assets/js/sweetalertMethods.js")}}"></script>

<!-- Bootstrap 3.3.5 -->
<script src="{{asset("assets/bootstrap/js/bootstrap.min.js")}}"></script>
<!-- mdi materialize design js -->
<script src="{{asset("assets/js/material.min.js")}}"></script>
{{--<script src="{{asset("assets/js/materialize.min.js")}}"></script>--}}

<!-- FastClick -->
<script src="{{asset("assets/plugins/fastclick/fastclick.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/js/app.min.js")}}"></script>
<!-- Sparkline -->
<script src="{{asset("assets/plugins/sparkline/jquery.sparkline.min.js")}}"></script>
<!-- jvectormap -->
<script src="{{asset("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}"></script>
<script src="{{asset("assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{asset("assets/plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>
<!-- ChartJS 1.0.1 -->
<script src="{{asset("assets/plugins/chartjs/Chart.min.js")}}"></script>


<!-- AdminLTE for demo purposes -->
<script src="{{asset("assets/js/demo.js")}}"></script>


</body>
</html>
