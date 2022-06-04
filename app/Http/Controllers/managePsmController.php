<?php

namespace App\Http\Controllers;

use App\Models\managePsm;
use App\Models\timePsm;
use App\Event;
use Illuminate\Http\Request;
use Redirect,Response;

class managePsmController extends Controller
{
    public function index()
    {
        $posts = managePsm::all(); //fetch all blog posts from DB
        $times = timePsm::all();
        return view('managePsm.indexPsm', [
            'posts' => $posts,
            'times' => $times
        ]); //returns the view with posts
    }

    public function create()
    {
        return view('managePsm.createPsm');
    }

    public function store(Request $request)
    {
        $newPost = managePsm::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1
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
