<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrenatalAssessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenatal_id',
        'date_of_visit',
        'date_of_follow_up',
        'recommendation',
        'wt',
        'pr',
        'rr',
        'bp',
        'temp',
        'aog',
        'fh',
        'fhb',
        'press',
    ];
}
