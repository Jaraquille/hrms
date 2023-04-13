<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FamilyPlanning;
use App\Models\Prenatal;
use App\Models\Immunization;
use App\Models\FamilyPlanningAssessment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function prenatal(){
        $patients = User::where('user_type', '1')->latest()->paginate(5);
        $prenatals = Prenatal::latest()->paginate(5);

        $patient_count = [
            "employed" => Prenatal::where('employment_status', 'employed')->count(),
            "unemployed" => Prenatal::where('employment_status', 'unemployed')->count(),
            "student" => Prenatal::where('employment_status', 'student')->count(),
        ];

        foreach($prenatals as $prenatal){
            $prenatal->patient = User::find($prenatal->patient_id);
            // $familyplanning->assessments = FamilyPlanningAssessment::where('family_planning_id', $familyplanning->id)->get();
        }

        return view('pages.admin.prenatal.prenatal', compact('patients', 'prenatals', 'patient_count'));
    }

    public function prenatal_form($id){
        $patient = User::find($id);
        return view('pages.admin.prenatal.prenatal_form', compact('patient'));
    }

    public function family_planning(){
        $patients = User::where('user_type', '1')->latest()->paginate(5);
        $familyplannings = FamilyPlanning::latest()->paginate(5);

        $patient_count = [
            "acceptor" => FamilyPlanning::where('type_of_patient', 'acceptor')->count(),
            "dropout" => FamilyPlanning::where('type_of_patient', 'dropout')->count(),
            "user" => FamilyPlanning::where('type_of_patient', 'changing method')->count() + FamilyPlanning::where('type_of_patient', 'changing clinic')->count(),
        ];

        foreach($familyplannings as $familyplanning){
            $familyplanning->patient = User::find($familyplanning->patient_id);
            $familyplanning->assessments = FamilyPlanningAssessment::where('family_planning_id', $familyplanning->id)->get();
        }

        return view('pages.admin.family_planning.family_planning', compact('patients', 'familyplannings', 'patient_count'));
    }

    public function immunization(){
        $patients = User::where('user_type', '1')->latest()->paginate(5);
        $immunizations = Immunization::latest()->paginate(5);

        $vaccine_count = [
            "bcg" => Immunization::where('vaccine_type', 'bcg')->count(),
            "hepatitis_b" => Immunization::where('vaccine_type', 'hepatitis_b')->count(),
            "dpt1" => Immunization::where('vaccine_type', 'dpt1')->count(),
            "dpt2" => Immunization::where('vaccine_type', 'dpt2')->count(),
            "dpt3" => Immunization::where('vaccine_type', 'dpt3')->count(),
            "polio_1" => Immunization::where('vaccine_type', 'polio_1')->count(),
            "measles_mcv1" => Immunization::where('vaccine_type', 'measles_mcv1')->count(),
            "measles_mcv2" => Immunization::where('vaccine_type', 'measles_mcv2')->count(),
            "tetanus_toxoid" => Immunization::where('vaccine_type', 'tetanus_toxoid')->count(),
        ];

        foreach($immunizations as $immunization){
            $immunization->patient = User::find($immunization->patient_id);
            // $familyplanning->assessments = FamilyPlanningAssessment::where('family_planning_id', $familyplanning->id)->get();
        }

        return view('pages.admin.immunization.immunization', compact('patients', 'immunizations', 'vaccine_count'));
    }

    public function immunization_form($id){
        $patient = User::find($id);
        return view('pages.admin.immunization.immunization_form', compact('patient'));
    }

    public function family_planning_form($id){
        $patient = User::find($id);
        return view('pages.admin.family_planning.family_planning_form', compact('patient'));
    }
    
    public function family_planning_search(Request $request){
        $familyplannings = FamilyPlanning::latest()->paginate(5);
        $patients = User::where('name', 'like', '%' . $request->q . '%')->latest()->paginate(5);
        $q = $request->q;
        // return view('pages.admin.family_planning.family_planning_w_user', compact('patients', 'name'));


        $patient_count = [
            "acceptor" => FamilyPlanning::where('type_of_patient', 'acceptor')->count(),
            "dropout" => FamilyPlanning::where('type_of_patient', 'dropout')->count(),
            "user" => FamilyPlanning::where('type_of_patient', 'changing method')->count() + FamilyPlanning::where('type_of_patient', 'changing clinic')->count(),
        ];

        foreach($familyplannings as $familyplanning){
            $familyplanning->patient = User::find($familyplanning->patient_id);
            $familyplanning->assessments = FamilyPlanningAssessment::where('family_planning_id', $familyplanning->id)->get();
        }

        // go back with new data
        return view('pages.admin.family_planning.family_planning', compact('patients', 'q', 'familyplannings', 'patient_count'));
    }

    public function family_planning_filter(Request $request){
        $from = $request->from;
        $to = $request->to;
        $to_plus = date('Y-m-d', strtotime($to . ' +1 day'));

        if($from == null || $to == null){
            return redirect('family-planning');
        }

        // $familyplannings = FamilyPlanning::whereBetween('created_at', [$from, $to])->latest()->paginate(5);
        // or exact to date from and to
        $familyplannings = FamilyPlanning::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->latest()->paginate(5);

        // $familyplannings = FamilyPlanning::latest()->paginate(5);
        $patients = User::where('user_type', '1')->latest()->paginate(5);
        // $patients = User::where('name', 'like', '%' . $request->q . '%')->latest()->paginate(5);
        // $q = $request->q;
        // return view('pages.admin.family_planning.family_planning_w_user', compact('patients', 'name'));


        $patient_count = [
            "acceptor" => FamilyPlanning::where('type_of_patient', 'acceptor')->count(),
            "dropout" => FamilyPlanning::where('type_of_patient', 'dropout')->count(),
            "user" => FamilyPlanning::where('type_of_patient', 'changing method')->count() + FamilyPlanning::where('type_of_patient', 'changing clinic')->count(),
        ];

        foreach($familyplannings as $familyplanning){
            $familyplanning->patient = User::find($familyplanning->patient_id);
            $familyplanning->assessments = FamilyPlanningAssessment::where('family_planning_id', $familyplanning->id)->get();
        }

        // go back with new data
        return view('pages.admin.family_planning.family_planning', compact('patients', 'familyplannings', 'patient_count', 'from', 'to'));
    }

    public function patient_info()
    {
        $patients = User::where('user_type', '1')->latest()->paginate(10);

        $patient_count = [
            // "under_1" => User::where('user_type', '1')->where('age', '1')->count(),
            // "a1_10" => User::whereRaw('age >= ?', [1])->whereRaw('age <= ?', [10])->count(),
            "a10_14" => User::whereRaw('age >= ?', [10])->whereRaw('age <= ?', [14])->count(),
            "a15_19" => User::whereRaw('age >= ?', [15])->whereRaw('age <= ?', [19])->count(),
            "a20_49" => User::whereRaw('age >= ?', [20])->whereRaw('age <= ?', [49])->count(),
            // "a46_59" => User::whereRaw('age >= ?', [46])->whereRaw('age <= ?', [59])->count(),
            // "a60_79" => User::whereRaw('age >= ?', [60])->whereRaw('age <= ?', [79])->count(),
            // "a80_above" => User::whereRaw('age >= ?', [80])->count(),
        ];

        return view('pages.admin.patient_info', compact('patients', 'patient_count'));
    }

    public function new_patient(Request $request){
        return view('pages.admin.new_patient');
    }

    public function edit_patient($id){
        $user = User::find($id);
        return view('pages.admin.edit_patient', compact('user'));
    }


    public function create_patient(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            $user = $request->all();
            return redirect()->back()->withErrors($validator)->withInput($user);
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
        return redirect()->route('patient-info')->with('success', 'New patient successfully created.');
    }

    public function modify_patient(Request $request)
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
        $user = User::find($request->id);
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

        return redirect()->route('patient-info')->with('success', 'Patient updated successfully created.');
    }
    
    // *****************************
    // PRINT
    // *****************************
    public function print(){
        $familyplannings = FamilyPlanning::all();
        $prenatals = Prenatal::all();
        $immunizations = Immunization::all();

        $acceptor1 = 0;
        $acceptor2 = 0;
        $acceptor3 = 0;
        $dropout1 = 0;
        $dropout2 = 0;
        $dropout3 = 0;
        $user1 = 0;
        $user2 = 0;
        $user3 = 0;

        $employed1 = 0;
        $employed2 = 0;
        $employed3 = 0;
        $unemployed1 = 0;
        $unemployed2 = 0;
        $unemployed3 = 0;
        $student1 = 0;
        $student2 = 0;
        $student3 = 0;

        $bcg = 0;
        $hepatitis_b = 0;
        $dpt1 = 0;
        $dpt2 = 0;
        $dpt3 = 0;
        $polio_1 = 0;
        $measles_mcv1 = 0;
        $measles_mcv2 = 0;
        $tetanus_toxoid = 0;

        foreach($familyplannings as $familyplanning){
            $user = User::find($familyplanning->patient_id);
            if($familyplanning->type_of_patient == "acceptor"){
                if($user->age >= 10 && $user->age <= 14){
                    $acceptor1++;
                }else if($user->age >= 15 && $user->age <= 19){
                    $acceptor2++;
                }else if($user->age >= 20 && $user->age <= 49){
                    $acceptor3++;
                }
            }else if($familyplanning->type_of_patient == "dropout"){
                if($user->age >= 10 && $user->age <= 14){
                    $dropout1++;
                }else if($user->age >= 15 && $user->age <= 19){
                    $dropout2++;
                }else if($user->age >= 20 && $user->age <= 49){
                    $dropout3++;
                }
            }else{
                if($user->age >= 10 && $user->age <= 14){
                    $user1++;
                }else if($user->age >= 15 && $user->age <= 19){
                    $user2++;
                }else if($user->age >= 20 && $user->age <= 49){
                    $user3++;
                }
            }
        }

        foreach($prenatals as $prenatal){
            $user = User::find($prenatal->patient_id);
            if($user->employment_status == "employed"){
                if($user->age >= 10 && $user->age <= 14){
                    $employed1++;
                }else if($user->age >= 15 && $user->age <= 19){
                    $employed2++;
                }else if($user->age >= 20 && $user->age <= 49){
                    $employed3++;
                }
            }else if($user->employment_status == "unemployed"){
                if($user->age >= 10 && $user->age <= 14){
                    $unemployed1++;
                }else if($user->age >= 15 && $user->age <= 19){
                    $unemployed2++;
                }else if($user->age >= 20 && $user->age <= 49){
                    $unemployed3++;
                }
            }else{
                if($user->age >= 10 && $user->age <= 14){
                    $student1++;
                }else if($user->age >= 15 && $user->age <= 19){
                    $student2++;
                }else if($user->age >= 20 && $user->age <= 49){
                    $student3++;
                }
            }

            foreach($immunizations as $immunization){
                $user = User::find($immunization->patient_id);
                if($immunization->vaccine_type == "bcg"){
                    $bcg++;
                }

                if($immunization->vaccine_type == "hepatitis_b"){
                    $hepatitis_b++;
                }

                if($immunization->vaccine_type == "dpt1"){
                    $dpt1++;
                }

                if($immunization->vaccine_type == "dpt2"){
                    $dpt2++;
                }

                if($immunization->vaccine_type == "dpt3"){
                    $dpt3++;
                }

                if($immunization->vaccine_type == "polio_1"){
                    $polio_1++;
                }

                if($immunization->vaccine_type == "measles_mcv1"){
                    $measles_mcv1++;
                }

                if($immunization->vaccine_type == "measles_mcv2"){
                    $measles_mcv2++;
                }

                if($immunization->vaccine_type == "tetanus_toxoid"){
                    $tetanus_toxoid++;
                }
            }
        }

        $patient_age = [
            "1" => $acceptor1,
            "2" => $acceptor2,
            "3" => $acceptor3,
            "4" => $dropout1,
            "5" => $dropout2,
            "6" => $dropout3,
            "7" => $user1,
            "8" => $user2,
            "9" => $user3,
        ];

        $patient_employment_status = [
            "1" => $employed1,
            "2" => $employed2,
            "3" => $employed3,
            "4" => $unemployed1,
            "5" => $unemployed2,
            "6" => $unemployed3,
            "7" => $student1,
            "8" => $student2,
            "9" => $student3,
        ];

        $patient_vaccine_type = [
            "1" => $bcg,
            "2" => $hepatitis_b,
            "3" => $dpt1,
            "4" => $dpt2,
            "5" => $dpt3,
            "6" => $polio_1,
            "7" => $measles_mcv1,
            "8" => $measles_mcv2,
            "9" => $tetanus_toxoid,
        ];

        $patient_count = [
            "acceptor" => FamilyPlanning::where('type_of_patient', 'acceptor')->count(),
            "dropout" => FamilyPlanning::where('type_of_patient', 'dropout')->count(),
            "user" => FamilyPlanning::where('type_of_patient', 'changing method')->count() + FamilyPlanning::where('type_of_patient', 'changing clinic')->count(),
        ];

        $patient_count2 = [
            "employed" => Prenatal::where('employment_status', 'employed')->count(),
            "unemployed" => Prenatal::where('employment_status', 'unemployed')->count(),
            "student" => Prenatal::where('employment_status', 'student')->count(),
        ];

        $vaccine_count = [
            "bcg" => Immunization::where('vaccine_type', 'bcg')->count(),
            "hepatitis_b" => Immunization::where('vaccine_type', 'hepatitis_b')->count(),
            "dpt1" => Immunization::where('vaccine_type', 'dpt1')->count(),
            "dpt2" => Immunization::where('vaccine_type', 'dpt2')->count(),
            "dpt3" => Immunization::where('vaccine_type', 'dpt3')->count(),
            "polio_1" => Immunization::where('vaccine_type', 'polio_1')->count(),
            "measles_mcv1" => Immunization::where('vaccine_type', 'measles_mcv1')->count(),
            "measles_mcv2" => Immunization::where('vaccine_type', 'measles_mcv2')->count(),
            "tetanus_toxoid" => Immunization::where('vaccine_type', 'tetanus_toxoid')->count(),
        ];

        return view('pages.admin.print', compact('patient_age', 'patient_employment_status', 'patient_count', 'patient_count2', 'patient_vaccine_type', 'vaccine_count'));
    }



    public function print_filter(Request $request){
        $from = $request->from;
        $to = $request->to;
        $to_plus = date('Y-m-d', strtotime($to . ' +1 day'));

        if($from == null || $to == null){
            return redirect('print');
        }

        // $familyplannings = FamilyPlanning::whereBetween('created_at', [$from, $to])->get();
        $familyplannings = FamilyPlanning::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->get();
        $prenatals = Prenatal::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->get();
        $immunizations = immunization::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->get();
        // $familyplannings = FamilyPlanning::all();
        $acceptor1 = 0;
        $acceptor2 = 0;
        $acceptor3 = 0;
        $dropout1 = 0;
        $dropout2 = 0;
        $dropout3 = 0;
        $user1 = 0;
        $user2 = 0;
        $user3 = 0;


        $employed1 = 0;
        $employed2 = 0;
        $employed3 = 0;
        $unemployed1 = 0;
        $unemployed2 = 0;
        $unemployed3 = 0;
        $student1 = 0;
        $student2 = 0;
        $student3 = 0;

        $bcg = 0;
        $hepatitis_b = 0;
        $dpt1 = 0;
        $dpt2 = 0;
        $dpt3 = 0;
        $polio_1 = 0;
        $measles_mcv1 = 0;
        $measles_mcv2 = 0;
        $tetanus_toxoid = 0;

        foreach($familyplannings as $familyplanning){
            $user = User::find($familyplanning->patient_id);
            if($familyplanning->type_of_patient == "acceptor"){
                if($user->age >= 10 && $user->age <= 14){
                    $acceptor1++;
                }else if($user->age >= 15 && $user->age <= 19){
                    $acceptor2++;
                }else if($user->age >= 20 && $user->age <= 49){
                    $acceptor3++;
                }
            }else if($familyplanning->type_of_patient == "dropout"){
                if($user->age >= 10 && $user->age <= 14){
                    $dropout1++;
                }else if($user->age >= 15 && $user->age <= 19){
                    $dropout2++;
                }else if($user->age >= 20 && $user->age <= 49){
                    $dropout3++;
                }
            }else{
                if($user->age >= 10 && $user->age <= 14){
                    $user1++;
                }else if($user->age >= 15 && $user->age <= 19){
                    $user2++;
                }else if($user->age >= 20 && $user->age <= 49){
                    $user3++;
                }
            }
        }

        foreach($prenatals as $prenatal){
            $user = User::find($prenatal->patient_id);
            if($prenatal->employment_status == "employed"){
                if($user->age >= 10 && $user->age <= 14){
                    $employed1++;
                }else if($user->age >= 15 && $user->age <= 19){
                    $employed2++;
                }else if($user->age >= 20 && $user->age <= 49){
                    $employed3++;
                }
            }else if($prenatal->employment_status == "unemployed"){
                if($user->age >= 10 && $user->age <= 14){
                    $unemployed1++;
                }else if($user->age >= 15 && $user->age <= 19){
                    $unemployed2++;
                }else if($user->age >= 20 && $user->age <= 49){
                    $unemployed3++;
                }
            }else{
                if($user->age >= 10 && $user->age <= 14){
                    $student1++;
                }else if($user->age >= 15 && $user->age <= 19){
                    $student2++;
                }else if($user->age >= 20 && $user->age <= 49){
                    $student3++;
                }
            }


            foreach($immunizations as $immunization){
                $user = User::find($immunization->patient_id);
                if($immunization->vaccine_type == "bcg"){
                    $bcg++;
                }

                if($immunization->vaccine_type == "hepatitis_b"){
                    $hepatitis_b++;
                }

                if($immunization->vaccine_type == "dpt1"){
                    $dpt1++;
                }

                if($immunization->vaccine_type == "dpt2"){
                    $dpt2++;
                }

                if($immunization->vaccine_type == "dpt3"){
                    $dpt3++;
                }

                if($immunization->vaccine_type == "polio_1"){
                    $polio_1++;
                }

                if($immunization->vaccine_type == "measles_mcv1"){
                    $measles_mcv1++;
                }

                if($immunization->vaccine_type == "measles_mcv2"){
                    $measles_mcv2++;
                }

                if($immunization->vaccine_type == "tetanus_toxoid"){
                    $tetanus_toxoid++;
                }
            }
        }

        $patient_age = [
            "1" => $acceptor1,
            "2" => $acceptor2,
            "3" => $acceptor3,
            "4" => $dropout1,
            "5" => $dropout2,
            "6" => $dropout3,
            "7" => $user1,
            "8" => $user2,
            "9" => $user3,
        ];

        $patient_employment_status = [
            "1" => $employed1,
            "2" => $employed2,
            "3" => $employed3,
            "4" => $unemployed1,
            "5" => $unemployed2,
            "6" => $unemployed3,
            "7" => $student1,
            "8" => $student2,
            "9" => $student3,
        ];

        $patient_vaccine_type = [
            "1" => $bcg,
            "2" => $hepatitis_b,
            "3" => $dpt1,
            "4" => $dpt2,
            "5" => $dpt3,
            "6" => $polio_1,
            "7" => $measles_mcv1,
            "8" => $measles_mcv2,
            "9" => $tetanus_toxoid,
        ];

        $patient_count = [
            "acceptor" => FamilyPlanning::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->where('type_of_patient', 'acceptor')->count(),
            "dropout" => FamilyPlanning::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->where('type_of_patient', 'dropout')->count(),
            "user" => FamilyPlanning::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->where('type_of_patient', 'changing method')->count() + FamilyPlanning::whereBetween('created_at', [$from, $to])->where('type_of_patient', 'changing clinic')->count(),
        ];

        $patient_count2 = [
            "employed" => Prenatal::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->where('employment_status', 'employed')->count(),
            "unemployed" => Prenatal::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->where('employment_status', 'unemployed')->count(),
            "student" => Prenatal::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->where('employment_status', 'student')->count(),
        ];

        $vaccine_count = [
            "bcg" => Immunization::where('vaccine_type', 'bcg')->count(),
            "hepatitis_b" => Immunization::where('vaccine_type', 'hepatitis_b')->count(),
            "dpt1" => Immunization::where('vaccine_type', 'dpt1')->count(),
            "dpt2" => Immunization::where('vaccine_type', 'dpt2')->count(),
            "dpt3" => Immunization::where('vaccine_type', 'dpt3')->count(),
            "polio_1" => Immunization::where('vaccine_type', 'polio_1')->count(),
            "measles_mcv1" => Immunization::where('vaccine_type', 'measles_mcv1')->count(),
            "measles_mcv2" => Immunization::where('vaccine_type', 'measles_mcv2')->count(),
            "tetanus_toxoid" => Immunization::where('vaccine_type', 'tetanus_toxoid')->count(),

            "bcg" => Immunization::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->where('vaccine_type', 'bcg')->count(),
            "hepatitis_b" => Immunization::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->where('vaccine_type', 'hepatitis_b')->count(),
            "dpt1" => Immunization::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->where('vaccine_type', 'dpt1')->count(),
            "dpt2" => Immunization::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->where('vaccine_type', 'dpt2')->count(),
            "dpt3" => Immunization::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->where('vaccine_type', 'dpt3')->count(),
            "polio_1" => Immunization::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->where('vaccine_type', 'polio_1')->count(),
            "measles_mcv1" => Immunization::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->where('vaccine_type', 'measles_mcv1')->count(),
            "measles_mcv2" => Immunization::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->where('vaccine_type', 'measles_mcv2')->count(),
            "tetanus_toxoid" => Immunization::where('created_at', '>=', $from)->where('created_at', '<=', $to_plus)->where('vaccine_type', 'tetanus_toxoid')->count(),
        ];


        return view('pages.admin.print', compact('patient_age', 'patient_employment_status', 'patient_count', 'patient_count2', 'patient_vaccine_type', 'vaccine_count', 'from', 'to'));
    }
    // *****************************
    // END OF PRINT
    // *****************************
}
