@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Manage PSM</h1>
                        <p>List of Evaluators</p>
                    </div>
                    <div class="col-4">
                        <p>Create new Evaluators</p>
                        <a href="/psm/createPsm/post" class="btn btn-primary btn-sm">Add Evaluators</a>
                    </div>
                </div>                
                @forelse($posts as $post)
                    <ul>
                        <li><a href="./psm/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Evaluators available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection