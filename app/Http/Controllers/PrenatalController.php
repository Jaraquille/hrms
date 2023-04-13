<?php

namespace App\Http\Controllers;

use App\Models\Prenatal;
use App\Models\PrenatalAssessment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class PrenatalController extends Controller
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
            'philhealth_id' => 'required',
            'employment_status' => 'required',
            'family_serial_number' => 'required',
            'fourps_nhts_number' => 'required',
            'father_sname' => 'required',
            'father_mname' => 'required',
            'father_fname' => 'required',
            'father_address' => 'required',
            'mother_sname' => 'required',
            'mother_mname' => 'required',
            'mother_fname' => 'required',
            'mother_address' => 'required',
            'houseowner_name' => 'required',
            'ht' => 'required',
            'wt' => 'required',
            'temp' => 'required',
            'pr' => 'required',
            'rr' => 'required',
            'bp' => 'required',
            'menarche' => 'required',
            'lmp' => 'required',
            'gravida' => 'required',
            'para' => 'required',
            'fullterm' => 'required',
            'preterm' => 'required',
            'abortion' => 'required',
            'stillbirth' => 'required',
            'labresults' => 'required',
            'hgb' => 'required',
            'u_a' => 'required',
            'bdrl_rpr' => 'required',
        ]);



        // if failed go back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // if success
        $prenatal = new Prenatal();
        $prenatal->patient_id = $request->patient_id;
        $prenatal->philhealth_id = $request->philhealth_id;
        $prenatal->employment_status = $request->employment_status;
        $prenatal->family_serial_number = $request->family_serial_number;
        $prenatal->fourps_nhts_number = $request->fourps_nhts_number;
        $prenatal->father_sname = $request->father_sname;
        $prenatal->father_mname = $request->father_mname;
        $prenatal->father_fname = $request->father_fname;
        $prenatal->father_address = $request->father_address;
        $prenatal->mother_sname = $request->mother_sname;
        $prenatal->mother_mname = $request->mother_mname;
        $prenatal->mother_fname = $request->mother_fname;
        $prenatal->mother_address = $request->mother_address;
        $prenatal->houseowner_name = $request->houseowner_name;
        $prenatal->ht = $request->ht;
        $prenatal->wt = $request->wt;
        $prenatal->temp = $request->temp;
        $prenatal->pr = $request->pr;
        $prenatal->rr = $request->rr;
        $prenatal->bp = $request->bp;
        $prenatal->menarche = $request->menarche;
        $prenatal->lmp = $request->lmp;
        $prenatal->gravida = $request->gravida;
        $prenatal->para = $request->para;
        $prenatal->fullterm = $request->fullterm;
        $prenatal->preterm = $request->preterm;
        $prenatal->abortion = $request->abortion;
        $prenatal->stillbirth = $request->stillbirth;
        $prenatal->labresults = $request->labresults;
        $prenatal->hgb = $request->hgb;
        $prenatal->u_a = $request->u_a;
        $prenatal->bdrl_rpr = $request->bdrl_rpr;
        $prenatal->save();

        return redirect()->route('prenatal')->with('success', 'Prenatal successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prenatal  $prenatal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prenatal = Prenatal::find($id);

        // get assessments
        $assessments = PrenatalAssessment::where('prenatal_id', $id)->paginate(5);
        
        // if fail go home
        if (!$prenatal) {
            return redirect()->route('/');
        }
        
        $patient = User::find($prenatal->patient_id);
        // return view('pages.admin.family_planning.family_planning_view', compact('plan', 'patient', 'assessments'));
        return view('pages.admin.prenatal.prenatal_view', compact('prenatal', 'patient', 'assessments'));
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
        $prenatal = Prenatal::find($id);
        // get user type
        $user = Auth::user();

        // if fail go home
        if (!$prenatal || $user->user_type != '4') {
            return redirect()->route('/');
        }

        $patient = User::find($prenatal->patient_id);


        return view('pages.admin.prenatal.prenatal_edit', compact('prenatal', 'patient'));
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
            'philhealth_id' => 'required',
            'employment_status' => 'required',
            'family_serial_number' => 'required',
            'fourps_nhts_number' => 'required',
            'father_sname' => 'required',
            'father_mname' => 'required',
            'father_fname' => 'required',
            'father_address' => 'required',
            'mother_sname' => 'required',
            'mother_mname' => 'required',
            'mother_fname' => 'required',
            'mother_address' => 'required',
            'houseowner_name' => 'required',
            'ht' => 'required',
            'wt' => 'required',
            'temp' => 'required',
            'pr' => 'required',
            'rr' => 'required',
            'bp' => 'required',
            'menarche' => 'required',
            'lmp' => 'required',
            'gravida' => 'required',
            'para' => 'required',
            'fullterm' => 'required',
            'preterm' => 'required',
            'abortion' => 'required',
            'stillbirth' => 'required',
            'labresults' => 'required',
            'hgb' => 'required',
            'u_a' => 'required',
            'bdrl_rpr' => 'required',
        ]);

        // if fail
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // if success
        $prenatal = Prenatal::find($request->id);
        $prenatal->patient_id = $request->patient_id;
        $prenatal->philhealth_id = $request->philhealth_id;
        $prenatal->employment_status = $request->employment_status;
        $prenatal->family_serial_number = $request->family_serial_number;
        $prenatal->fourps_nhts_number = $request->fourps_nhts_number;
        $prenatal->father_sname = $request->father_sname;
        $prenatal->father_mname = $request->father_mname;
        $prenatal->father_fname = $request->father_fname;
        $prenatal->father_address = $request->father_address;
        $prenatal->mother_sname = $request->mother_sname;
        $prenatal->mother_mname = $request->mother_mname;
        $prenatal->mother_fname = $request->mother_fname;
        $prenatal->mother_address = $request->mother_address;
        $prenatal->houseowner_name = $request->houseowner_name;
        $prenatal->ht = $request->ht;
        $prenatal->wt = $request->wt;
        $prenatal->temp = $request->temp;
        $prenatal->pr = $request->pr;
        $prenatal->rr = $request->rr;
        $prenatal->bp = $request->bp;
        $prenatal->menarche = $request->menarche;
        $prenatal->lmp = $request->lmp;
        $prenatal->gravida = $request->gravida;
        $prenatal->para = $request->para;
        $prenatal->fullterm = $request->fullterm;
        $prenatal->preterm = $request->preterm;
        $prenatal->abortion = $request->abortion;
        $prenatal->stillbirth = $request->stillbirth;
        $prenatal->labresults = $request->labresults;
        $prenatal->hgb = $request->hgb;
        $prenatal->u_a = $request->u_a;
        $prenatal->bdrl_rpr = $request->bdrl_rpr;
        $prenatal->save();

        return redirect()->route('prenatal')->with('success', 'Prenatal has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prenatal  $prenatal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete prenatal by id
        $prenatal = Prenatal::find($id);

        // get user type
        $user = Auth::user();

        // if fail go home
        if (!$prenatal || $user->user_type != '4') {
            return redirect()->route('/');
        }

        $prenatal->delete();

        return redirect()->route('prenatal')->with('success', 'Prenatal has been deleted successfully!');
    }
}
