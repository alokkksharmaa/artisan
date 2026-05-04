<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'username' => 'required|string|min:5',
            'useremail' => 'required|email',
            'userage' => "required|numeric|min:18",
            'city' => "required"
        ];
    }
    public function mesage()
    {
        return [
            "username.required" => "user name is mandatory",
            "userid.required" => "user id is mandatory",

        ];
    }

    public function attributes() {
        return [
            'username' => "user name", 
            'useremail' => "user Email",
            'userAge ' => "user City",
        ];
    }
}