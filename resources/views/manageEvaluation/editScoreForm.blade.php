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
      @foreach ($edit as $i=>$edit)
        <tr>
          
            <td>{{$edit->rubric_id}}</td>
          <td>{{$edit->course_outcome}}</td>
          <td>{{$edit->competency}}</td>
          <td>{{$edit->scale 1}}</td>
          <td>{{$edit->scale 2}}</td>
          <td>{{$edit->scale 3}}</td>
          <td>{{$edit->scale 4}}</td>
          <td>{{$edit->scale 5}}</td>
          <td>{{$edit->weightage}}</td>
          <form action = "/edit" method = "POST">
              <input type="hidden" name="score_id" value = "{{$edit->score_id}}">
              <input type="number" name="score">
          <td><input type="submit"></td>
          </form>
        </tr>
      @endforeach
    </tbody>
  </table>
  @endsection
