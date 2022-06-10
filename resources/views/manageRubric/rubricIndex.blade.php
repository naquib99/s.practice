@extends('layouts.app')

<head>
    <title>PSM Rubric Homepage</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div style="padding:20px;background-color:#e2e9e9">
        <div class="text-center mb-5" style="background-color:#111;padding:10px;color:white;width:100%;">
            <h1><b>PSM Rubric Homepage</b></h1>
        </div>
        <center>
        <div style="padding:10px;">
            <a id="Button" href="/rubricCreate"><b>Create Rubric</b></a>
        </div>
        </center>
        <div class="container rounded bg-white">
        <div class="row">
            <center>
            <div class="col-12"style="background-color:#303030;padding:10px;color:white;width:100%;">
                <div style="padding:2px; background-color:#303030">
            </div>

            <h1>PSM Rubric Information</h1>
            <br><div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-hover table-success table-striped" width="100%">
                    <tr>
                        <th>ID</th>
                        <th>Rubric ID</th>
                        <th>Course Outcome</th>
                        <th>Competency</th>
                        <th>Scale 1</th>
                        <th>Scale 2</th>
                        <th>Scale 3</th>
                        <th>Scale 4</th>
                        <th>Scale 5</th>
                        <th>Weightage</th>
                        <th>Score</th>
                        <th colspan="2">Update / Delete</th>
                    </tr>
                    @foreach($rubric as $rubric)
                    <tr>
                        <td>{{$rubric->id}}</td>
                        <td>{{$rubric->rubric_id}}</td>
                        <td>{{$rubric->course_outcome}}</td>
                        <td>{{$rubric->competency}}</td>
                        <td>{{$rubric->scale1}}</td>
                        <td>{{$rubric->scale2}}</td>
                        <td>{{$rubric->scale3}}</td>
                        <td>{{$rubric->scale4}}</td>
                        <td>{{$rubric->scale5}}</td>
                        <td>{{$rubric->weightage}}</td>
                        <td>{{$rubric->score}}</td>
                            
                        <td><a href="rubric/{{$rubric->id}}/edit" class="btn btn-success">Update</a></td>
                        <td><a href="rubric/{{$rubric->id}}/delete" class="btn btn-danger" onClick = "return confirm('Are you sure to delete this rubric?')">Delete</a></td>
                    </tr> 
                    @endforeach 
                </table>
            </div><br>
        </div>
    </div>
</div>
@endsection
