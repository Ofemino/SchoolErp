@extends('layouts.master')
@section('pageTitle', 'Admin')


@section('contentHeader')
    Admin Panel / <span class="subtitle">All Users</span>
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

    <div class="row">
        <div class="col-md-12">
            <table class="table table-responsive table-bordered table-striped">
                <thead>
                <tr>
                    <td>
                        Name
                    </td>
                    <td>
                        Email
                    </td>
                    <td>
                        User Status
                    </td>
                    <td>
                        Date Added
                    </td>
                    <td>
                        Role
                    </td>
                    <td>
                        Action
                    </td>
                </tr>
                </thead>
                <tbody>
                @foreach($allUsers as $user)
                    <tr>
                        <td>
                            {{$user->name}}
                        </td>
                        <td>
                            {{$user->email}}
                        </td>
                        <td>

                        </td>
                        <td>
                            {{$user->created_at}}
                        </td>
                        <td>

                        </td>
                        <td>
                            <a href="/allusers/view/{{$user->id}}" class="">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </a>
                            &nbsp;
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </div>
@endsection