<?php

namespace App\Http\Controllers;

use App\Models\ImmunizationAssessment;
use App\Models\Immunization;
use Illuminate\Http\Request;
// use validator
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ImmunizationAssessmentController extends Controller
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
        $immunization = Immunization::find($id);

        // if plan not found
        if(!$immunization){
            return redirect()->back()->with('error', 'Immunization not found');
        }

        return view('pages.admin.immunization.new_assessment', compact('immunization'));
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
            'immunization_id' => 'required',
            'date_of_visit' => 'required',
            'date_of_follow_up' => 'required',
        ]);

        // if validation fails
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        // create new assessment
        $assessment = ImmunizationAssessment::create([
            'immunization_id' => $request->immunization_id,
            'date_of_visit' => $request->date_of_visit,
            'date_of_follow_up' => $request->date_of_follow_up,
        ]);

        // if assessment created
        if($assessment){
            // redirect to immunization view with success message
            return redirect()->route('immunization-view', $request->immunization_id)->with('success', 'Assessment created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImmunizationAssessment  $immunizationAssessment
     * @return \Illuminate\Http\Response
     */
    public function show(ImmunizationAssessment $immunizationAssessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImmunizationAssessment  $immunizationAssessment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find assessment
        $assessment = ImmunizationAssessment::find($id);

        // if assessment not found
        if(!$assessment){
            return redirect()->back()->with('error', 'Assessment not found');
        }

        return view('pages.admin.immunization.edit_assessment', compact('assessment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImmunizationAssessment  $immunizationAssessment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // validate request
        $validator = Validator::make($request->all(), [
            'immunization_id' => 'required',
            'date_of_visit' => 'required',
            'date_of_follow_up' => 'required',
        ]);

        // if validation fails
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        // find assessment
        $assessment = ImmunizationAssessment::find($request->id);
        $assessment->immunization_id = $request->immunization_id;
        $assessment->date_of_visit = $request->date_of_visit;
        $assessment->date_of_follow_up = $request->date_of_follow_up;
        $assessment->save();

        // if assessment updated
        if($assessment){
            // redirect to immunization view with success message
            return redirect()->route('immunization-view', $request->immunization_id)->with('success', 'Assessment updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImmunizationAssessment  $immunizationAssessment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find assessment
        $assessment = ImmunizationAssessment::find($id);

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
