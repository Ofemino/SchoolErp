@extends('layouts.master')
@section('pageTitle', 'Admission List')

@section('contentHeader')
    Admission List
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="btn btn-group" style="padding-left: 0">
                <a href="/admission/create" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-plus">
                        &nbsp;Add</i></a>
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
    <div class="row" id="searchDivRow" style="margin-top: 30px!important;margin-bottom: 15px!important;">
        <div class="col-md-12" id="searchDivCol">
            <div class="form-inline">
                <label for="">Filter By</label>
                <select name="filterOption" id="filterOption" class="form-control">
                    <option value="">==Select Option==</option>
                    <option value="Name">Name</option>
                    <option value="Dob">Date Of Birth</option>
                    <option value="EntryDate">Entry Date</option>
                    <option value="EntryStatus">Entry Status</option>
                    <option value="PrimaryContact">Primary Contact</option>
                </select>

                <input type="text" id="txtSearch" class="form-control" placeholder="Enter Search Text">

                <button class="btn btn-login">Filter</button>

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
                        Entry Date
                    </td>
                    <td>
                        Primary Contact
                    </td>
                    <td>
                        Status
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
                            @if($child->gender=="1")
                                Male
                            @elseif($child->gender=="2")
                                Female
                            @endif
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
                        <td>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection