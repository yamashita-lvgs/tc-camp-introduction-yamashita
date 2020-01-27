<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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
     * @param  $request リクエスト情報
     * @return View     ユーザー新規登録画面
     */
    public function showCreateScreen(Request $request): View
    {
        return view('user.create');
    }

    /**
     * 新規登録処理実行
     * @param  $request リクエスト情報
     * @return View     ユーザー一覧画面リダイレクト
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
     * 編集画面表示
     * @param  $request リクエスト情報
     * @param  $user    ユーザーに関する情報
     * @return View     ユーザー編集画面
     */
    public function showEditScreen(Request $request): View
    {
        $user =User::find($request->id);
        return view('user.edit', ['form'=> $user]);
    }

    /**
     * 編集登録処理実行
     * @param  $request リクエスト情報
     * @param  $user    ユーザーに関する情報
     * @return View     ユーザー一覧画面
     */
    public function edit(Request $request): RedirectResponse
    {
        $user = User::find($request->id);
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'created_at' => now(),
            'updated_at' => now()
         ]);
        return redirect('/users');
    }
}
