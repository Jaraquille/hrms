<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenatal extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'philhealth_id',
        'employment_status',
        'family_serial_number',
        'fourps_nhts_number',
        'father_sname',
        'father_mname',
        'father_fname',
        'father_address',
        'mother_sname',
        'mother_mname',
        'mother_fname',
        'mother_address',
        'houseowner_name',
        'ht',
        'wt',
        'temp',
        'pr',
        'rr',
        'bp',
        'menarche',
        'lmp',
        'gravida',
        'para',
        'fullterm',
        'preterm',
        'abortion',
        'stillbirth',
        'labresults',
        'hgb',
        'u_a',
        'bdrl_rpr',
    ];
}
