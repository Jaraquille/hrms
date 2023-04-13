<?php

namespace App\Http\Controllers;

use App\Models\FamilyPlanningAssessment;
use App\Models\FamilyPlanning;
use Illuminate\Http\Request;
// use validator
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FamilyPlanningAssessmentController extends Controller
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
    public function create($id)
    {
        $plan = FamilyPlanning::find($id);

        // if plan not found
        if(!$plan){
            return redirect()->back()->with('error', 'Family Planning Plan not found');
        }

        return view('pages.admin.family_planning.new_assessment', compact('plan'));
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
            'plan_id' => 'required',
            'date_of_visit' => 'required',
            'method' => 'required',
            'date_of_follow_up' => 'required',
            'findings' => 'required',
        ]);

        // if validation fails
        if($validator->fails()){
            return redirect()->back()->with('error', 'Validation failed')->withErrors($validator);
        }

        // create new assessment
        $assessment = new FamilyPlanningAssessment;
        $assessment->family_planning_id = $request->plan_id;
        $assessment->date_of_visit = $request->date_of_visit;
        $assessment->method = $request->method;
        $assessment->date_of_follow_up = $request->date_of_follow_up;
        $assessment->findings = $request->findings;
        $assessment->save();

        // if assessment created
        if($assessment){
            // redirect to family planning view with success message
            return redirect()->route('family-planning-view', $request->plan_id)->with('success', 'Assessment created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FamilyPlanningAssessment  $familyPlanningAssessment
     * @return \Illuminate\Http\Response
     */
    public function show(FamilyPlanningAssessment $familyPlanningAssessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FamilyPlanningAssessment  $familyPlanningAssessment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find assessment
        $assessment = FamilyPlanningAssessment::find($id);

        // if assessment not found
        if(!$assessment){
            return redirect()->back()->with('error', 'Assessment not found');
        }

        return view('pages.admin.family_planning.edit_assessment', compact('assessment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FamilyPlanningAssessment  $familyPlanningAssessment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // validate request
        $validator = Validator::make($request->all(), [
            'plan_id' => 'required',
            'date_of_visit' => 'required',
            'method' => 'required',
            'date_of_follow_up' => 'required',
            'findings' => 'required',
        ]);

        // if validation fails
        if($validator->fails()){
            return redirect()->back()->with('error', 'Validation failed')->withErrors($validator);
        }

        // update assessment
        $assessment = FamilyPlanningAssessment::find($request->id);
        $assessment->family_planning_id = $request->plan_id;
        $assessment->date_of_visit = $request->date_of_visit;
        $assessment->method = $request->method;
        $assessment->date_of_follow_up = $request->date_of_follow_up;
        $assessment->findings = $request->findings;
        $assessment->save();

        // if assessment updated
        if($assessment){
            // redirect to family planning view with success message
            return redirect()->route('family-planning-view', $request->plan_id)->with('success', 'Assessment updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FamilyPlanningAssessment  $familyPlanningAssessment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find assessment
        $assessment = FamilyPlanningAssessment::find($id);

        // if assessment not found
        if(!$assessment){
            return redirect()->back()->with('error', 'Assessment not found');
        }

        // delete assessment
        $assessment->delete();

        // if assessment deleted
        if($assessment){
            // redirect to family planning view with success message
            return redirect()->back()->with('success', 'Assessment deleted successfully');
        }
    }
}
