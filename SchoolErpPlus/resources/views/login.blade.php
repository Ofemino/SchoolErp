@extends('layouts.login_master')
@section('pageTitle', 'Login')

@section('content')
    <style>
        body {
            margin: 0 auto !important;
            background-image: url("../images/bgPage.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100% !important;
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

        input[type="text"], input[type="password"] {
            height: 50px;
            width: 400px;
            font-size: 18px;
            margin-bottom: 20px;
            background-color: #fff;
            padding-left: 35px;
        }

        /*.form-control {
            width: 100% !important;
            height: 50px !important;
            font-size: 18px !important;
            margin-bottom: 20px !important;
            background-color: #fff !important;
            padding-left: 35px !important;
        }*/

        .form-input::before {
            content: "\f007";
            position: absolute;
            font-family: "FontAwsome";
            font-size: 35px;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 5px;
            color: #9b59b6;
        }

        .form-input:nth-child(2)::before {
            content: "\f023";
        }

        .btn-login {
            padding: 15px 25px;
            color: #fff;
            background-color: #2ecc71;
            border: none;
            border-radius: 4px;
            border-bottom: 4px solid #27ae60;
        }
    </style>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email"
                       value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-sign-in"></i> Login
                </button>

                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your
                    Password?</a>|
                <a class="btn btn-link" href="{{ url('/register') }}">Register</a>
            </div>
        </div>
    </form>

@endsection