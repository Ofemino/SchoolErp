<?php

namespace App\Http\Controllers\students;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Kendo\UI\DatePicker;

class AdmissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function newAdmission()
    {
        //       $datePicker = new DatePicker('datepicker');
        //        $users = User::all();
        //        'users' => $users,
        //        'datePicker' => $datePicker
        $args = array();

        return view('admission.new')->with($args);
    }

}
