<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequest;
use App\Rules\CheckAge;
use App\Rules\Uppercase;
use Closure;

class userController extends Controller
{
    public function adduser(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:5',
            'useremail' => 'required|email',
            'userage' => "required|numeric|min:18",
            'city' => "required"
        ]);

        // using closure()
        $validate = $request->validate(
            [
                'username' => [
                    'required',
                    function (string $attribute, mixed $value, Closure $fail) {
                        if (strtoupper($value) != $value) {
                            $fail("The {$attribute} must be uppercase");
                        }
                    }
                ],
                'useremail' => "required |  email",
            ]
        );
        dd($validate);
    }
}
