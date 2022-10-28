<?php

namespace App\Http\Controllers;

use App\Http\Requests\Accesos\UserStore;
use App\Http\Requests\Accesos\UserUpdate;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('users.index', compact('users'));
    }

    public function show(User $user){
        return view('users.show', compact('user'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(UserStore $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('users.index');
    }

    public function edit(User $user){
        return view('users.edit', compact('user'));
    }

    public function update(UserUpdate $request, User $user){
        $user->name = $request->name;
        $user->email = $request->email;

        if(isset($request->password)){
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('users.index');
    }
}
