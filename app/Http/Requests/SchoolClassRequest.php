<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\SchoolClassRule;

class SchoolClassRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'        => ['bail', 'required', 'integer', 'between:6,9', new SchoolClassRule],
            'shift'       => ['required', 'string'],
            'schooling'   => ['required', 'string'],
            'room'        => ['required', 'string'],
            'school_year' => ['exists:school_years,year'],
        ];
    }
}
