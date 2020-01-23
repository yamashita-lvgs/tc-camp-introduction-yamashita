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
	User::insert([
	    'name' => $request->name,
	    'email' => $request->email,
   	    'created_at' => now(),
   	    'updated_at' => now()
    	]);    
	return redirect('/users');
    }
}
