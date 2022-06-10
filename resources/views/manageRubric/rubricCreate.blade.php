@extends('layouts.app')

<style>
    #body {
        justify-content: center;
    }
</style>

<head>
    <title>Create Rubric</title>
</head>

@section('content') 

@if ($errors->any())
    <div class="alert alert-primary" role="alert">
     
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
    </div>
@endif

    <!-- Page Content  -->
    <div id="body" class="row" style="padding:20px;background-color:#d8d8d8">
        <div class=" mb-5" style="background-color:#303030;padding:10px;color:white;width:60%;">
        <center>
        <h1><b>Create New Rubric Form</b></h1>
        
            <form action="/rubric/create" method="POST">
                {{csrf_field()}}    
                <b>Input all the required data:</b></center>                       
                    <!-- Rubric ID -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Rubric ID</label>
                        <input name="rubric_id" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Rubric ID">
                    </div>
                        
                    <!-- Course Outcome -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Course Outcome</label>
                        <input name="course_outcome" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Course Outcome">
                    </div>

                    <!-- Competency -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Competency</label>
                        <input name="competency" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Competency">
                    </div>
                        
                    <!-- Scale 1 -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Scale 1</label>
                        <input name="scale1" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Scale 1">          
                    </div>

                    <!-- Scale 2 -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Scale 2</label>
                        <input name="scale2" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Scale 2">
                    </div>

                    <!-- Scale 3 -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Scale 3</label>
                        <input name="scale3" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Scale 3">
                    </div>

                    <!-- Scale 4 -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Scale 4</label>
                        <input name="scale4"  type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Scale 4">
                    </div>
						
					<!-- Scale 5 -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Scale 5</label>
                        <input name="scale5" type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Scale 5">
                    </div>
						
					<!-- Weightage -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Weightage</label>
                        <input name="weightage"  type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Weightage">
                    </div>
						
					<!-- Score -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Score</label>
                        <input name="score"  type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Score">
                    </div>
                    <center>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>  
        </div>    
    </div>
@endsection