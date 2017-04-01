<?php

namespace App\Http\Controllers\students;

use App\StudentAdmission;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;


class AdmissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('admission/new');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'FirstName' => 'required',
            'SurName' => 'required',
            'OtherNames' => 'required',
            'Gender' => 'required',
            'Dob' => 'required',
            'Soo' => 'required',
            'BloodGrp' => 'required',
            'ContactTitle' => 'required',
            'ContactFullName' => 'required',
            'ContactPhone' => 'required',
            'ContactAddress' => 'required',
            'childAvatar' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $input = $request->all();

        if ($validator->fails()) {
            $messages = $validator->messages();
            return redirect('admission/create')->withErrors($validator);
        } else {
            $studentAdmission = new StudentAdmission();
            $studentAdmission->first_name = strtoupper($input['FirstName']);
            $studentAdmission->sur_name = strtoupper($input['SurName']);
            $studentAdmission->other_name = strtoupper($input['OtherNames']);
            $studentAdmission->gender = $input['Gender'];
            $studentAdmission->dob = date_format(date_create($input['Dob']), 'Y-m-d');
            $studentAdmission->pob = strtoupper($input['Soo']);
            $studentAdmission->blood_group = $input['BloodGrp'];
            $studentAdmission->contact_title = $input['ContactTitle'];
            $studentAdmission->primary_contact = strtoupper($input['ContactFullName']);
            $studentAdmission->contact_mobile = strtoupper($input['ContactPhone']);
            $studentAdmission->contact_email = $input['ContactEmail'];
            $studentAdmission->contact_address = strtoupper($input['ContactAddress']);

            $childAvatar = $input['childAvatar'];
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp . '-' . $childAvatar->getClientOriginalName();
            $studentAdmission->avatar = 'assets/img/profiles/' . $name;

            if ($studentAdmission->save()) {
                $img = Image::make($childAvatar)->resize(300, 200);
                $img->save('assets/img/profiles/' . $name);
                return redirect('admission/index');
            } else {
                return back();
            }
        }
        // return $request->all();
    }


    public function index()
    {
        $admissionList = DB::table('studentadmission')
            ->join('usertitle', 'contact_title', '=', 'usertitle.id')
            ->get();
        return view('admission/index')->with(['admissionList' => $admissionList]);
    }

}
