@extends('layouts.app')

@section('content')

<style>
.project_info {
    padding: 1rem 1rem;
}


.container {

    height: 100vh;
    width: 100vw;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>

<div class="container">
    <div class="project_info">
        <h1>Student Project Detail</h1>
        <hr>
        <h4>Student ID</h4>
        <p>{{$studentProject->student_id}}</p>
        <h4>Student Name</h4>
        <p>{{$studentProject->student_name}}</p>
        <h4>PSM Title</h4>
        <p>{{$studentProject->PSM_title}}</p>
        <h4>PSM Type</h4>
        <p>{{$studentProject->PSM_type}}</p>
        <h4>Project Score</h4>
        <p>{{$studentProject->score}}</p>
    </div>
</div>

@endsection('content')