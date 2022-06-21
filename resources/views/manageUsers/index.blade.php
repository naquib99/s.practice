@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Manage Users</h1>
                        <p>List of Users</p>
                    </div>
                    <div class="col-4">
                        <p>Create new Users</p>
                        <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">Add Users</a>
                    </div>
                </div>                
                @forelse($users as $user)
                @empty
                    <p class="text-warning">No Users available</p>
                @endforelse
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Supervisor</th>
                          <th scope="col">Evaluator</th>
                          <th scope="col">Address</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($users as $user)
                        
                            <tr>
                              <th scope="row">{{$user->id}}</th>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->phone}}</td>
                              <td>{{$user->supervisor_id}}</td>
                              <td>{{$user->evaluator_id}}</td>
                              <td>{{$user->address}}</td>
                              <td>
                                    <div class="btn-group">
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form id="delete-frm" class="" action="{{ route('user.destroy',$user->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class=" ml-2 btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                              </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection