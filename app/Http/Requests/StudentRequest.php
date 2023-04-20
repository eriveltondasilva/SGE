<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name'            => 'required|string|max:100',
            'email'           => 'email|nullable',
            'rg'              => 'string|nullable|max:9',
            'cpf'             => 'string|nullable|max:14',
            'telephone'       => 'string|nullable',
            'nationality'     => 'string|nullable',
            'birth_date'      => 'date|nullable',
            'birth_place'     => 'string|nullable|max:50',
            'gender'          => 'string|nullable|max:1',
            'gov_benefits'    => 'string|nullable',
            'health_problems' => 'string|nullable',
            'note'            => 'string|nullable',
        ];
    }
}
