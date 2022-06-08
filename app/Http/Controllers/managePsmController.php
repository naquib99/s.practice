<?php

namespace App\Http\Controllers;

use App\Models\managePsm;
use App\Models\timePsm;
use App\Event;
use App\Models\evaluator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;

class managePsmController extends Controller
{
    public function index()
    {
        // $posts = managePsm::all();
        $mPsms = managePsm::all();
        $evaluators = DB::table('manage_psms')
            ->join('evaluators', 'manage_psms.evaluator_id', '=', 'evaluators.evaluator_id')
            ->select('evaluators.evaluator_name', 'manage_psms.allocate', 'manage_psms.id')->get();

        $timePsm = timePsm::select('*')->where('title', '=', 'psm')->get();
        $timeCarnival = timePsm::select('*')->where('title', '=', 'carnival')->get();

        return view('managePsm.indexPsm', [
            'evaluators' => $evaluators,
            'timePsm' => $timePsm,
            'timeCarnival' => $timeCarnival,
            'mPsms' => $mPsms
        ]); //returns the view with posts
    }

    public function create()
    {
        return view('managePsm.createPsm');
    }

    public function store(Request $request)
    {
        $newPost = managePsm::create([
            'evluator_id' => $request->evaluator_id,
            'allocate' => $request->allocate,
            'std_id1' => $request->std_id1,
            'std_id2' => $request->std_id2,
            'std_id3' => $request->std_id3,
        ]);

        return redirect('psm/' . $newPost->id);
    }

    public function show(managePsm $managePsm)
    {
        
        return view('managePsm.showPsm', [
            'post' => $managePsm,
        ]);
    }

    public function edit(managePsm $managePsm)
    {
        return view('managePsm.editPsm', [
            'post' => $managePsm,
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


}
