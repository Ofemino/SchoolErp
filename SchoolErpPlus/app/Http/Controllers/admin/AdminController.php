<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('admin/home');
    }

    public function getAllUsers()
    {
        $allUsers = DB::table('users')
            ->get();
        return view('admin/allusers')->with(['allUsers' => $allUsers]);
    }


    public function viewUsers($id)
    {
        return view('admin/viewuser');
    }

    public function allSession()
    {
        $allSession = DB::table('schoolsession')->orderBy('id', 'desc')->get();
        return view('admin/allsession')->with(['allSession' => $allSession]);
    }

    public function newSession()
    {
        return view('admin/newsession');
    }

    public function examsAndGrades()
    {
        return view('admin/examsandgrades');
    }
}
