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
        $score = DB::table('student_scores')
            ->join('rubricDetails','rubricDetails.rubric_id','=','student_scores.rubric_id')
            ->where('student_scores.student_id','=', $student_id)
            ->where('student_scores.rubric_id','=', $rubric_id)
            ->select('rubricDetails.*','student_scores.*')
            ->get()
            ->toarray();
        return view('editScoreForm',['score' => $score]);
    }

    public function updateScore(Request $request){
        DB::table('student_scores')
        ->where('score_id','=',$score_id)
        ->update(['score' => $score]);
        return redirect()->action([manageEvaluationController::class,'editScoreForm($rubric_id, $student_id)']);
    }
}