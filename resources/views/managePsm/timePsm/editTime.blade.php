@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/psm" class="btn btn-outline-primary btn-sm">Go back</a>
            </br></br>
            @if($tPsm->title =='psm')   
            <h1 class="display-one">PSM Time Set</h1>
            @else
            <h1 class="display-one">Carnival Time Set</h1>
            @endif

            <h2>{{ ucfirst($tPsm->start) }} - {{ ucfirst($tPsm->end) }}</h2>
        </div>
    </div>
</div>
@endsection