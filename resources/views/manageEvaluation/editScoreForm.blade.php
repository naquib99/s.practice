@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between">
  <h5>Edit Evaluation Score</h5>
</div>
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">rubric id</th>
      <th scope="col">course outcome</th>
      <th scope="col">competency</th>
      <th scope="col">scale 1</th>
      <th scope="col">scale 2</th>
      <th scope="col">scale 3</th>
      <th scope="col">scale 4</th>
      <th scope="col">scale 5</th>
      <th scope="col">weightage</th>
      <th scope="col">score</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($rubric as $i=>$rubric)
    <tr>

      <td>{{$rubric->rubricDetail_id}}</td>
      <td>{{$rubric->course_outcome}}</td>
      <td>{{$rubric->competency}}</td>
      <td>{{$rubric->scale1}}</td>
      <td>{{$rubric->scale2}}</td>
      <td>{{$rubric->scale3}}</td>
      <td>{{$rubric->scale4}}</td>
      <td>{{$rubric->scale5}}</td>
      <td>{{$rubric->weightage}}</td>
      <form action="/manageEvaluation/updateScore" method="POST">
        @csrf
        <input type="hidden" name="score_id" value="{{$rubric->score_id}}">
        <input type="hidden" name="rubricDetail_id" value="{{$rubric->rubricDetail_id}}">
        <input type="hidden" name="student_id" value="{{$rubric->student_id}}">
        <td> <input type="number" name="score" value = ""></td>
        <td><input type="submit"></td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection