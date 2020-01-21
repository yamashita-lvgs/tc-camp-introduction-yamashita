<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'users';
	protected $fillable = ['name', 'email'];

    /* 新規登録バリデーションルール*/
    public static $rules =array(
        'name'  => 'required|between:2,20',
        'email' => 'required|between:5,50',
    );
}
