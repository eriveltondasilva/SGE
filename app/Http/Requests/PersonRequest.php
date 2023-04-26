<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            // dados pessoais do aluno e do professor
            'name'        => 'bail|required|string|between:4,100',
            'rg'          => 'string|nullable|size:9',
            'cpf'         => 'string|nullable|size:14',
            'email'       => 'email|nullable|max:100',
            'telephone'   => 'string|nullable|size:16',
            'birth_date'  => 'date|nullable',
            'nationality' => 'string|nullable',
            'gender'      => 'string|nullable|max:1',

            // dados específicos do aluno
            'birth_place'     => 'sometimes|string|nullable',
            'gov_benefits'    => 'sometimes|string|nullable',
            'health_problems' => 'sometimes|string|nullable',
            'note'            => 'sometimes|string|nullable',

            // dados do responsável pelo aluno
            'relative.name'      => 'string|nullable|between:4,100',
            'relative.email'     => 'email|nullable|max:100',
            'relative.telephone' => 'string|nullable|size:16',
            'relative.kinship'   => 'string|nullable',

            // dados do endereço do aluno e do professor
            'address.street'       => 'string|nullable|max:255',
            'address.complement'   => 'string|nullable|max:255',
            'address.neighborhood' => 'string|nullable',
            'address.city'         => 'string|nullable',
            'address.cep'          => 'string|nullable',
            'address.state'        => 'string|nullable',

        ];
    }
}
