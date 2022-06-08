<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class managePsm extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['evaluator_id', 'allocate', 'std_id1', 'std_id2', 'std_id3'];
}
