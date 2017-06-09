@extends('layouts.master')
@section('pageTitle', 'User Profile')


@section('contentHeader')
    User Profile / <span class="subtitle">View</span>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="btn btn-group" style="padding-left: 0">
                {{--<a href="/admission/index" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-list-alt">&nbsp;List</i></a>--}}
                {{--<button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-pencil">&nbsp;Edit</i></button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-eye-open">&nbsp;View</i></button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-trash">&nbsp;Delete</i></button>--}}
            </div>
            <div class="btn btn-group pull-right" style="padding-right: 0">
                <a href="{{asset('/')}}" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-dashboard">&nbsp;Dashboard</i></a>
                {{--<a href="{{asset('/students')}}" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-home">--}}
                {{--&nbsp;Home</i></a>--}}
                {{--  <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-export">&nbsp;.xls</i></button> --}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>

                        <p>Step 1: Login Details</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>

                        <p>Step 2: Admin Details</p>
                    </div>
                    {{--<div class="stepwizard-step">--}}
                    {{--<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>--}}

                    {{--<p>Step 3: Admin Details</p>--}}
                    {{--</div>--}}
                </div>
            </div>

            <div class="col-md-12">
                @if ($errors->has())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif
            </div>

            @foreach($userProfile as $prof)
                <form role="form" method="post" action="/profiles/put" enctype="multipart/form-data" role="form"
                      id="pageForm" class="page-form">
                    {{ csrf_field() }}
                    <div class="row setup-content" id="step-1">
                        <div class="col-xs-10">
                            <div class="col-md-10">
                                <div class="col-md-11 col-md-offset-1">
                                    <h3> Login Details</h3>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                Fullname: <span class="lblImportant">*</span><br/>
                                                <input required="required" type="text" id="FirstName" name="FirstName"
                                                       value="{{$prof->name}}" class="form-control" autocomplete="off"
                                                       placeholder="First Name" readonly="readonly">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                Email: <br/>
                                                <input type="text" name="OtherNames" id="txtOtherNames"
                                                       class="form-control" readonly="readonly"
                                                       value="{{$prof->email}}" autocomplete="off"
                                                       placeholder="Other names (Separate names with comma)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 25px!important;">
                                        <div class="col-md-12">
                                            <p>
                                                Change Your Password
                                            </p>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                Enter Old Password: <br/>
                                                <input type="password" name="txtOldPwd" id="txtOldPwd"
                                                       class="form-control"
                                                       value="" autocomplete="off"
                                                       placeholder="Old Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                Enter New Password: <br/>
                                                <input type="password" name="txtNewPwd" id="txtNewPwd"
                                                       class="form-control"
                                                       value="" autocomplete="off"
                                                       placeholder="Enter New Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                Confirm New Password: <br/>
                                                <input type="password" name="txtConfirmNewPwd" id="txtConfirmNewPwd"
                                                       class="form-control"
                                                       value="" autocomplete="off"
                                                       placeholder="Confirm New Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button class="btn main-btn nextBtn btn-login btn-sm pull-right"
                                                        type="button">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="col-md-10" id="profImgDiv">
                                    <img src="{{asset('/assets/profiles')}}/{{Auth::user()->avatar}}"
                                         class="user-image pull-left" alt="User Image" height="250">
                                </div>
                                <div class="col-md-10" style="margin-top: 10px!important;">
                                    <input type="file" name="changeAvatar" id="changeAvatar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-2">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <div class="col-md-11 col-md-offset-1">
                                    <h3> Admin Details</h3>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <button class="btn main-btn btn-sm btn-login pull-right" type="submit">
                                                    Save
                                                    Changes!
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>




    <script type="text/javascript" src="{{asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker3.css')}}"/>

    <link rel="stylesheet" href="{{asset('assets/css/MyCustomStyles.css')}}"/>
    <script type="text/javascript" src="{{asset('assets/js/MyCustomJs.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/student_admission.js')}}"></script>

    <script src="{{asset('assets/js/plugins/canvas-to-blob.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/plugins/sortable.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/plugins/purify.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/fileinput.min.js')}}"></script>
    <script src="{{asset('assets/themes/fa/theme.js')}}"></script>
@endsection