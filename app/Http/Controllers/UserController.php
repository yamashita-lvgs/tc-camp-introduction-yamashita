<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

/**
 * @subpackage users
 * @package tc-ademin
 * @author yamashita-lgvs
 */
class UserController extends Controller
{
    /**
     * ユーザー一覧画面
     */
    public function index(): View
    {
	$users = User::all();
        return view('user.index', ['users' => $users]);
    }

    /**
     * ユーザー新規登録（情報入力）
     */
    public function showCreateScreen(Request $request): View
    {
        return view('user.create');
    }

    /**
     * ユーザー新規登録（情報登録処理）
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

