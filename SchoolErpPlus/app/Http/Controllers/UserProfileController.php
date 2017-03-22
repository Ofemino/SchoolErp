<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

    }

    public function getProfile($id){


    }



}
