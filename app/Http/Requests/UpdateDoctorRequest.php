<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()  {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()   {
        return [
            'nome'     => [
                'string',
                'required',
            ],
            'especialidade'    => [
                'string',
                'required',
            ],
            'crm' => [
                'numeric',
                'required'
            ]
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array  {
        return [
            'nome.required' => 'Digite o nome',
            'nome.string'   => 'Informe um nome válido',
            'especialidade.required' => 'Digite a especialidade',
            'especialidade.string' => 'Informe uma especialidade médica válida',
            'crm.required' => 'Informe o CRM',
            'crm.numeric' => 'CRM deve conter apenas números'
        ];
    }
}
