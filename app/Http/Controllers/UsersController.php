<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', [
            'users' => $users
        ]);
    }

    public function show($id){
        $user = User::find($id);
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email|min:5|unique:users,email',
            'password' => 'required|string|min:5',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('users.index');
    }

    public function edit($id){
        $user = User::find($id);
        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email|min:5|unique:users,email,'.$id,
            'password' => 'nullable|string|min:5',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if(isset($request->password)){
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('users.index');
    }
}
