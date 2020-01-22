<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'users';
	protected $fillable = ['name', 'email' ];
/*       protected $guarded = ['created_at', 'updated_at'];
    /* 新規登録と編集登録バリデーションルール*/
    public static $rules =array(
        'name'  => 'required|between:2,20',
        'email' => 'required|between:5,50',
    );
}
