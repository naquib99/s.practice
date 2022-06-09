@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-between">
        <h5>Student Detail</h5>
  </div>
  <table class="table mt-4">
    <thead>
      <tr>Sample Image</tr>
      @foreach ($student as $i=>$student)
        <tr><th>Student id</th><td>{{$student->student_id}}</td></tr>
        <tr><th>Name</th><td>{{$student->student_name}}</td></tr>
        <tr><th>PSM Title</th><td>{{$student->PSM_title}}</td></tr>
        <tr><td>PSM Evaluation 1</td><td><a href='/manageEvaluation/editScoreForm/1/{{$student->student_id}}'>Update</td></tr>
        <tr><td>PSM Evaluation 2</td><td><a href='/manageEvaluation/editScoreForm/2/{{$student->student_id}}'>Update</td></tr>
      @endforeach
    </thead>
  </table>
  @endsection
