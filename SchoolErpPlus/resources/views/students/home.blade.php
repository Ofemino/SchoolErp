@extends('layouts.master')
@section('pageTitle', 'Student\'s Panel')


@section('contentHeader')
    Student's Panel
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="{{asset('/students/registeredstudents')}}" class="homeMenuLinks">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="glyphicon glyphicon-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text customFontSize">Registration</span>
                        <span class="info-box-number">&nbsp;</span>
                        <span class="info-box-text">List, Add New, ...</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </a>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="{{asset('/students/recordsandassessment')}}" class="homeMenuLinks">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-pencil"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text customFontSize">Records And</span>
                        <span class="info-box-text customFontSize">Assessments</span>
                        <span class="info-box-text">List, Add New, View, ...</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </a>
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="{{asset('/students/attendancerecords')}}" class="homeMenuLinks">
                <div class="info-box">
                    <span class="info-box-icon bg-orange"><i class="glyphicon glyphicon-ok"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text customFontSize">Attendance</span>
                        <span class="info-box-text customFontSize">Records</span>
                        <span class="info-box-text">List, Add New, View, ...</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </a>
        </div>
        <!-- /.col -->
    </div>


@endsection
