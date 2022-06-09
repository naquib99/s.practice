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

        $timePsm = timePsm::select('*')->where('title', '=', 'psm')->first();
        $timeCarnival = timePsm::select('*')->where('title', '=', 'carnival')->first();

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
            ->select('students.student_name', 'students.student_id')
            ->where('manage_psms.id', '=', $id)->first();
        $std2 = managePsm::select('*')
            ->join('students', 'manage_psms.std_id2', '=', 'students.student_id')
            ->select('students.student_name', 'students.student_id')
            ->where('manage_psms.id', '=', $id)->first();
        $std3 = managePsm::select('*')
            ->join('students', 'manage_psms.std_id3', '=', 'students.student_id')
            ->select('students.student_name', 'students.student_id')
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
        // $mPsmId = managePsm::select('manage_psms.std_id1')->get();
        $evaluator = evaluator::select('*')->get();
        $student = student::select('*')->get();
        // ->where('students.student_id', '!=', $mPsmId)

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
        $mPsm = managePsm::select('*')
            ->join('evaluators', 'manage_psms.evaluator_id', '=', 'evaluators.evaluator_id')
            ->select('evaluators.evaluator_name', 'manage_psms.evaluator_id', 'manage_psms.allocate')
            ->where('manage_psms.id', '=', $id)->first();

        $students = student::select('*')->get();
        $std1 = student::select('*')
        ->join('manage_psms', 'students.student_id', '=', 'manage_psms.std_id1')
        ->where('manage_psms.id', '=', $id)->first();
        $std2 = student::select('*')
        ->join('manage_psms', 'students.student_id', '=', 'manage_psms.std_id2')
        ->where('manage_psms.id', '=', $id)->first();
        $std3 = student::select('*')
        ->join('manage_psms', 'students.student_id', '=', 'manage_psms.std_id3')
        ->where('manage_psms.id', '=', $id)->first();

        return view('managePsm.editPsm', [
            'mPsm' => $mPsm,
            'student' => $students,
            'std1' => $std1,
            'std2' => $std2,
            'std3' => $std3
        ]); //returns the edit view with the post
    }

    public function update(Request $request, managePsm $managePsm)
    {
        $managePsm->update([
            'evaluator_id' => $request->evaluator_id,
            'allocate' => $request->allocate,
            'std_id1' => $request->std_id1,
            'std_id2' => $request->std_id2,
            'std_id3' => $request->std_id3,
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
        return view('managePsm.timePsm.showTime', [
            'tPsm' => $timePsm,
        ]);
    }

    public function updateTime(Request $request, $id)
    {
        DB::table('time_psms')
        ->where('id', '=', $id)
        ->limit(1)
        ->update(array(
            'time_id' => $request->time_id,
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end));

        return redirect('timePsm/' . $id);
    }

    public function destroyTime(timePsm $timePsm)
    {
        $timePsm->delete();

        return redirect('/psm');
    }

    public function createTime()
    {
        return view('managePsm.timePsm.createTime');
    }

    public function insertTime(Request $request)
    {
        $newPost = timePsm::create([
            'time_id' => $request->time_id,
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end
        ]);

        return redirect('/psm');
    }
}
