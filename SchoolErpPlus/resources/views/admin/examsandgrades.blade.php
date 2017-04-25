@extends('layouts.master')
@section('pageTitle', 'Admin : Exams And Records')


@section('contentHeader')
    Admin Dashboard / <span class="subtitle">Exams And Records</span>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="btn btn-group" style="padding-left: 0">
                {{--<a href="/admission/index" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-list-alt">&nbsp;List</i></a>--}}
            </div>
            <div class="btn btn-group pull-right" style="padding-right: 0">
                <a href="{{asset('/')}}" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-dashboard">&nbsp;Dashboard</i></a>
                <a href="{{asset('/admin')}}" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-home">
                        &nbsp;Admin</i></a>
            </div>
        </div>
    </div>



@endsection