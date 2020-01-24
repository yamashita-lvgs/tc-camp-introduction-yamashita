<?php

namespace App\Http\Middleware;

use illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserValidate
{
    /*
     * ユーザー情報の入力項目に対してのバリデーションルール
     */
    public static $rules =array(
        'name'  => 'required|between:2,20',
        'email' => 'required|between:5,50',
    );
}
