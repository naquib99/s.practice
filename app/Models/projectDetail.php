<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['project_id', 'student_id', 'supervisor_id', 'score', 'PSM_title','PSM_type'];
}