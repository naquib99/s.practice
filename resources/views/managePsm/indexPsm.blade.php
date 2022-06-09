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

    .evaluator{
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
                        <h2>PSM Time</h2>
                        @if(!empty($timePsm->id))
                        <p>{{ $timePsm->start }} - {{ $timePsm->end }} <a href="./timePsm/{{ $timePsm->id }}"><button>Details</button></a> </p>
                        @endif
                    </div>

                    <!-- PSM TIME -->
                    <div class="time">
                        <h2>Carnival Time</h2>
                        @if(!empty($timeCarnival->id))
                        <p>{{ $timeCarnival->start }} - {{ $timeCarnival->end }} <a href="./timePsm/{{ $timeCarnival->id }}"><button>Details</button></a> </p>
                        @endif
                    </div>

                    <!-- EVALUATOR LIST -->
                    <h2>Evaluator List</h2>
                    <ol>

                        @forelse($mPsms as $mPsm)
                        <li class="evaluator">{{ ucfirst($mPsm->evaluator_name) }} ({{($mPsm->evaluator_id) }})
                            - {{ ucfirst($mPsm->allocate) }} -
                            <a href="./psm/{{ $mPsm->id }}"><button>Details</button></a>
                        </li>
                        @empty

                    </ol>
                    <p class="text-warning">No Evaluators available</p>
                    @endforelse
                </div>

                <div class="col-4">
                    <div class="right">
                        <!-- CREATE NEW PSM MANAGEMENT -->
                        <p>Create new Evaluators</p>
                        <a href="/psm/createPsm/mPsm" class="btn btn-primary btn-sm">Add Evaluators</a>
                        <div class="right">
                        </div>
                    </div>

                    <div class="right">
                        @if(empty($timeCarnival->id) || empty($timePsm->id))
                        <!-- CREATE TIME -->
                        <p>Add Time</p>
                        <a href="/timePsm/createTime" class="btn btn-primary btn-sm">Add Time</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endsection