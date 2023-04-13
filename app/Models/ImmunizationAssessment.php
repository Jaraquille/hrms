<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImmunizationAssessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'immunization_id',
        'date_of_visit',
        'findings',
        'method',
        'date_of_follow_up',
    ];
}
