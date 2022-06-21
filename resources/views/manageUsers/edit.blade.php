@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="{{ route('user.index') }}" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="rounded pl-4 pr-4 pt-4 pb-4">
                    <h3>Edit User</h3>
                    <p>Edit and submit this form to update a user basic information</p>

                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="control-group col-8">
                                <label for="name">Full Name<small class="text-danger"> *</small></label>
                                <input type="text" id="name" value="{{isset($user) ? $user->name : NULL}}" class="form-control" name="name"
                                       placeholder="Enter Full Name" required>
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="control-group col-8">
                                <label for="email">Email<small class="text-danger"> *</small></label>
                                <input type="text" id="email" value="{{isset($user) ? $user->email : NULL}}" class="form-control" name="email"
                                       placeholder="Enter Email" required>
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="control-group col-8">
                                <label for="phone">Phone<small class="text-danger"> *</small></label>
                                <input type="text" id="phone" value="{{isset($user) ? $user->phone : NULL}}" class="form-control" name="phone"
                                       placeholder="Enter Phone Number" required>
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="control-group col-8 mt-2">
                                <label for="address">Address<small class="text-danger"> *</small></label>
                                <textarea id="address" class="form-control" rows="2" name="address" placeholder="Enter Address" required>{{isset($user) ? $user->address : NULL}}</textarea>
                                @error('address')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="control-group col-8">
                                <label for="supervisor_id">Supervisor<small class="text-danger"> *</small></label>
                                <input type="text" id="supervisor_id" value="{{isset($user) ? $user->supervisor_id : NULL}}" class="form-control" name="supervisor_id"
                                       placeholder="Enter Supervisor ID" required>
                                @error('supervisor_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="control-group col-8">
                                <label for="evaluator_id">Evaluator<small class="text-danger"> *</small></label>
                                <input type="text" id="evaluator_id" value="{{isset($user) ? $user->evaluator_id : NULL}}" class="form-control" name="evaluator_id"
                                       placeholder="Enter Evaluator ID" required>
                                @error('evaluator_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-8 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update User Info 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="rounded pl-4 pr-4 pt-4 pb-4">
                    <h3>Edit User</h3>
                    <p>Upadte User Password</p>

                    <form action="{{ route('user.updatePass', $user->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="control-group col-8">
                                <label for="current_password">Old Passowrd<small class="text-danger"> *</small></label>
                                <input type="password" id="current_password" class="form-control" name="current_password"
                                       placeholder="Enter Passowrd" required>
                                @error('current_password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="control-group col-8">
                                <label for="password">New Passowrd<small class="text-danger"> *</small></label>
                                <input type="password" id="password" class="form-control" name="password"
                                       placeholder="Re-enter Passowrd" required>
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-8 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection