<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class ValidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => "user name",
            'useremail' => "user Email",
            'userAge ' => "user City",
        ];
    }

    #[Override]
    protected function prepareForValidation(): void
    {
        $this->message([
            'username' => strtoupper($this->username),
            'useremail' => strtok($this->useremail),
        ]);
    }
}
