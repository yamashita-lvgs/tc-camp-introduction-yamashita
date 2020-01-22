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
        $user->fill($form)->save();
        return redirect()->to("/users/edit/{$user->id}")->with('message', 'ユーザー新規登録しました。');
    }

    public function edit(Request $request)
    {
        $user = User::find($request->id);
        return view('user.edit', ['form' => $user]);
    }

    public function update(Request $request)
    {
        $this->validate($request, User::$rules);
        $user = User::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();
        return redirect()->to("/users/edit/{$user->id}")->with('message', 'ユーザー更新登録しました。');
    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        return redirect()->to("/users")->with('message', 'ユーザー論理削除しました。');
    }

    public function physical_delete(Request $request)
    {
        User::find($request->id)->forceDelete();
	return redirect()->to('/users')->with('message', 'ユーザー物理削除しました。');
    }
}
