<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Rubric;

class manageRubricController extends Controller
{ 
    //view Rubric
    public function view(){
    $rubric = \App\Models\Rubric::all();
    return view('manageRubric/rubricIndex', ['rubric'=> $rubric]);
    }
    
    //create Rubric
    public function create(Request $request ){

        $request->validate([
            'rubric_id' => 'required',
            'course_outcome' => 'required',
            'competency' => 'required',
            'scale1' => 'required',
            'scale2' => 'required',
            'scale3' => 'required',
            'scale4' => 'required',
            'scale5' => 'required',
            'weightage' => 'required',
        ]);
        \App\Models\Rubric::create($request->all());
        return redirect('/rubricIndex')->with('success','Successfully Created');    
    } 

    //Edit Rubric Form  
    public function edit($id ){
        $rubric = \App\Models\Rubric::find($id);
        return view('manageRubric/rubricUpdate',['rubric'=>$rubric]);
    }

    //Update Rubric
    public function update(Request $request,$id){
        $rubric = \App\Models\Rubric::find($id);
        $rubric -> update($request->all());

        return redirect('/rubricIndex')->with('success','Successfully Updated');
    }

    //Delete Rubric
    public function delete($id){
        $rubric = \App\Models\Rubric::find($id);
        $rubric -> delete($rubric);

        return redirect('/rubricIndex')->with('success','Successfully Deleted');
    }
}
