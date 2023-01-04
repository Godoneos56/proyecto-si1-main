<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
    public function rules()
    {
        return [
            'ci' => 'required|numeric|digits:7',
            'nombre'=>'required|max:20',
            'apellido_p'=>'required|max:20',
            'apellido_m'=>'required|max:20',
            'telefono'=>'numeric|digits:8'
        ];
    }
}
