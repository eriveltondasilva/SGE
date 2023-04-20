<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'street'       => 'string|nullable|max:255',
            'complement'   => 'string|nullable|max:255',
            'neighborhood' => 'string|nullable|max:255',
            'city'         => 'string|nullable|max:255',
            'cep'          => 'string|nullable',
            'state'        => 'string|nullable',
        ];
    }
}
