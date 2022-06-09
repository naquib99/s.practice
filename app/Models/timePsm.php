<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timePsm extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['time_id', 'title', 'start', 'end'];
}
