<?php

namespace App\Rules;

use Closure;
use App\Models\SchoolClass;
use Illuminate\Contracts\Validation\ValidationRule;

class SchoolClassRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $school_year = request()->school_year;
        $school_class = SchoolClass::where('name', $value)->where('school_year', $school_year)->count();
        if ($school_class) {
            $fail('teste teste teste teste');
        }
    }
}
