<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class CheckAge implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
        // app/Rules/CheckAge.php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckAge implements Rule
{
    public function passes($attribute, $value)
    {
        return $value >= 18;
    }

    public function message()
    {
        return "Age must be 18 or above";
    }
}
    }
}
