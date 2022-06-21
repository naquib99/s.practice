<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class manageUserController extends Controller
{
    public function index()
    {
        $data['users'] = User::where('id', '!=', 1)->latest()->get();

        return view('manageUsers.index', $data);
    }

    public function create()
    {
        return view('manageUsers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required | string',
            'supervisor_id'     => 'required | string',
            'evaluator_id'     => 'required | string',
            'email'    => 'required | email|unique:users',
            'password' => 'required | confirmed | min:6',
            'address'     => 'required',
            'phone' => 'required'
        ]);

        DB::beginTransaction();
        try {
            $user           = new User();
            $user->name     = $request->name;
            $user->email    = $request->email;
            $user->supervisor_id    = $request->supervisor_id;
            $user->evaluator_id    = $request->evaluator_id;
            $user->password = Hash::make($request->password);
            $user->address     = $request->address;
            $user->phone     = $request->phone;
            $user->save();

            DB::commit();
            toastr()->success(__('New User created successfully'));

            return redirect()->route('user.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function edit($user)
    {
        $data['user'] = User::findOrFail($user);

        return view('manageUsers.edit', $data);
    }

    public function update(Request $request, $user)
    {
        $request->validate([
            'name'     => 'required | string',
            'supervisor_id'     => 'required | string',
            'evaluator_id'     => 'required | string',
            'email'    => 'required | email',
            'address'     => 'required',
            'phone' => 'required'
        ]);

        try {
            $user = User::findOrFail($user);
            $user->name  = $request->name;
            $user->email = $request->email;
            $user->supervisor_id    = $request->supervisor_id;
            $user->evaluator_id    = $request->evaluator_id;
            $user->address = $request->address;
            $user->phone = $request->phone;

            $user->save();

            toastr()->success(__('User updated successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password'         => 'required | confirmed | min:6',
        ]);

        if (!Hash::check($request->current_password, auth()->user()->password)) {
            toastr()->error(__('Wrong Current Password!'));

            return redirect()->back();
        }

        try {
            $user           = User::findOrFail(auth()->user()->id);
            $user->password = Hash::make($request->password);
            $user->save();

            toastr()->success(__('Password successfully updated'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function destroy($user)
    {
        try {
            $data = User::findOrFail($user);
            $data->delete();

            toastr()->success(__('User deleted successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }
}
