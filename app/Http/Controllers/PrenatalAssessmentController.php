<?php

namespace App\Http\Controllers;

use App\Models\PrenatalAssessment;
use App\Models\Prenatal;
use Illuminate\Http\Request;
// use validator
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PrenatalAssessmentController extends Controller
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
        $prenatal = Prenatal::find($id);

        // if plan not found
        if(!$prenatal){
            return redirect()->back()->with('error', 'Prenatal not found');
        }

        return view('pages.admin.prenatal.new_assessment', compact('prenatal'));
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
            'prenatal_id' => 'required',
            'date_of_visit' => 'required',
            'date_of_follow_up' => 'required',
            'recommendation' => 'required',
            'wt' => 'required',
            'pr' => 'required',
            'rr' => 'required',
            'bp' => 'required',
            'temp' => 'required',
            'aog' => 'required',
            'fh' => 'required',
            'fhb' => 'required',
            'press' => 'required',
        ]);

        // if validation fails
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        // create new assessment
        $assessment = PrenatalAssessment::create([
            'prenatal_id' => $request->prenatal_id,
            'date_of_visit' => $request->date_of_visit,
            'date_of_follow_up' => $request->date_of_follow_up,
            'recommendation' => $request->recommendation,
            'wt' => $request->wt,
            'pr' => $request->pr,
            'rr' => $request->rr,
            'bp' => $request->bp,
            'temp' => $request->temp,
            'aog' => $request->aog,
            'fh' => $request->fh,
            'fhb' => $request->fhb,
            'press' => $request->press,
        ]);

        // if assessment created
        if($assessment){
            // redirect to prenatal view with success message
            return redirect()->route('prenatal-view', $request->prenatal_id)->with('success', 'Assessment created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrenatalAssessment  $prenatalAssessment
     * @return \Illuminate\Http\Response
     */
    public function show(PrenatalAssessment $prenatalAssessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrenatalAssessment  $prenatalAssessment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find assessment
        $assessment = PrenatalAssessment::find($id);

        // if assessment not found
        if(!$assessment){
            return redirect()->back()->with('error', 'Assessment not found');
        }

        return view('pages.admin.prenatal.edit_assessment', compact('assessment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrenatalAssessment  $prenatalAssessment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // validate request
        $validator = Validator::make($request->all(), [
            'prenatal_id' => 'required',
            'date_of_visit' => 'required',
            'date_of_follow_up' => 'required',
            'recommendation' => 'required',
            'wt' => 'required',
            'pr' => 'required',
            'rr' => 'required',
            'bp' => 'required',
            'temp' => 'required',
            'aog' => 'required',
            'fh' => 'required',
            'fhb' => 'required',
            'press' => 'required',
        ]);

        // if validation fails
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        // find assessment
        $assessment = PrenatalAssessment::find($request->id);
        $assessment->prenatal_id = $request->prenatal_id;
        $assessment->date_of_visit = $request->date_of_visit;
        $assessment->date_of_follow_up = $request->date_of_follow_up;
        $assessment->recommendation = $request->recommendation;
        $assessment->wt = $request->wt;
        $assessment->pr = $request->pr;
        $assessment->rr = $request->rr;
        $assessment->bp = $request->bp;
        $assessment->temp = $request->temp;
        $assessment->aog = $request->aog;
        $assessment->fh = $request->fh;
        $assessment->fhb = $request->fhb;
        $assessment->press = $request->press;
        $assessment->save();

        // if assessment updated
        if($assessment){
            // redirect to prenatal view with success message
            return redirect()->route('prenatal-view', $request->prenatal_id)->with('success', 'Assessment updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrenatalAssessment  $prenatalAssessment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find assessment
        $assessment = PrenatalAssessment::find($id);

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
