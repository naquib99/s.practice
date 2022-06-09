<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class manageEvaluationController extends Controller
{
    public function viewStudentList()
    {
        // $supervisor_id = session()->get('supervisor_id');
        $supervisor_id = 1;
        $list = DB::table('project_details')
            ->where('project_details.supervisor_id', '=', $supervisor_id)
            ->join('students', 'students.student_id', '=', 'project_details.student_id')
            ->get()
            ->toarray();
        return view('manageEvaluation.viewStudentList', ['list' => $list]);
    }

    public function editScoreForm($rubric_id, $student_id)
    {
        $exist = DB::table('student_scores') // initialization of scores
            ->where('student_id', '=', $student_id)
            ->get()
            ->toarray();
        if ($exist == []) {
            $count = DB::table('rubricDetails')
                ->get()
                ->toarray();
            $size = $count->count();
            for ($i = 0; $i < $size; $i++) {
                DB::table('student_scores')->insert([
                    'student_id' => $student_id,
                    'rubricDetail_id' => $i,
                    'score' => '0'
                ]);
            }
        }
        $rubric = DB::table('rubricDetails') //get all their scores from 1 evaluation session
            ->where('student_scores.student_id', '=', $student_id)
            ->where('rubricDetails.rubric_id', '=', $rubric_id)
            ->join('student_scores','student_scores.rubricDetail_id', '=', 'rubricDetails.rubricDetail_id')
            ->get()
            ->toarray();
        return view('manageEvaluation.editScoreForm', ['rubric' => $rubric]);
    }

    public function updateScore(Request $request)
    {
        DB::table('student_scores')
            ->where('score_id', '=', $request->score_id)
            ->update(['score' => $request->score]);

            $rubric = DB::table('rubricDetails') //get all their scores from 1 evaluation session
            ->where('student_scores.student_id', '=', $request->student_id)
            ->where('rubricDetails.rubric_id', '=', 1)
            ->join('student_scores','student_scores.rubricDetail_id', '=', 'rubricDetails.rubric_id')
            ->get()
            ->toarray();
        return view('manageEvaluation.editScoreForm', ['rubric' => $rubric]);
    }

    public function viewStudentDetails($student_id)
    {
        $student = DB::table('project_details')
            ->where('students.student_id', '=', $student_id)
            ->join('students', 'students.student_id', '=', 'project_details.student_id')
            ->get()
            ->toarray();
        return view('manageEvaluation.viewStudentDetails', ['student' => $student]);
    }
}
