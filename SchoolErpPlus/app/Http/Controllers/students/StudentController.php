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
        $userRoleData = array();
        $userRoleData[0] = 'admin';
        return view('students.home', ['$userRoleData' => $userRoleData]);
    }


}
