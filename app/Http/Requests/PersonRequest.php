<?php

namespace App\Http\Requests;

use App\Models\Student;
// use App\Models\Relative;
use App\Models\Teacher;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'name' => ['required', 'string', 'between:4,100'],
            'rg'   => ['string', 'nullable', 'size:9'],
            'cpf'  => ['string', 'nullable', 'size:14'],

            // Validação de email do aluno e do professor'
            'email' => [
                'bail', 'email', 'nullable', 'max:100',

                Rule::when(request()->routeIs('student.*'), [
                    Rule::unique(Student::class)->ignore($this->student->id ?? '')
                ]),
                Rule::when(request()->routeIs('teacher.*'), [
                    Rule::unique(Teacher::class)->ignore($this->teacher->id ?? '')
                ]),
            ],

            'telephone'   => ['string', 'nullable', 'size:16'],
            'birth_date'  => ['date', 'nullable', 'before:today'],
            'nationality' => ['string', 'nullable'],
            'gender'      => [Rule::in(['F', 'M'])],


            // dados específicos do aluno
            'birth_place'     => ['sometimes', 'string', 'nullable'],
            'gov_benefits'    => ['sometimes', 'string', 'nullable'],
            'health_problems' => ['sometimes', 'string', 'nullable'],
            'note'            => ['sometimes', 'string', 'nullable'],


            // dados do responsável pelo aluno
            'relative.name'  => ['string', 'nullable', 'between:4,100'],
            'relative.email' => ['bail', 'email', 'nullable', 'max:100',
                // TODO: validar o email do responsável
                // Rule::unique(Relative::class)->ignore($this->relative->id ?? '')
            ],
            'relative.telephone' => ['string', 'nullable', 'size:16'],
            'relative.kinship'   => ['string', 'nullable'],


            // dados do endereço do aluno e do professor
            'address.street'       => ['string', 'nullable'],
            'address.complement'   => ['string', 'nullable'],
            'address.neighborhood' => ['string', 'nullable'],
            'address.city'         => ['string', 'nullable'],
            'address.cep'          => ['string', 'nullable'],
            'address.state'        => ['string', 'nullable'],
        ];
    }

}
