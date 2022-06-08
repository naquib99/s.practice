@extends('layouts.app')
@section('content')
<style>
    .display-one {
        margin: auto;
        width: auto;
        padding: 10px;
    }

    .std {
        -webkit-text-decoration-line: underline;
        /* Safari */
        text-decoration-line: underline;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/psm" class="btn btn-outline-primary btn-sm">Go back</a>

            @foreach ($evaluator as $eva)
            <h1 class="display-one">{{ $eva->evaluator_name }}</h1>
            @endforeach
            <!-- <h1 class="display-one">{{ ucfirst($mPsm->id) }}</h1> -->

            <div class="std">
                <h2>Students List</h2>
            </div>

            <!-- FIRST STUDENT -->
            @if( !empty($std1->student_name))
            <h4>Student 1: {{ ucfirst($std1->student_name) }}</h4>
            @endif

            <!-- SECOND STUDENT -->
            @if( !empty($std2->student_name))
            <h4>Student 2: {{ ucfirst($std2->student_name) }}</h4>
            @endif

            <!-- THIRD STUDENT -->
            @if( !empty($std3->student_name))
            <h4>Student 3: {{ ucfirst($std3->student_name) }}</h4>
            @endif

            <hr>
            <a href="/psm/{{ $mPsm->id }}/editPsm" class="btn btn-outline-primary">Edit Post</a>
            <br><br>

            <!-- DELETE FORM -->
            <form id="delete-frm" class="" action="" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete Post</button>
            </form>
        </div>
    </div>
</div>
@endsection