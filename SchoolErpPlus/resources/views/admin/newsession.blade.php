@extends('layouts.master')
@section('pageTitle', 'New Session')


@section('contentHeader')
    Admin Panel / <span class="subtitle">New Session</span>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="btn btn-group" style="padding-left: 0">
                <a href="/allsession" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-list-alt">
                        &nbsp;List</i></a>
            </div>
            <div class="btn btn-group pull-right" style="padding-right: 0">
                <a href="{{asset('/')}}" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-dashboard">&nbsp;Dashboard</i></a>
                <a href="{{asset('/admin')}}" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-home">
                        &nbsp;Admin</i></a>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12">
                @if ($errors->has())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif
            </div>
            <div>Fields marked <span class="lblImportant">*</span> are important!</div>
            <div class="col-md-12">
                <form role="form" method="post" action="/allsession/postNew" enctype="multipart/form-data" role="form"
                      id="pageForm" class="page-form">
                    {{ csrf_field() }}

                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    Year: <span class="lblImportant">*</span><br/>
                                    <input required="required" type="text" id="YearTxt" name="YearTxt"
                                           value="{{old('year')}}" class="form-control" autocomplete="off"
                                           placeholder="Enter Year">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    Session: <span class="lblImportant">*</span><br/>
                                    <input required="required" type="text" id="SessionTxt" name="SessionTxt"
                                           value="{{old('session')}}" class="form-control" autocomplete="off"
                                           placeholder="Enter Session">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    Term: <span class="lblImportant">*</span><br/>

                                    {{--<input required="required" type="text" id="TermTxt" name="TermTxt"--}}
                                    {{--value="{{old('body')}}" class="form-control" autocomplete="off"--}}
                                    {{--placeholder="Enter Term">--}}


                                    <select name="TermDdl" id="TermDdl" class="form-control">
                                        <option value="0">== SELECT TERM ==</option>
                                        <option value="1ST TERM">1ST TERM</option>
                                        <option value="2ND TERM">2ND TERM</option>
                                        <option value="3RD TERM">3RD TERM</option>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    School Starts: <span class="lblImportant">*</span><br/>
                                    <input required="required" type="date" id="SchoolStartTxt" name="SchoolStartTxt"
                                           value="{{old('school_start')}}" class="form-control" autocomplete="off"
                                           placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    School Ends: <span class="lblImportant">*</span><br/>
                                    <input required="required" type="date" id="SchoolEndTxt" name="SchoolEndTxt"
                                           value="{{old('school_end')}}" class="form-control" autocomplete="off"
                                           placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" id="set_term" name="set_term">Set term to be active!</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <button class="btn main-btn btn-sm pull-right btn-login" type="submit">Save Entry</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>




    <script type="text/javascript" src="{{asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker3.css')}}"/>

    <link rel="stylesheet" href="{{asset('assets/css/MyCustomStyles.css')}}"/>
    <script type="text/javascript" src="{{asset('assets/js/MyCustomJs.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/schoolsession.js')}}"></script>

@endsection