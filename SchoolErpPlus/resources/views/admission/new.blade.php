@extends('layouts.master')
@section('pageTitle', 'New Admission')

@section('contentHeader')
    New Admission

    <link href="{{asset('assets/css/fileinput.min.css')}}" media="all" rel="stylesheet" type="text/css"/>

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="btn btn-group" style="padding-left: 0">
                <a href="/admission/index" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-list-alt">&nbsp;List</i></a>
                {{--<button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-pencil">&nbsp;Edit</i></button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-eye-open">&nbsp;View</i></button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-trash">&nbsp;Delete</i></button>--}}
            </div>
            <div class="btn btn-group pull-right" style="padding-right: 0">
                <a href="{{asset('/')}}" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-dashboard">&nbsp;Dashboard</i></a>
                <a href="{{asset('/students')}}" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-home">
                        &nbsp;Home</i></a>
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
                        <p>Step 1: Basic Profile</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>Step 2: Primary Contact Details</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Step 3: Admin Use</p>
                    </div>
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

            <form role="form" method="post" action="/admission/post" enctype="multipart/form-data" role="form" id="pageForm" class="page-form">
                {{--<input type="hidden" name="_token" value="{{ csrf_field() }}">--}}
                {{ csrf_field() }}
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <div class="col-md-11 col-md-offset-1">
                                <h3> Basic Profile</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            First Name: <span class="lblImportant">*</span><br/>
                                            <input required="required" type="text" id="FirstName" name="FirstName"
                                                   class="form-control" autocomplete="off" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            Surname: <span class="lblImportant">*</span><br/>
                                            <input required="required" type="text" name="SurName" id="txtSurName"
                                                   class="form-control" autocomplete="off" placeholder="Surname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            Other Names: <br/>
                                            <input type="text" name="OtherNames" id="txtOtherNames" class="form-control"
                                                   autocomplete="off" placeholder="Other names (Separate names with comma)">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            Select Gender: <span class="lblImportant">*</span><br/>
                                            <select required="required" name="Gender" id="ddnGender" class="form-control">
                                                <option value="0">Select Gender</option>
                                                <option value="1">Male</option>
                                                <option value="1">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            Date Of Birth:<span class="lblImportant">*</span><br/>
                                            <input required="required" class="form-control" id="dtDob" name="Dob" placeholder="DD/MM/YYYY"
                                                   type="text"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            State Of Origin: <span class="lblImportant">*</span><br/>
                                            <input required="required" type="text" id="txtSoo" name="Soo"
                                                   class="form-control" autocomplete="off" placeholder="Place Of Birth">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            Blood Group: <br/>
                                            <select name="BloodGrp" id="ddnBloodGrp" class="form-control">
                                                <option value="0">Select Group</option>
                                                <option value="1">A</option>
                                                <option value="2">A</option>
                                                <option value="3">A</option>
                                                <option value="4">A</option>
                                                <option value="5">A</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            Child's Picture: <span class="lblImportant">*</span><br/>
                                            <input required="required" id="childAvatar" name="childAvatar" type="file" class="file" data-preview-file-type="text">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button class="btn main-btn nextBtn btn-sm pull-right" type="button" >Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <div class="col-md-11 col-md-offset-1">
                                <h3> Primary Contact Details</h3>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            Title: <span class="lblImportant">*</span><br/>
                                            <select required="required" name="ContactTitle" id="ddlContactTitle" class="form-control">
                                                <option value="0">Select Title</option>
                                                <option value="1">Mr.</option>
                                                <option value="2">Mrs.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            Full Name: <span class="lblImportant">*</span><br/>
                                            <input required="required" type="text" id="txtContactFullName" name="ContactFullName"
                                                   class="form-control" autocomplete="off" placeholder="Contact Fullname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            Contact Phone: <span class="lblImportant">*</span><br/>
                                            <input required="required" type="text" name="ContactPhone" id="txtContactPhone"
                                                   class="form-control"
                                                   autocomplete="off" placeholder="Contact Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            Contact Email: <br/>
                                            <input type="email" name="ContactEmail" id="txtContactEmail"
                                                   class="form-control"
                                                   autocomplete="off" placeholder="Contact Phone Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            Contact Address:<span class="lblImportant">*</span><br/>
                                        <textarea required="required" name="ContactAddress" id="txtContactAddress"
                                                  class="form-control textarea" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class="checkbox">Check/UnCheck: &nbsp;<br/>
                                                <label><input name="IsCorrespondence" id="chkCorrespondence" type="checkbox" value="">Receive
                                                    Correspondence</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn main-btn nextBtn btn-sm pull-right" type="button" >Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Admin Use</h3>
                            <button class="btn main-btn btn-sm pull-right" type="submit">Finish!</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{--<script type="text/javascript"--}}
            {{--src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>--}}
    {{--<link rel="stylesheet"--}}
          {{--href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>--}}
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