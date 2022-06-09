@extends('layouts.app')

@section('content')

<style>
    .main{
        padding-top: 10px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/psm" class="btn btn-outline-primary btn-sm">Go back</a>
            <div class="rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                <h1 class="display-4">Input a Supervisor</h1>
                <p>Fill and submit this form to input a new supervisor</p>

                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="Evaluator's ID">Evaluator's ID</label>

                            <select style="width:100%" class="dropdown" id="evaluator_id" name="evaluator_id" required>
                                @foreach ($evaluator as $eva)
                                <option value="{{$eva->evaluator_id}}">
                                    {{$eva->evaluator_name}} ({{$eva->evaluator_id}})
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="control-group col-12 mt-2">
                        <!-- STUDENT 1 -->
                        <label class="main" for="Student 1's ID">Student 1's ID</label>
                        <select style="width:100%" class="dropdown" id="std_id1" name="std_id1">
                            @foreach ($student as $std)
                            <option value="{{$std->student_id}}">
                                {{$std->student_name}} ({{$std->student_id}})
                            </option>
                            @endforeach
                        </select>

                        <!-- STUDENT 2 -->
                        <label class="main" for="Student 2's ID">Student 2's ID</label>
                        <select style="width:100%" class="dropdown" id="std_id2" name="std_id2">
                            @foreach ($student as $std)
                            <option value="{{$std->student_id}}">
                                {{$std->student_name}} ({{$std->student_id}})
                            </option>
                            @endforeach
                        </select>

                        <!-- STUDENT 3 -->
                        <label class="main" for="Student 3's ID">Student 3's ID</label>
                        <select style="width:100%" class="dropdown" id="std_id3" name="std_id3">
                            @foreach ($student as $std)
                            <option value="{{$std->student_id}}">
                                {{$std->student_name}} ({{$std->student_id}})
                            </option>
                            @endforeach
                        </select>

                        <!-- ALLOCATION -->
                        <label class="main" for="Allocation Student">Allocation Student</label>
                        <select style="width:100%" class="dropdown" id="allocate" name="allocate">
                            <option value="Allocated">Allocated</option>
                            <option value="Not Allocated">Not Allocated</option>
                        </select>
                    </div>

                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button id="btn-submit" class="btn btn-primary">
                                Create New
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection