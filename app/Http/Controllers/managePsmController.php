<?php

namespace App\Http\Controllers;

use App\Models\managePsm;
use App\Models\timePsm;
use App\Event;
use App\Models\evaluator;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect, Response;

class managePsmController extends Controller
{
    public function index()
    {
        // $posts = managePsm::all();
        $mPsms = managePsm::select('*')
            ->join('evaluators', 'manage_psms.evaluator_id', '=', 'evaluators.evaluator_id')
            ->select('evaluators.evaluator_name', 'manage_psms.allocate', 'manage_psms.id')->get();

        $timePsm = timePsm::select('*')->where('title', '=', 'psm')->get();
        $timeCarnival = timePsm::select('*')->where('title', '=', 'carnival')->get();

        return view('managePsm.indexPsm', [
            'mPsms' => $mPsms,
            'timePsm' => $timePsm,
            'timeCarnival' => $timeCarnival
        ]);
    }

    public function show($id)
    {
        $mPsm = managePsm::select('*')
            ->where('manage_psms.id', '=', $id)->first();

        $evaluator = managePsm::select('*')
            ->join('evaluators', 'manage_psms.evaluator_id', '=', 'evaluators.evaluator_id')
            ->select('evaluators.evaluator_name')
            ->where('manage_psms.id', '=', $id)->get();

        $students = student::select('*')->get();

        $std1 = managePsm::select('*')
            ->join('students', 'manage_psms.std_id1', '=', 'students.student_id')
            ->select('students.student_name')
            ->where('manage_psms.id', '=', $id)->first();
        $std2 = managePsm::select('*')
            ->join('students', 'manage_psms.std_id2', '=', 'students.student_id')
            ->select('students.student_name')
            ->where('manage_psms.id', '=', $id)->first();
        $std3 = managePsm::select('*')
            ->join('students', 'manage_psms.std_id3', '=', 'students.student_id')
            ->select('students.student_name')
            ->where('manage_psms.id', '=', $id)->first();

        return view('managePsm.showPsm', [
            'mPsm' => $mPsm,
            'evaluator' => $evaluator,
            'stds' => $students,
            'std1' => $std1,
            'std2' => $std2,
            'std3' => $std3
        ]);
    }

    public function create()
    {
        $evaluator = evaluator::select('*')->get();
        $student = student::select('*')->get();

        return view('managePsm.createPsm', [
            'evaluator' => $evaluator,
            'student' => $student
        ]);
    }

    public function store(Request $request)
    {
        $newPost = managePsm::create([
            'evaluator_id' => $request->evaluator_id,
            'allocate' => $request->allocate,
            'std_id1' => $request->std_id1,
            'std_id2' => $request->std_id2,
            'std_id3' => $request->std_id3,
        ]);

        return redirect('psm/' . $newPost->id);
    }

    public function edit($id)
    {
        $evaluator = managePsm::select('*')
            ->join('evaluators', 'manage_psms.evaluator_id', '=', 'evaluators.evaluator_id')
            ->select('evaluators.evaluator_name')
            ->where('manage_psms.id', '=', $id)->first();
        $students = student::select('*');

        return view('managePsm.editPsm', [
            'evaluator' => $evaluator,
            'students' => $students
        ]); //returns the edit view with the post
    }

    public function update(Request $request, managePsm $managePsm)
    {
        $managePsm->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect('psm/' . $managePsm->id);
    }

    public function destroy(managePsm $managePsm)
    {
        $managePsm->delete();

        return redirect('/psm');
    }

    // TIME PSM
    public function showTime(timePsm $timePsm)
    {
        return view('managePsm.timePsm.editTime', [
            'tPsm' => $timePsm,
        ]);
    }
}
