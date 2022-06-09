@extends('layouts.app')

@section('content')

<style>
    .main {
        padding-top: 10px;
    }
</style>


<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/psm" class="btn btn-outline-primary btn-sm">Go back</a>
            <div class="rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                <h1 class="display-4">Edit Evaluator's Students</h1>
                <p>Edit and submit this form to update an evaluator's students</p>

                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="control-group col-12">
                            <!-- EVALUATOR'S ID -->
                            <label for="title">Evaluator's ID</label>
                            <input type="text" class="form-control" id="evaluator_id" name="evaluator_id"  placeholder="Evaluator's ID" value="{{ $mPsm->evaluator_id }}">

                            <!-- EVALUATOR'S NAME -->
                            <label for="title">Evaluator's Name</label>
                            <input type="text" class="form-control" placeholder="Evaluator's Name" value="{{ $mPsm->evaluator_name }}" disabled>
                        </div>

                        <!-- STUDENT SELECTION -->
                        <!-- STUDENT 1 -->
                        <label class="main" for="Student 1's ID">Student 1's ID</label>
                        <select style="width:100%" class="dropdown" id="std_id1" name="std_id1">
                            @foreach ($student as $std)
                            @if ($loop->first)
                            @if( !empty($std1->student_id))
                            <option value="{{$std1->student_id}}" selected>
                                {{$std1->student_name}} ({{$std1->student_id}})
                                @else
                            <option value="{{$std->student_id}}">
                                {{$std->student_name}} ({{$std->student_id}})
                                @endif
                                @else
                            <option value="{{$std->student_id}}">
                                {{$std->student_name}} ({{$std->student_id}})
                                @endif
                            </option>
                            @endforeach
                        </select>

                        <!-- STUDENT 2 -->
                        <label class="main" for="Student 2's ID">Student 2's ID</label>
                        <select style="width:100%" class="dropdown" id="std_id2" name="std_id2">
                            @foreach ($student as $std)
                            @if ($loop->first)
                            @if( !empty($std2->student_id))
                            <option value="{{$std2->student_id}}" selected>
                                {{$std2->student_name}} ({{$std2->student_id}})
                                @else
                            <option value="{{$std->student_id}}">
                                {{$std->student_name}} ({{$std->student_id}})
                                @endif
                                @else
                            <option value="{{$std->student_id}}">
                                {{$std->student_name}} ({{$std->student_id}})
                                @endif
                            </option>
                            @endforeach
                        </select>

                        <!-- STUDENT 3 -->
                        <label class="main" for="Student 3's ID">Student 3's ID</label>
                        <select style="width:100%" class="dropdown" id="std_id3" name="std_id3">
                            @foreach ($student as $std)
                            @if ($loop->first)
                            @if( !empty($std3->student_id))
                            <option value="{{$std3->student_id}}" selected>
                                {{$std3->student_name}} ({{$std3->student_id}})
                                @else
                            <option value="{{$std->student_id}}">
                                {{$std->student_name}} ({{$std->student_id}})
                                @endif
                                @else
                            <option value="{{$std->student_id}}">
                                {{$std->student_name}} ({{$std->student_id}})
                                @endif
                            </option>
                            @endforeach
                        </select>

                        <!-- ALLOCATION -->
                        <label class="main" for="Allocation Student">Allocation Student</label>
                        <select style="width:100%" class="dropdown" id="allocate" name="allocate">
                            <option value="{{$mPsm->allocate}}" selected>
                                {{$mPsm->allocate}}
                            </option>
                            @if( $mPsm->allocate == 'Allocated')
                            <option value="Not Allocated">Not Allocated</option>
                            @else
                            <option value="Allocated">Allocated</option>
                            @endif
                        </select>

                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button id="btn-submit" class="btn btn-primary">
                                Update Post
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection