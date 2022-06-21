<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class manageStudentController extends Controller
{
    public function index()
    {
        $data['students'] = Student::orderBy('id', 'ASC')->get();

        return view('manageEvaluation.viewStudentListInterface', $data);
    }

    public function top()
    {
        $data['students'] = Student::where('score', '!=', NULL)->orderBy('score', 'DESC')->get()->take(20);

        return view('manageEvaluation.viewStudentListInterfaceTop', $data);
    }

    public function edit($student_id){
        $data['student'] = Student::findOrFail($student_id);
        return view ('manageEvaluation.editScoreForm', $data);
    }

    public function update(Request $request, $student_id){
        $request->validate([
            'score'     => 'required|numeric',
        ]);

        try {
            $student = Student::findOrFail($student_id);
            $student->score  = $request->score;
            $student->fyp_status = $request->fyp_status;

            $student->save();

            toastr()->success(__('Marks updated successfully'));

            return redirect()->route('fyp.index');
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }
}
