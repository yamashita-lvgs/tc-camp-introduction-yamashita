<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }
    public function add(Request $request)
    {
        return view('user.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, User::$rules);
        $user = new User;
        $form = $request->all();
	    unset($form['_token']);
	    $user->timestamps = false;
	    $user->fill($form)->save();
	    return redirect('/users');
    }

    public function edit(Request $request)
    {
        $user =User::find($request->id);
        return view('user.edit', ['form'=> $user]);
    }

    public function update(Request $request)
    {
        $this->validate($request, User::$rules);
        $user = User::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();
        return redirect('/users');
    }
}
