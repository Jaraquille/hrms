<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immunization extends Model
{
    use HasFactory;

    protected $table='immunization';

    protected $fillable = [
        'patient_id',
        'immu_name',
        'vaccine_type',
        'immu_gender',
        'immu_month',
        'immu_birth_weight',
        'immu_height',
        'immu_birth_first_seen',
        'immu_place_of_birth',
        'immu_mother_sname',
        'immu_mother_mname',
        'immu_mother_fname',
        'immu_mother_education_level',
        'immu_mother_occupation',
        'immu_father_sname',
        'immu_father_mname',
        'immu_father_fname',
        'immu_father_education_level',
        'immu_father_occupation',
        'immu_brothers_sisters',
        'immu_complete_address',
        'bcg',
        'hepatitis_b',
        'dpt1',
        'dpt2',
        'dpt3',
        'polio_1',
        'measles_mcv1',
        'measles_mcv2',
        'tetanus_toxoid',
    ];
}
