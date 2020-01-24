<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * ユーザーコントローラーの説明
 */
class UserController extends Controller
{
    /**
     * 一覧画面
     * @param  $users ユーザーに関する情報
     * @return View   ユーザー一覧画面
     */
    public function index(): View
    {
	$users = User::all();
        return view('user.index', ['users' => $users]);
    }

    /**
     * 新規登録画面
     * @param  $request  入力するユーザーの情報
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
}

