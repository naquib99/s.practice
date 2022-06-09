@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/psm" class="btn btn-outline-primary btn-sm">Go back</a>
            </br></br>

            <form action="/timePsm/{{$tPsm->time_id}}/editPsm" method="POST">
                @csrf
                @method('PUT')
                <!-- HIDDEN -->
                <input name="time_id" id="time_id" class="form-control form-control-sm" value="{{ ucfirst($tPsm->time_id) }}" hidden></input>
                <input name="title" id="title" class="form-control form-control-sm" value="{{ ucfirst($tPsm->title) }}" hidden></input>

                <!-- TITLE -->
                @if($tPsm->title =='psm')
                <h1 class="display-one">PSM Time Set</h1>
                @else
                <h1 class="display-one">Carnival Time Set</h1>
                @endif

                <!-- EDIT TIME -->
                <label for="Time Start">Time Start</label>
                <input name="start" id="start" class="form-control form-control-sm" value="{{ ucfirst($tPsm->start) }}"></input>

                <label for="Time End">Time End</label>
                <input name="end" id="end" class="form-control form-control-sm" value="{{ ucfirst($tPsm->end) }}"></input>
                </h2>

                <div class="row mt-2">
                    <div class="control-group col-12 text-center">
                        <button id="btn-submit" class="btn btn-primary">
                            Update Post
                        </button>
                    </div>
                </div>
            </form>

            <!-- DELETE FORM -->
            <form id="delete-frm" class="" action="" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Do you really want to delete?');">Delete Time</button>
            </form>

        </div>
    </div>
</div>
@endsection