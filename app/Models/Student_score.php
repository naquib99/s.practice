<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_score extends Model
{
    use HasFactory;

    protected $fillable = [
        'score_id',
        'student_id',
        'rubric_id',
        'score',
    ];
}
