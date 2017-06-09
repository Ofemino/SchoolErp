@extends('layouts.login_master')
@section('pageTitle', 'Login')

@section('content')
    <style>
        body {
            margin: 0 auto !important;
            background-image: url("");
            background-repeat: no-repeat;
            background-size: 100% 100% !important;
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
            <div class="col-md-12">
                <input id="email" type="text" class="form-input" name="email"
                       value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input id="password" type="password" class="form-input" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="btn btn-login">
                    <i class="fa fa-btn fa-sign-in"></i> Login
                </button>
<br>
                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your
                    Password?</a>|
                <a class="btn btn-link" href="{{ url('/register') }}">Register</a>
            </div>
        </div>
    </form>
@endsection