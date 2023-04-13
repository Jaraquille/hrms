<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\FamilyPlanning;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    // *****************************
    // PATIENT
    // *****************************
    public function update_patient_profile(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'sname' => "required",
            'mname' => "required",
            'fname' => "required",
            'date_of_birth' => "required",
            'age' => 'required',
            'gender' => 'required',
            'relationship_with_family_head' => 'required',
            'civil_status' => 'required',
            'mobile_number' => 'required',
            'occupation' => 'required',
            'religion' => 'required',
            'citizenship' => 'required',
            'household_number' => 'required',
            'zone_purok' => 'required',
            'is_4ps' => 'required',
        ]);
        

        if ($validator->fails()) {
            // go back with error message
            return redirect()->back()->withErrors($validator);
        }

        // update all data from request
        $user = User::find(Auth::user()->id);
        $user->sname = $request->sname;
        $user->mname = $request->mname;
        $user->fname = $request->fname;
        $user->date_of_birth = $request->date_of_birth;
        $user->age = $request->age;
        $user->gender = $request->gender;
        $user->relationship_with_family_head = $request->relationship_with_family_head;
        $user->civil_status = $request->civil_status;
        $user->mobile_number = $request->mobile_number;
        $user->occupation = $request->occupation;
        $user->religion = $request->religion;
        $user->citizenship = $request->citizenship;
        $user->household_number = $request->household_number;
        $user->zone_purok = $request->zone_purok;
        $user->is_4ps = $request->is_4ps;
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    public function patient_profile()
    {
        // get the patient profile
        $user = User::find(Auth::user()->id);
        return view('pages.patient.profile', compact('user'));
    }

    public function patient_medical()
    {
        // get the patient profile
        $user = User::find(Auth::user()->id);
        $familyplannings = FamilyPlanning::where('patient_id', $user->id)->latest()->paginate(5);
        return view('pages.patient.medical', compact('user', 'familyplannings'));
    }
    // *****************************
    //  END PATIENT
    // *****************************


    
    // *****************************
    //  REGISTRATION
    // *****************************
    public function registration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            // go back with error message
            return redirect()->back()->withErrors($validator);
        }

        $user = User::create([
            'name' => $request->fname . " " . $request->mname . " " . $request->sname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'sname' => $request->sname,
            'mname' => $request->mname,
            'fname' => $request->fname,
            'date_of_birth' => $request->date_of_birth,
            'age' => $request->age,
            'gender' => $request->gender,
            'relationship_with_family_head' => $request->relationship_with_family_head,
            'civil_status' => $request->civil_status,
            'mobile_number' => $request->mobile_number,
            'occupation' => $request->occupation,
            'religion' => $request->religion,
            'citizenship' => $request->citizenship,
            'household_number' => $request->household_number,
            'zone_purok' => $request->zone_purok,
            'is_4ps' => $request->is_4ps,
        ]);

        // go back to login page with success message
        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
    // *****************************
    //  END REGISTRATION
    // *****************************
}
