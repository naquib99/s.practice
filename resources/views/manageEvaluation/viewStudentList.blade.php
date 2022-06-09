@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-between">
        <h5>Supervisee List</h5>
    </div>
  <table class="table mt-4">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Student Name</th>
        <th scope="col">PSM_Title</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($list as $i=>$list)
        <tr>
          <td>{{$list->student_id}}</td>
          <td>{{$list->student_name}}</td>
          <td>{{$list->PSM_title}}</td>
          <td><a href='/manageEvaluation/viewStudentDetails/{{$list->student_id}}'>View</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @endsection
