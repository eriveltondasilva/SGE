<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'rg'                   => 'string|nullable|max:9',
            'cpf'                  => 'string|nullable|max:14',
            'email'                => 'email|nullable',
            'telephone'            => 'string|nullable|max:16',
            'birth_date'           => 'date|nullable',
            'gender'               => 'string|nullable|max:1',
            // 'address_street'       => 'string|nullable|max:255',
            // 'address_number'       => 'string|nullable|max:255',
            // 'address_complement'   => 'string|nullable|max:255',
            // 'address_neighborhood' => 'string|nullable|max:255',
            // 'address_city'         => 'string|nullable|max:255',
            // 'address_cep'          => 'string|nullable|max:9',
            // 'address_state'        => 'string|nullable',
            'nationality'          => 'string|nullable',
        ];
    }
}
