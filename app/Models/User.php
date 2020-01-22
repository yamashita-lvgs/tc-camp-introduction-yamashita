<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
  use SoftDeletes;
	protected $table = 'users';
	protected $fillable = ['name', 'email' ];
	protected $dates = ['deleted_at'];
	/* 新規登録と編集登録バリデーションルール*/
        public static $rules =array(
        'name'  => 'required|between:2,20',
        'email' => 'required|between:5,50',
);

}
