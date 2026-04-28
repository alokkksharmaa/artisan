<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'name' => 'required',

            'email' => 'required|email|unique:users,email',

            'password' => 'required|min:6',

        ];
    }

    public function messages()
    {
        return [

            'name.required' =>
                'User name is mandatory',

            'email.required' =>
                'Email is required',

            'email.email' =>
                'Enter valid email',

            'email.unique' =>
                'Email already exists',

            'password.required' =>
                'Password is required',



        ];
    }
}