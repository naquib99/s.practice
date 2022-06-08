@extends('layouts.app')
@section('content')
<style>
    .time {
        margin: auto;
        width: auto;
        padding: 10px;
    }

    .right {
        margin: auto;
        width: auto;
        padding: 10px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <div class="row">
                <div class="col-8">
                    <h1 class="display-one">Manage PSM</h1>

                    <!-- CARNIVAL TIME -->
                    <div class="time">
                        @foreach ($timePsm as $tPsm)
                        <h2>PSM Time</h2>
                        <p>{{ $tPsm->start }} - {{ $tPsm->end }} <a href="./timePsm/{{ $tPsm->id }}"><button>Details</button></a> </p>
                        @endforeach
                    </div>

                    <!-- PSM TIME -->
                    <div class="time">
                        @foreach ($timeCarnival as $tCarnival)
                        <h2>Carnival Time</h2>
                        <p>{{ $tCarnival->start }} - {{ $tCarnival->end }} <a href="./timePsm/{{ $tCarnival->id }}"><button>Details</button></a> </p>
                        @endforeach
                    </div>

                    <!-- EVALUATOR LIST -->
                    <h2>Evaluator List</h2>
                    @forelse($mPsms as $mPsm)
                    <ul>
                        <li>{{ ucfirst($mPsm->evaluator_name) }}
                            - {{ ucfirst($mPsm->allocate) }} -
                            <a href="./psm/{{ $mPsm->id }}"><button>Details</button></a>
                        </li>
                    </ul>
                    @empty
                    <p class="text-warning">No Evaluators available</p>
                    @endforelse
                </div>

                <div class="col-4">
                    <div class="right">
                        <!-- CREATE TIME -->
                        <p>Add Time</p>
                        <a href="/psm/createTime/mPsm" class="btn btn-primary btn-sm">Add Time</a>
                    </div>

                    <div class="right">
                        <!-- CREATE NEW PSM MANAGEMENT -->
                        <p>Create new Evaluators</p>
                        <a href="/psm/createPsm/mPsm" class="btn btn-primary btn-sm">Add Evaluators</a>
                        <div class="right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection