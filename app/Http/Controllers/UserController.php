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
 * @package App\Http\Controllersr
 */
class UserController extends Controller
{
    /**
     * 一覧画面表示
     * @return View ユーザー一覧画面
     */
    public function index(): View
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

<<<<<<< HEAD
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
        return redirect()->to("/users");
=======
    /**
     * 新規登録画面表示
     * @return View             ユーザー新規登録画面
     */
    public function showCreateScreen(): View
    {
        return view('user.create');
    }

    /**
     * 新規登録処理実行
     * @param  UserRequest $request リクエスト情報
     * @return RedirectResponse     ユーザー編集画面リダイレクト
     */
    public function create(UserRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $user =DB::transaction(function () use ($validated)
        {
            $createUser = User::create($validated);
            return $createUser;
        });
        return redirect("/users/{$user->id}/edit")->with('message', 'ユーザー新規登録しました。');
    }

    /**
     * 編集画面表示
     * @param  UserRequest $request リクエスト情報
     * @return View                 ユーザー編集画面
     */
    public function showEditScreen(Request $request): View
    {
        $user =User::find($request->id);    
        return view('user.edit', ['user'=> $user]);
    }

    /**
     * 編集登録処理実行
     * @param  int $userId          ユーザーID
     * @param  UserRequest $request リクエスト情報
     * @throws ValidationException  バリデーションエラーが発生した場合
     * @return RedirectResponse     ユーザー編集画面リダイレクト
     */
    public function edit(UserRequest $request, int $userId): RedirectResponse
    {
        $validated = $request->validated();
        DB::transaction(function () use ($validated, $userId)
        {
            $user = User::find($userId)->fill($validated)->save();
        });
        return redirect("/users/{$userId}/edit")->with('message', 'ユーザー更新登録しました。');
>>>>>>> master
    }
}

