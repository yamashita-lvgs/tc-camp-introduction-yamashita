<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'users';
	protected $fillable = ['name', 'email'];

    /* 新規登録バリデーションルール*/
    public static $rules =array(
        'user.name'  => ['required|between:2,20'],
        'user.email' => ['required|between:5,50'],
    );
}
