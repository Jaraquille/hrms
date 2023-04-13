<?php

namespace App\Http\Controllers;

use App\Models\Immunization;
use App\Models\ImmunizationAssessment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class ImmunizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate request
        $validator = Validator::make($request->all(), [
            'patient_id' => 'required',
            'vaccine_type' => 'required',
            'immu_gender' => 'required',
            'immu_month' => 'required',
            'immu_birth_weight' => 'required',
            'immu_height' => 'required',
            'immu_birth_first_seen' => 'required',
            'immu_place_of_birth' => 'required',
            'immu_mother_sname' => 'required',
            'immu_mother_mname' => 'required',
            'immu_mother_fname' => 'required',
            'immu_mother_education_level' => 'required',
            'immu_mother_occupation' => 'required',
            'immu_father_sname' => 'required',
            'immu_father_mname' => 'required',
            'immu_father_fname' => 'required',
            'immu_father_education_level' => 'required',
            'immu_father_occupation' => 'required',
            'immu_brothers_sisters' => 'required',
            'immu_complete_address' => 'required',
            'bcg' => 'required',
            'hepatitis_b' => 'required',
            'dpt1' => 'required',
            'dpt2' => 'required',
            'dpt3' => 'required',
            'polio_1' => 'required',
            'measles_mcv1' => 'required',
            'measles_mcv2' => 'required',
            'tetanus_toxoid' => 'required',
        ]);



        // if failed go back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // if success
        $immunization = new Immunization();
        $immunization->patient_id = $request->patient_id;
        $immunization->vaccine_type = $request->vaccine_type;
        $immunization->immu_gender = $request->immu_gender;
        $immunization->immu_month = $request->immu_month;
        $immunization->immu_birth_weight = $request->immu_birth_weight;
        $immunization->immu_height = $request->immu_height;
        $immunization->immu_birth_first_seen = $request->immu_birth_first_seen;
        $immunization->immu_place_of_birth = $request->immu_place_of_birth;
        $immunization->immu_mother_sname = $request->immu_mother_sname;
        $immunization->immu_mother_mname = $request->immu_mother_mname;
        $immunization->immu_mother_fname = $request->immu_mother_fname;
        $immunization->immu_mother_education_level = $request->immu_mother_education_level;
        $immunization->immu_mother_occupation = $request->immu_mother_occupation;
        $immunization->immu_father_sname = $request->immu_father_sname;
        $immunization->immu_father_mname = $request->immu_father_mname;
        $immunization->immu_father_fname = $request->immu_father_fname;
        $immunization->immu_father_education_level = $request->immu_father_education_level;
        $immunization->immu_father_occupation = $request->immu_father_occupation;
        $immunization->immu_brothers_sisters = $request->immu_brothers_sisters;
        $immunization->immu_complete_address = $request->immu_complete_address;
        $immunization->bcg = $request->bcg;
        $immunization->hepatitis_b = $request->hepatitis_b;
        $immunization->dpt1 = $request->dpt1;
        $immunization->dpt2 = $request->dpt2;
        $immunization->dpt3 = $request->dpt3;
        $immunization->polio_1 = $request->polio_1;
        $immunization->measles_mcv1 = $request->measles_mcv1;
        $immunization->measles_mcv2 = $request->measles_mcv2;
        $immunization->tetanus_toxoid = $request->tetanus_toxoid;
        $immunization->save();

        return redirect()->route('immunization')->with('success', 'Immunization successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $immunization = Immunization::find($id);

        // get assessments
        $assessments = ImmunizationAssessment::where('immunization_id', $id)->paginate(5);
        
        // if fail go home
        if (!$immunization) {
            return redirect()->route('/');
        }
        
        $patient = User::find($immunization->patient_id);
        // return view('pages.admin.family_planning.family_planning_view', compact('plan', 'patient', 'assessments'));
        return view('pages.admin.immunization.immunization_view', compact('immunization', 'patient', 'assessments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prenatal  $prenatal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $immunization = Immunization::find($id);
        // get user type
        $user = Auth::user();

        // if fail go home
        if (!$immunization || $user->user_type != '4') {
            return redirect()->route('/');
        }

        $patient = User::find($immunization->patient_id);


        return view('pages.admin.immunization.immunization_edit', compact('immunization', 'patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prenatal  $prenatal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // validate the request
        $validator = Validator::make($request->all(), [
            'patient_id' => 'required',
            'vaccine_type' => 'required',
            'immu_gender' => 'required',
            'immu_month' => 'required',
            'immu_birth_weight' => 'required',
            'immu_height' => 'required',
            'immu_birth_first_seen' => 'required',
            'immu_place_of_birth' => 'required',
            'immu_mother_sname' => 'required',
            'immu_mother_mname' => 'required',
            'immu_mother_fname' => 'required',
            'immu_mother_education_level' => 'required',
            'immu_mother_occupation' => 'required',
            'immu_father_sname' => 'required',
            'immu_father_mname' => 'required',
            'immu_father_fname' => 'required',
            'immu_father_education_level' => 'required',
            'immu_father_occupation' => 'required',
            'immu_brothers_sisters' => 'required',
            'immu_complete_address' => 'required',
            'bcg' => 'required',
            'hepatitis_b' => 'required',
            'dpt1' => 'required',
            'dpt2' => 'required',
            'dpt3' => 'required',
            'polio_1' => 'required',
            'measles_mcv1' => 'required',
            'measles_mcv2' => 'required',
            'tetanus_toxoid' => 'required',
        ]);

        // if fail
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // if success
        $immunization = Immunization::find($request->id);
        $immunization->patient_id = $request->patient_id;
        $immunization->vaccine_type = $request->vaccine_type;
        $immunization->immu_gender = $request->immu_gender;
        $immunization->immu_month = $request->immu_month;
        $immunization->immu_birth_weight = $request->immu_birth_weight;
        $immunization->immu_height = $request->immu_height;
        $immunization->immu_birth_first_seen = $request->immu_birth_first_seen;
        $immunization->immu_place_of_birth = $request->immu_place_of_birth;
        $immunization->immu_mother_sname = $request->immu_mother_sname;
        $immunization->immu_mother_mname = $request->immu_mother_mname;
        $immunization->immu_mother_fname = $request->immu_mother_fname;
        $immunization->immu_mother_education_level = $request->immu_mother_education_level;
        $immunization->immu_mother_occupation = $request->immu_mother_occupation;
        $immunization->immu_father_sname = $request->immu_father_sname;
        $immunization->immu_father_mname = $request->immu_father_mname;
        $immunization->immu_father_fname = $request->immu_father_fname;
        $immunization->immu_father_education_level = $request->immu_father_education_level;
        $immunization->immu_father_occupation = $request->immu_father_occupation;
        $immunization->immu_brothers_sisters = $request->immu_brothers_sisters;
        $immunization->immu_complete_address = $request->immu_complete_address;
        $immunization->bcg = $request->bcg;
        $immunization->hepatitis_b = $request->hepatitis_b;
        $immunization->dpt1 = $request->dpt1;
        $immunization->dpt2 = $request->dpt2;
        $immunization->dpt3 = $request->dpt3;
        $immunization->polio_1 = $request->polio_1;
        $immunization->measles_mcv1 = $request->measles_mcv1;
        $immunization->measles_mcv2 = $request->measles_mcv2;
        $immunization->tetanus_toxoid = $request->tetanus_toxoid;
        $immunization->save();

        return redirect()->route('immunization')->with('success', 'Immunization has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete immunization by id
        $immunization = Immunization::find($id);

        // get user type
        $user = Auth::user();

        // if fail go home
        if (!$immunization || $user->user_type != '4') {
            return redirect()->route('/');
        }

        $immunization->delete();

        return redirect()->route('immunization')->with('success', 'Immunization has been deleted successfully!');
    }
}
