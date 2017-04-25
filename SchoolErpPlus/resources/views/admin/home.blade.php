@extends('layouts.master')
@section('pageTitle', 'Admin')


@section('contentHeader')
    Admin Dashboard/Panel
@endsection

@section('content')
    {{--for user management--}}
    <div class="row">
        <div class="col-md-12 menuBtnDiv" align="center">
            <div class="menu_page_icon">
                <a href="{{asset("/allusers")}}">
                    <img src="{{asset('assets/img/users.png')}}" alt=""/>
                    <br>
                    Users Mgt.
                </a>
            </div>
            <div class="menu_page_icon">
                <a href="{{asset("/allsession")}}">
                    <img src="{{asset('assets/img/role.png')}}" alt=""/>
                    <br>
                    Session Mgt.
                </a>
            </div>
            <div class="menu_page_icon">
                <a href="{{asset("/examsandgrades")}}">
                    <img src="{{asset('assets/img/permissions.png')}}" alt=""/>
                    <br>
                    Exams And Grades
                </a>
            </div>
            <div class="menu_page_icon">
                <a href="{{asset("/subjectmanagement")}}">
                    <img src="{{asset('assets/img/role.png')}}" alt=""/>
                    <br>
                    Subject Mgt.
                </a>
            </div>
        </div>

        <div class="col-md-12 menuBtnDiv" align="center">
            <div class="menu_page_icon">
                <a href="{{asset("/allusers")}}">
                    <img src="{{asset('assets/img/users.png')}}" alt=""/>
                    <br>
                    Subject Teacher Mgt.
                </a>
            </div>
            <div class="menu_page_icon">
                <a href="{{asset("/allsession")}}">
                    <img src="{{asset('assets/img/role.png')}}" alt=""/>
                    <br>
                    Class Mgt.
                </a>
            </div>
            <div class="menu_page_icon">
                <a href="{{asset("/examsandgrades")}}">
                    <img src="{{asset('assets/img/permissions.png')}}" alt=""/>
                    <br>
                    Class Teacher Mgt.
                </a>
            </div>
            <div class="menu_page_icon">
                <a href="{{asset("/subjectmanagement")}}">
                    <img src="{{asset('assets/img/role.png')}}" alt=""/>
                    <br>
                    Subject Mgt.
                </a>
            </div>
        </div>

        <div class="col-md-12 menuBtnDiv" align="center">
            <div class="menu_page_icon">
                <a href="{{asset("/allusers")}}">
                    <img src="{{asset('assets/img/users.png')}}" alt=""/>
                    <br>
                    Session Mgt.
                </a>
            </div>
            <div class="menu_page_icon">
                <a href="{{asset("/allstaff")}}">
                    <img src="{{asset('assets/img/role.png')}}" alt=""/>
                    <br>
                    Staff Mgt.
                </a>
            </div>
            <div class="menu_page_icon">
                <a href="{{asset("/examsandgrades")}}">
                    <img src="{{asset('assets/img/permissions.png')}}" alt=""/>
                    <br>
                    School Session
                </a>
            </div>
            <div class="menu_page_icon">
                <a href="{{asset("/subjectmanagement")}}">
                    <img src="{{asset('assets/img/role.png')}}" alt=""/>
                    <br>
                    School Profiling
                </a>
            </div>
        </div>
    </div>


@endsection