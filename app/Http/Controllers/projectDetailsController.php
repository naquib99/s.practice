<?php

namespace App\Http\Controllers;

use App\Models\projectDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class projectDetailsController extends Controller
{
    //supervisor
    public function supervisor($id) {
         
        $projects = projectDetail::select('*')
            ->join('students','project_details.student_id','=','students.student_id')
            ->where('project_details.supervisor_id','=',$id)
            ->get();

        $supervisor_id = $id;
       
            return view('projectDetails.viewLectProjects', [
                'projects' => $projects,
                'supervisor_id' => $supervisor_id
            ]);


    }

    public function student($id) {

    
        $studentProject = projectDetail::select('*')
            ->join('students','project_details.student_id','=','students.student_id')
            ->where('project_details.student_id','=',$id)
            ->first();

      
            return view('projectDetails.viewStudentProject', [
                'studentProject' => $studentProject,
            ]);


    }

    
    public function delete($id)
    {
        DB::table("project_details")->where('project_id', '=', $id)->delete();
      

        return redirect('/');
    }

    public function update(Request $request, $id)
    {


        DB::table('project_details')
        ->where('project_id', '=', $id)  
        ->limit(1)  
        ->update(array('PSM_title' => $request->PSM_title,
                        'PSM_type' => $request->PSM_type));  

        return redirect('/');
    }

    public function add(Request $request)
    {
        $score = 0;

        $newProject = projectDetail::create([
            'supervisor_id' => $request->supervisor_id,
            'student_id' => $request->student_id,
            'score' => $score,
            'PSM_title' => $request->PSM_title,
            'PSM_type' => $request->PSM_type,
        ]);


        return redirect('/');
    }


}