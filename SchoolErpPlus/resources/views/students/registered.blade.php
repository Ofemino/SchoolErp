@extends('layouts.master')
@section('pageTitle', 'Student\'s Panel')


@section('contentHeader')
    Registered Students
@endsection

@section('content')

    <div class="row">
        <div class="form-horizontal">

        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="btn btn-group">
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;New</button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;&nbsp;Edit</button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;&nbsp;View</button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Delete</button>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="btn btn-group pull-right">
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-export"></i>&nbsp;&nbsp;&nbsp;.pdf</button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-export"></i>&nbsp;&nbsp;&nbsp;.xls</button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-export"></i>&nbsp;&nbsp;&nbsp;.csv</button>
            </div>
        </div>
    </div>


@endsection
