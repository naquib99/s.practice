?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    use HasFactory;
    protected $fillable = ['rubric_id','course_outcome','competency','scale1','scale2','scale3','scale4','scale5','weightage','score'];
}
