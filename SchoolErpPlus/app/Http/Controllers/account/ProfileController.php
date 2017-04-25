<?php

namespace App\Http\Controllers\account;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

    }

    public function getProfile($id)
    {
        $userProfile = DB::table('users')->where('id', '=', $id)->get();
        return view('profile/view')->with(['userProfile' => $userProfile]);
    }

    public function updateProfile(Profile $profile)
    {

         return view('');
    }
}
