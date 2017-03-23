@extends('layouts.master')
@section('pageTitle', 'New Admission')

@section('contentHeader')
    New Admission
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="btn btn-group" style="padding-left: 0">
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-list-alt">&nbsp;List</i></button>
                {{--<button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-pencil">&nbsp;Edit</i></button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-eye-open">&nbsp;View</i></button>
                <button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-trash">&nbsp;Delete</i></button>--}}
            </div>
        </div>
        <div class="col-md-6">
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
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="active">
                    <a href="#profile" role="tab" data-toggle="tab">Basic Profile</a></li>
                <li>
                    <a href="#parent" role="tab" data-toggle="tab">Parent/Guardian Details</a></li>
                <li>
                    <a href="#communication" role="tab" data-toggle="tab">Communication</a></li>
                <li>
                    <a href="#adminUse" role="tab" data-toggle="tab">Admin Use</a></li>
            </ul>

            <!-- Tab panes -->
            <form role="form" id="pageForm" class="page-form">
                <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                        <div class="col-md-11 col-md-offset-1">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        First Name: <br/>
                                        <input type="text" id="txtFirstName" name="txtFirstName" required="required"
                                               class="form-control" autocomplete="off" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        Surname: <br/>
                                        <input type="text" name="txtSurName" id="txtSurName" required="required"
                                               class="form-control" autocomplete="off" placeholder="Surname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        Other Names: <br/>
                                        <input type="text" name="txtOtherNames" id="txtOtherNames" class="form-control"
                                               autocomplete="off" placeholder="Other names (Separate names with comma)">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        Select Gender: <br/>
                                        <select name="ddnGender" id="ddnGender" class="form-control">
                                            <option value="0">Select Gender</option>
                                            <option value="1">Male</option>
                                            <option value="1">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        Date Of Birth:<br/>
                                        <input class="form-control" id="date" name="date" placeholder="DD/MM/YYYY"
                                               type="text"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        Place Of Birth: <br/>
                                        <input type="text" id="txtPob" name="txtPob" required="required"
                                               class="form-control" autocomplete="off" placeholder="Place Of Birth">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        Birth Certificate Number: <br/>
                                        <input type="text" name="txtBirthCert" id="txtBirthCert" required="required"
                                               class="form-control" autocomplete="off"
                                               placeholder="Birth Certificate Number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        Blood Group: <br/>
                                        <select name="ddnBloodGrp" id="ddnBloodGrp" class="form-control">
                                            <option value="0">Select Group</option>
                                            <option value="1">A</option>
                                            <option value="1">A</option>
                                            <option value="1">A</option>
                                            <option value="1">A</option>
                                            <option value="1">A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        Birth Certificate Number: <br/>
                                        <input type="text" name="txtBirthCert" id="txtBirthCert" required="required"
                                               class="form-control" autocomplete="off"
                                               placeholder="Birth Certificate Number">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="tab-pane" id="parent">
                        <div class="col-md-11 col-md-offset-1">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        First Name: <br/>
                                        <input type="text" id="txtFirstName" name="txtFirstName" required="required"
                                               class="form-control" autocomplete="off" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        Surname: <br/>
                                        <input type="text" name="txtSurName" id="txtSurName" required="required"
                                               class="form-control" autocomplete="off" placeholder="Surname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        Other Names: <br/>
                                        <input type="text" name="txtOtherNames" id="txtOtherNames" class="form-control"
                                               autocomplete="off" placeholder="Other names (Separate names with comma)">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        Click To Select Gender: <br/>

                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary">
                                                <input type="radio" name="rbnMale" id="rbnMale"> Male
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="rbnFemale" id="rbnFemale" autocomplete="off">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        Date Of Birth:<br/>
                                        <input class="form-control" id="date" name="date" placeholder="DD/MM/YYYY"
                                               type="text"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        Place Of Birth: <br/>
                                        <input type="text" id="txtPob" name="txtPob" required="required"
                                               class="form-control" autocomplete="off" placeholder="Place Of Birth">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        Birth Certificate Number: <br/>
                                        <input type="text" name="txtBirthCert" id="txtBirthCert" required="required"
                                               class="form-control" autocomplete="off"
                                               placeholder="Birth Certificate Number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        Blood Group: <br/>


                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        Birth Certificate Number: <br/>
                                        <input type="text" name="txtBirthCert" id="txtBirthCert" required="required"
                                               class="form-control" autocomplete="off"
                                               placeholder="Birth Certificate Number">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="tab-pane" id="communication">messages</div>
                    <div class="tab-pane" id="adminUse">settings</div>

                    <div class="row">
                        <div class="col-md-8">
                            <button id="btnPostAdmission" type="submit" class="btn main-btn pull-right">
                                Send a message
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>



    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <script type="text/javascript" src="{{asset('assets/js/student_admission.js')}}"></script>
@endsection