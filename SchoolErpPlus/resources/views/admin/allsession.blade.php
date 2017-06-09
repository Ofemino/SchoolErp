@extends('layouts.master')
@section('pageTitle', 'Admin : School Sessions')


@section('contentHeader')
    Admin Dashboard / <span class="subtitle">School Sessions</span>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="btn btn-group" style="padding-left: 0">
                <a href="/allsession/new" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-plus">&nbsp;New</i></a>
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
                        Session
                    </td>
                    <td>
                        Year
                    </td>
                    <td>
                        Term
                    </td>
                    <td>
                        School Starts
                    </td>
                    <td>
                        School Ends
                    </td>
                    <td>
                        School Opens
                    </td>
                    <td>
                        Action
                    </td>
                </tr>
                </thead>
                <tbody>
                @foreach($allSession as $session)
                    <tr>
                        <td>
                            {{$session->session}}
                        </td>
                        <td>
                            {{$session->year}}
                        </td>
                        <td>

                        </td>
                        <td>
                            {{$session->term}}
                        </td>
                        <td>
                            {{$session->session_start}}
                        </td>
                        <td>
                            {{$session->session_end}}
                        </td>
                        <td>
                            {{--{{$session->school_open}}--}}
                        </td>
                        <td>
                            <a href="/allusers/view/{{$session->id}}" class="">
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