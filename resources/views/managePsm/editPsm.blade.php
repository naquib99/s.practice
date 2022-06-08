@extends('layouts.app')

@section('content')

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
                            <label for="title">Evaluator's Name</label>
                            <input type="text" id="evaluator_name" class="form-control" name="evaluator_name" 
                            placeholder="Evaluator's Name" value="{{ $evaluator->evaluator_name }}" disabled>
                        </div>

                        <!-- STUDENT SELECTION -->
                        <select style="width:100%" class="dropdown" required>
                            @foreach ($students as $std)
                            <option value="{{ $std->student_id }}">
                                {{ $std->student_id }}-{{ $std->student_name }}
                            </option>
                            @endforeach
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