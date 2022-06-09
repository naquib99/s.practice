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
          
            <td>{{$rubric->rubric_id}}</td>
          <td>{{$rubric->course_outcome}}</td>
          <td>{{$rubric->competency}}</td>
          <td>{{$rubric->scale 1}}</td>
          <td>{{$rubric->scale 2}}</td>
          <td>{{$rubric->scale 3}}</td>
          <td>{{$rubric->scale 4}}</td>
          <td>{{$rubric->scale 5}}</td>
          <td>{{$rubric->weightage}}</td>
          <form action = "/edit" method = "POST">
              <input type="hidden" name="score_id" value = "{{$rubric->score_id}}">
              <input type="number" name="score">
          <td><input type="submit"></td>
          </form>
        </tr>
      @endforeach
    </tbody>
  </table>
  @endsection
