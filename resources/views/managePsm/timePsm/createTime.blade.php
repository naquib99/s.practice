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
            </br></br>

            <form action="/timePsm/createTime/mPsm" method="POST">
                @csrf
                <label class="main" for="Time ID">Time ID</label>
                <input name="time_id" id="time_id" class="form-control form-control-sm" value="1"></input>

                <label class="main" for="Time Title">Time Title</label>
                <select style="width:100%" class="dropdown" id="title" name="title">
                    <option value="psm">
                        psm
                    </option>
                    <option value="carnival">
                        carnival
                    </option>
                </select>

                <!-- EDIT TIME -->
                <label class="main" for="Time Start">Time Start</label>
                <input name="start" id="start" class="form-control form-control-sm" value="2022-06-09 15:30:00"></input>

                <label class="main" for="Time End">Time End</label>
                <input name="end" id="end" class="form-control form-control-sm" value="2022-06-09 15:30:00"></input>
                </h2>

                <div class="row mt-2">
                    <div class="control-group col-12 text-center">
                        <button id="btn-submit" class="btn btn-primary">
                            Create Time
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