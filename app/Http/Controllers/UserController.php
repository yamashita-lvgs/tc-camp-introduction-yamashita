<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * ユーザーに関するコントローラークラス
 */
class UserController extends Controller
{
    /**
     * 一覧画面表示
     * @param  $users ユーザーに関する情報
     * @return View   ユーザー一覧画面
     */
    public function index(): View
    {
	$users = User::all();
        return view('user.index', ['users' => $users]);
    }

    /**
     * 新規登録画面表示
     * @param  $request  リクエスト情報
     * @return View   ユーザー新規登録画面
     */
    public function showCreateScreen(Request $request): View
    {
        return view('user.create');
    }

    /**
     * ユーザー情報登録処理
     * @param  $request  入力されたユーザー情報
     * @return View   ユーザー一覧画面
     */
    public function create(Request $request): RedirectResponse
    {
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect('/users');
    }

    /**
     * ユーザー情報編集画面表示
     * @param  $request  登録されていたユーザー情報
     * @param  $user  ユーザー情報
     * @return View   ユーザー編集画面
     */
    public function showEditScreen(Request $request): View
    {
        $user =User::find($request->id);
        return view('user.edit', ['form'=> $user]);
    }

    /**
     * ユーザー情報編集画面表示
     * @param  $request  登録されていたユーザー情報
     * @param  $this
     * @return View   ユーザー一覧画面
     */
    public function edit(Request $request): RedirectResponse
    {
        $this->validate($request, User::$rules);
        $user = User::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();
        return redirect('/users');
    }
}
aaaaaa
