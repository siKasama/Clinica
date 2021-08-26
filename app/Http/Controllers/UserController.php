<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    // public function index(User $model)
    // {
    //     return view('users.index', ['users' => $model->paginate(15)]);
    // }
    public function index(Request $request)  {

        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create(Request $request, User $user)   {
        $types = [0 => 'Usuário', 1 => 'Admin'];

        return view('users.create', compact('types'));
    }

    public function store(UserRequest $request)  {
        $user = User::create($request->validated());

        return redirect()->route('users.index');
    }

    public function show(Request $request, $id)   {
        if ($request->user()->id != $id)
            return redirect()->route('dashboard');

        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }


    public function edit(Request $request, $id)   {

        if ($request->user()->id != $id)
            return redirect()->route('dashboard');

        $user = User::findOrFail($id);

        $types = [0 => 'Usuário', 1 => 'Admin'];
        return view('users.edit', compact('user', 'types'));
    }


    public function update(UpdateUserRequest $request, User $user)   {
        $user->update(array_filter($request->validated()));
        return redirect()->route('users.index');
    }


    public function destroy(User $user)   {
        $user->delete();
        return redirect()->route('users.index');
    }

}
