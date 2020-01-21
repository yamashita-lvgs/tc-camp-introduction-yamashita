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
        $user = new User;
        $form = $request->all();
	unset($form['_token']);
	$user->timestamps = false;
	$user->fill($form)->save();
        return redirect('/users');
    }
}
