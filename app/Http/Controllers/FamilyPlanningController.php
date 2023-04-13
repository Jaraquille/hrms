<?php

namespace App\Http\Controllers;

use App\Models\FamilyPlanning;
use Illuminate\Http\Request;
// use validator
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\FamilyPlanningAssessment;
use Illuminate\Support\Facades\Auth;

class FamilyPlanningController extends Controller
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
        // validate the request
        $validator = Validator::make($request->all(), [
            'patient_id' => 'required',
            'philhealth_id' => 'required',
            'educational_attainment' => 'required',
            'spouse_sname' => 'required',
            'spouse_mname' => 'required',
            'spouse_fname' => 'required',
            'number_of_living_children' => 'required',
            'plan_to_have_children' => 'required',
            'average_monthly_income' => 'required',
            'type_of_patient' => 'required',
            'reason' => 'required',
            'method' => 'required',
            'step1_1' => 'required',
            'step1_2' => 'required',
            'step1_3' => 'required',
            'step1_4' => 'required',
            'step1_5' => 'required',
            'step1_6' => 'required',
            'step1_7' => 'required',
            'step1_8' => 'required',
            'step1_9' => 'required',
            'step1_10' => 'required',
            'step1_11' => 'required',
            'step1_12' => 'required',
            'step2_g' => 'required',
            'step2_p' => 'required',
            'step2_full_term' => 'required',
            'step2_premature' => 'required',
            'step2_abortion' => 'required',
            'step2_living_children' => 'required',
            'step2_last_delivery' => 'required',
            'step2_type_last_delivery' => 'required',
            'step2_last_menstrual' => 'required',
            'step2_previous_menstrual' => 'required',
            'step2_menstrual_flow' => 'required',
            'step2_dysmenorrhea' => 'required',
            'step2_hydatidiform_mole' => 'required',
            'step3_weight' => 'required',
            'step3_height' => 'required',
            'step3_blood_pressure' => 'required',
            'step3_pulse_rate' => 'required',
            'step3_skin' => 'required',
            'step3_extormities' => 'required',
            'step3_conjunctiva' => 'required',
            'step3_pelvic' => 'required',
            'step3_breast' => 'required',
            'step3_neck' => 'required',
            'step3_abdomen' => 'required',
        ]);


        // if failed go back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // if success
        $familyPlanning = new FamilyPlanning();
        $familyPlanning->patient_id = $request->patient_id;
        $familyPlanning->philhealth_id = $request->philhealth_id;
        $familyPlanning->educational_attainment = $request->educational_attainment;
        $familyPlanning->spouse_sname = $request->spouse_sname;
        $familyPlanning->spouse_mname = $request->spouse_mname;
        $familyPlanning->spouse_fname = $request->spouse_fname;
        $familyPlanning->number_of_living_children = $request->number_of_living_children;
        $familyPlanning->plan_to_have_children = $request->plan_to_have_children;
        $familyPlanning->average_monthly_income = $request->average_monthly_income;
        $familyPlanning->type_of_patient = $request->type_of_patient;
        $familyPlanning->reason = $request->reason;
        $familyPlanning->method = $request->method;
        $familyPlanning->step1_1 = $request->step1_1;
        $familyPlanning->step1_2 = $request->step1_2;
        $familyPlanning->step1_3 = $request->step1_3;
        $familyPlanning->step1_4 = $request->step1_4;
        $familyPlanning->step1_5 = $request->step1_5;
        $familyPlanning->step1_6 = $request->step1_6;
        $familyPlanning->step1_7 = $request->step1_7;
        $familyPlanning->step1_8 = $request->step1_8;
        $familyPlanning->step1_9 = $request->step1_9;
        $familyPlanning->step1_10 = $request->step1_10;
        $familyPlanning->step1_11 = $request->step1_11;
        $familyPlanning->step1_12 = $request->step1_12;
        $familyPlanning->step2_g = $request->step2_g;
        $familyPlanning->step2_p = $request->step2_p;
        $familyPlanning->step2_full_term = $request->step2_full_term;
        $familyPlanning->step2_premature = $request->step2_premature;
        $familyPlanning->step2_abortion = $request->step2_abortion;
        $familyPlanning->step2_living_children = $request->step2_living_children;
        $familyPlanning->step2_last_delivery = $request->step2_last_delivery;
        $familyPlanning->step2_type_last_delivery = $request->step2_type_last_delivery;
        $familyPlanning->step2_last_menstrual = $request->step2_last_menstrual;
        $familyPlanning->step2_previous_menstrual = $request->step2_previous_menstrual;
        $familyPlanning->step2_menstrual_flow = $request->step2_menstrual_flow;
        $familyPlanning->step2_dysmenorrhea = $request->step2_dysmenorrhea;
        $familyPlanning->step2_hydatidiform_mole = $request->step2_hydatidiform_mole;
        $familyPlanning->step3_weight = $request->step3_weight;
        $familyPlanning->step3_height = $request->step3_height;
        $familyPlanning->step3_blood_pressure = $request->step3_blood_pressure;
        $familyPlanning->step3_pulse_rate = $request->step3_pulse_rate;
        $familyPlanning->step3_skin = $request->step3_skin;
        $familyPlanning->step3_extormities = $request->step3_extormities;
        $familyPlanning->step3_conjunctiva = $request->step3_conjunctiva;
        $familyPlanning->step3_pelvic = $request->step3_pelvic;
        $familyPlanning->step3_breast = $request->step3_breast;
        $familyPlanning->step3_neck = $request->step3_neck;
        $familyPlanning->step3_abdomen = $request->step3_abdomen;
        $familyPlanning->save();

        return redirect()->route('family-planning')->with('success', 'Family Planning successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FamilyPlanning  $familyPlanning
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan = FamilyPlanning::find($id);

        // get assessments
        $assessments = FamilyPlanningAssessment::where('family_planning_id', $id)->paginate(5);
        
        // if fail go home
        if (!$plan) {
            return redirect()->route('/');
        }
        
        $patient = User::find($plan->patient_id);
        return view('pages.admin.family_planning.family_planning_view', compact('plan', 'patient', 'assessments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FamilyPlanning  $familyPlanning
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $plan = FamilyPlanning::find($id);
        // get user type
        $user = Auth::user();

        // if fail go home
        if (!$plan || $user->user_type != '4') {
            return redirect()->route('/');
        }

        $patient = User::find($plan->patient_id);


        return view('pages.admin.family_planning.family_planning_edit', compact('plan', 'patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FamilyPlanning  $familyPlanning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // validate the request
        $validator = Validator::make($request->all(), [
            'patient_id' => 'required',
            'philhealth_id' => 'required',
            'educational_attainment' => 'required',
            'spouse_sname' => 'required',
            'spouse_mname' => 'required',
            'spouse_fname' => 'required',
            'number_of_living_children' => 'required',
            'plan_to_have_children' => 'required',
            'average_monthly_income' => 'required',
            'type_of_patient' => 'required',
            'reason' => 'required',
            'method' => 'required',
            'step1_1' => 'required',
            'step1_2' => 'required',
            'step1_3' => 'required',
            'step1_4' => 'required',
            'step1_5' => 'required',
            'step1_6' => 'required',
            'step1_7' => 'required',
            'step1_8' => 'required',
            'step1_9' => 'required',
            'step1_10' => 'required',
            'step1_11' => 'required',
            'step1_12' => 'required',
            'step2_g' => 'required',
            'step2_p' => 'required',
            'step2_full_term' => 'required',
            'step2_premature' => 'required',
            'step2_abortion' => 'required',
            'step2_living_children' => 'required',
            'step2_last_delivery' => 'required',
            'step2_type_last_delivery' => 'required',
            'step2_last_menstrual' => 'required',
            'step2_previous_menstrual' => 'required',
            'step2_menstrual_flow' => 'required',
            'step2_dysmenorrhea' => 'required',
            'step2_hydatidiform_mole' => 'required',
            'step3_weight' => 'required',
            'step3_height' => 'required',
            'step3_blood_pressure' => 'required',
            'step3_pulse_rate' => 'required',
            'step3_skin' => 'required',
            'step3_extormities' => 'required',
            'step3_conjunctiva' => 'required',
            'step3_pelvic' => 'required',
            'step3_breast' => 'required',
            'step3_neck' => 'required',
            'step3_abdomen' => 'required',
        ]);


        // if fail
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $familyPlanning = FamilyPlanning::find($request->id);
        $familyPlanning->patient_id = $request->patient_id;
        $familyPlanning->philhealth_id = $request->philhealth_id;
        $familyPlanning->educational_attainment = $request->educational_attainment;
        $familyPlanning->spouse_sname = $request->spouse_sname;
        $familyPlanning->spouse_mname = $request->spouse_mname;
        $familyPlanning->spouse_fname = $request->spouse_fname;
        $familyPlanning->number_of_living_children = $request->number_of_living_children;
        $familyPlanning->plan_to_have_children = $request->plan_to_have_children;
        $familyPlanning->average_monthly_income = $request->average_monthly_income;
        $familyPlanning->type_of_patient = $request->type_of_patient;
        $familyPlanning->reason = $request->reason;
        $familyPlanning->method = $request->method;
        $familyPlanning->step1_1 = $request->step1_1;
        $familyPlanning->step1_2 = $request->step1_2;
        $familyPlanning->step1_3 = $request->step1_3;
        $familyPlanning->step1_4 = $request->step1_4;
        $familyPlanning->step1_5 = $request->step1_5;
        $familyPlanning->step1_6 = $request->step1_6;
        $familyPlanning->step1_7 = $request->step1_7;
        $familyPlanning->step1_8 = $request->step1_8;
        $familyPlanning->step1_9 = $request->step1_9;
        $familyPlanning->step1_10 = $request->step1_10;
        $familyPlanning->step1_11 = $request->step1_11;
        $familyPlanning->step1_12 = $request->step1_12;
        $familyPlanning->step2_g = $request->step2_g;
        $familyPlanning->step2_p = $request->step2_p;
        $familyPlanning->step2_full_term = $request->step2_full_term;
        $familyPlanning->step2_premature = $request->step2_premature;
        $familyPlanning->step2_abortion = $request->step2_abortion;
        $familyPlanning->step2_living_children = $request->step2_living_children;
        $familyPlanning->step2_last_delivery = $request->step2_last_delivery;
        $familyPlanning->step2_type_last_delivery = $request->step2_type_last_delivery;
        $familyPlanning->step2_last_menstrual = $request->step2_last_menstrual;
        $familyPlanning->step2_previous_menstrual = $request->step2_previous_menstrual;
        $familyPlanning->step2_menstrual_flow = $request->step2_menstrual_flow;
        $familyPlanning->step2_dysmenorrhea = $request->step2_dysmenorrhea;
        $familyPlanning->step2_hydatidiform_mole = $request->step2_hydatidiform_mole;
        $familyPlanning->step3_weight = $request->step3_weight;
        $familyPlanning->step3_height = $request->step3_height;
        $familyPlanning->step3_blood_pressure = $request->step3_blood_pressure;
        $familyPlanning->step3_pulse_rate = $request->step3_pulse_rate;
        $familyPlanning->step3_skin = $request->step3_skin;
        $familyPlanning->step3_extormities = $request->step3_extormities;
        $familyPlanning->step3_conjunctiva = $request->step3_conjunctiva;
        $familyPlanning->step3_pelvic = $request->step3_pelvic;
        $familyPlanning->step3_breast = $request->step3_breast;
        $familyPlanning->step3_neck = $request->step3_neck;
        $familyPlanning->step3_abdomen = $request->step3_abdomen;
        $familyPlanning->save();

        return redirect()->route('family-planning')->with('success', 'Family Planning has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FamilyPlanning  $familyPlanning
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete family planning by id
        $familyPlanning = FamilyPlanning::find($id);

        // get user type
        $user = Auth::user();

        // if fail go home
        if (!$familyPlanning || $user->user_type != '4') {
            return redirect()->route('/');
        }

        $familyPlanning->delete();

        return redirect()->route('family-planning')->with('success', 'Family Planning has been deleted successfully!');
    }
}
