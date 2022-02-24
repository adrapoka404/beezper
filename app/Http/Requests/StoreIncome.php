<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIncome extends FormRequest
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
            'name'      => 'required|min:5|max:100',
            'status'    => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name'      => 'nombre del ingreso',
            'status'    => 'estaus'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Debe escribir una nomnre para el ingreso'
        ];
    }
}
