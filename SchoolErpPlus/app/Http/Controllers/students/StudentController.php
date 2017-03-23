<?php

namespace App\Http\Controllers\students;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listAllStudents()
    {
        $userRoleArr = array();
        $userRoleArr[0] = 'admin';
        return view('students.home', ['userRoleArr' => $userRoleArr]);
    }

    public function registeredStudents()
    {

        return view('students.registered');
    }

    public function recAndAssessment()
    {

        return view();
    }

    public function attendanceRecords()
    {

        return view();
    }
}
