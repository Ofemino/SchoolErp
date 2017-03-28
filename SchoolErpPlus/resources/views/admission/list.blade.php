@extends('layouts.master')
@section('pageTitle', 'Admission List')

@section('contentHeader')
    Admission List
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="btn btn-group" style="padding-left: 0">
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-list-alt">&nbsp;List</i></button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-pencil">&nbsp;Edit</i></button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-eye-open">&nbsp;View</i></button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-trash">&nbsp;Delete</i></button>
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
            <table class="table table-bordered table-responsive table-stripe">
                <thead>
                <tr>
                    <td>
                        Fullname
                    </td>
                    <td>
                        Gender
                    </td>
                    <td>
                        Date Of Birth
                    </td>
                    <td>
                        Date Admitted
                    </td>
                    <td>
                        Primary Contact
                    </td>
                    <td>
                        Status
                    </td>
                    <td>
                        Action
                    </td>
                </tr>
                </thead>
                <tbody>
                @foreach($admissionList as $child)
                    <tr>
                        <td>
                            {{$child->first_name .' '. $child->sur_name.' '.$child->other_name}}
                        </td>
                        <td>
                            {{$child->gender}}
                        </td>
                        <td>
                            {{$child->dob}}
                        </td>
                        <td>
                            {{$child->created_at}}
                        </td>
                        <td>
                            {{$child->title.' '. $child->primary_contact}}
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection