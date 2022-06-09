<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class manageEvaluationController extends Controller
{
    public function viewStudentList(){
        $evaluator_id = session()->get('evaluator_id');
        $list = DB::table('studentInfos')
                ->where('evaluator_id','=', $evaluator_id)
                ->get()
                ->toarray();
        return view ('pages.list.viewStudentList', ['list' => $list]);
    }

    public function editScoreForm($rubric_id, $student_id){
        $exist = DB::table('student_scores') // initialization of scores
            ->where('student_id','=',$student_id)
            ->get()
            ->toarray();
        if ($exist == []) 
        {
            $count = DB::table('rubricDetails')
            ->get()
            ->toarray();
            $size = $count->count();
            for ($i=0; $i < $size; $i++)
            {
                DB::table('student_scores')->insert([
                'student_id' => $student_id,
                'rubricDetail_id' => $i,
                'score' => '0'
                ]);
            }
        }
        $rubric = DB::table('rubricDetails') //get all their scores from 1 evaluation session
            ->where('student_id','=', $student_id)
            ->where('rubric_id','=', $rubric_id)
            ->join('student_scores','student_scores.rubricDetail.id', '=', 'rubricDetails.rubricDetail_id')
            ->get()
            ->toarray();
        return view('editScoreForm',['rubric' => $rubric]);
    }

    public function updateScore(Request $request){
        DB::table('student_scores')
        ->where('score_id','=',$score_id)
        ->update(['score' => $score]);
        return redirect()->action([manageEvaluationController::class,'editScoreForm($rubric_id, $student_id)']);
    }
}