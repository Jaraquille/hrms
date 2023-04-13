<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyPlanningAssessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'family_planning_id',
        'date_of_visit',
        'findings',
        'method',
        'date_of_follow_up',
    ];
}
