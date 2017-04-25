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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css")}}">

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
<body>
<div class="container">

    <style>
        body {
            background: url("{{asset('assets/img/bg1.jpg')}}") no-repeat;

        }

        .container img {
            width: 120px;
            height: 120px;
            margin-top: -60px;
            margin-bottom: 10px;
            border-radius: 50%;
        }

        .container {
            width: 500px !important;
            height: 450px !important;
            text-align: center;
            background-color: rgba(52, 73, 94, 0.8);
            margin-top: 150px !important;
            border-radius: 4px !important;
            margin: 120px auto !important;
        }

        .container a {
            color: #ff7736;
        }

        .container a:hover {
            color: #8aff5f;
        }
    </style>
    <img src="{{asset("assets/img/Avatar04.png")}}"/>
    @yield('content')

</div>
<hr/>
<footer class="main-footer" style="padding-left: 200px; padding-right: 200px;">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; @DateTime.Now.Year - All rights reserved <a href="#">INTEGRATED LOGISTICS
            SYSTEM.</a></strong>
</footer>
</body>
</html>
