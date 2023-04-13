<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyPlanning extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'patient_id',
        'philhealth_id',
        'educational_attainment',
        'spouse_sname',
        'spouse_mname',
        'spouse_fname',
        'number_of_living_children',
        'plan_to_have_children',
        'average_monthly_income',
        'type_of_patient',
        'reason',
        'method',
        'step1_1',
        'step1_2',
        'step1_3',
        'step1_4',
        'step1_5',
        'step1_6',
        'step1_7',
        'step1_8',
        'step1_9',
        'step1_10',
        'step1_11',
        'step1_12',
        'step2_g',
        'step2_p',
        'step2_full_term',
        'step2_premature',
        'step2_abortion',
        'step2_living_children',
        'step2_last_delivery',
        'step2_type_last_delivery',
        'step2_last_menstrual',
        'step2_previous_menstrual',
        'step2_menstrual_flow',
        'step2_dysmenorrhea',
        'step2_hydatidiform_mole',
        'step3_weight',
        'step3_height',
        'step3_blood_pressure',
        'step3_pulse_rate',
        'step3_skin',
        'step3_extormities',
        'step3_conjunctiva',
        'step3_pelvic',
        'step3_breast',
        'step3_abdomen',
    ];


}
