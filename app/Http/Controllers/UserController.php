<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
     * @param  $request   リクエスト情報
     * @param  $validated バリデーションの確認した値
     * @return View       ユーザー一覧画面リダイレクト
     */
    public function create(UserRequest $request): RedirectResponse
    {
	    $validated = $request->validated();
        $user =DB::transaction(function () use ($validated){
		$createUser = User::create($validated);
	return $createUser;
	});
        return redirect()->to("/users/{$user->id}/edit}")->with('message', 'ユーザー新規登録しました。');
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
     * @param  $request   リクエスト情報
     * @param  $validated バリデーションの確認した値
     * @return View       ユーザー一覧画面
     */
    public function edit(UserRequest $request): RedirectResponse
    {
        $validated = $request->validated();
	DB::transaction(function () use ($request, $validated)
	{
            $user = User::find($request->id);
            $user->fill($validated)->save();
        });
        return redirect()->to("/users/{$request->id}/edit/")->with('message', 'ユーザー更新登録しました。');
    }
}

