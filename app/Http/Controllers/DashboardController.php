<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;
    use App\Models\DataFeed;
    use Carbon\Carbon;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use App\Models\User;
    use App\Models\FamilyPlanning;
    use App\Models\FamilyPlanningAssessment;

    class DashboardController extends Controller
    {

        /**
         * Displays the dashboard screen
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         */
        public function index()
        {
            $notification = [
                'is_triggered' => false,
                'message' => "",
                'data'  => null
            ];
            $user = Auth::user();

            if($user->user_type == 1){
                $familyplanning = FamilyPlanning::where('patient_id', $user->id)->latest()->first();
                $assessments = FamilyPlanningAssessment::where('family_planning_id', $familyplanning->id)->get();
                
                foreach($assessments as $assessment){
                    $date = Carbon::parse($assessment->date_of_follow_up);
                    $now = Carbon::now();
                    $diff = $date->diffInDays($now);

                    $notification['data'] = $diff;
                    if($diff == 0){
                        $notification['is_triggered'] = true;
                        $notification['message'] = "You have a follow up appointment today";
                    }
                }
            }

            return view('pages/dashboard/dashboard', compact('notification'));
        }
    }
