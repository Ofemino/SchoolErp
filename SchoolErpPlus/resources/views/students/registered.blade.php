@extends('layouts.master')
@section('pageTitle', 'Registered Student')


@section('contentHeader')
    Registered Student
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="btn btn-group">
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-plus">&nbsp;New</i></button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-pencil">&nbsp;Edit</i></button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-eye-open">&nbsp;View</i></button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-trash">&nbsp;Delete</i></button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="btn btn-group pull-right">
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-home">&nbsp;Home(Module)</i></button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-export">&nbsp;.pdf</i></button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-export">&nbsp;.xls</i></button>
            </div>
        </div>
    </div>
@endsection