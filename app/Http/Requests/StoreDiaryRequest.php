<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Diary;

class StoreDiaryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()  {
        return [
            'paciente_id' => [
                'numeric',
                'required',
                'exists:pacientes,id'
            ],
            'doctor_id' => [
                'numeric',
                'required',
                'exists:doctors,id'
            ],
            'date' => [
                'date',
                'required',
                function ($attribute, $value, $fail) {
                    if (Diary::where([ 'doctors_id' => request()->doctor_id, 'date' => $value])->count()) {
                        $fail('Atenção! O médico já possui este horário agendado' );
                    }
                }
            ],
            'observations' => [
                'nullable',
                'string'
            ],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Digite o nome',
            'name.string'   => 'Informe um nome válido',
            'especialidade.required' => 'Digite a especialidade',
            'especialidade.string' => 'Informe uma especialidade válida',
            'crm.required' => 'Informe o CRM',
            'crm.numeric' => 'CRM deve conter apenas números'
        ];
    }
}
