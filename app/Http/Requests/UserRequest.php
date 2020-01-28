<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'  => 'required|between:2,20',
            'mail' => 'required|between:5,50',
        ];
    }
}

