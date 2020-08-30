<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeProductsRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'description' => 'nullable|min:3|max:1000',
            'foto' => 'required|image'
        ];
    }

    public function messages(){
        return [
            // Aqui dentro ficará todas as mensagens de validações
            'name.required' => 'O nome é obrigatório',
            'name.max' => 'O campo pode ter no máximo 255 caracteres',
            'name.min' => 'O campo tem que ter no mínimo 3 caracteres',
            'description.required' => 'A descrição é obrigatória',
            'foto.required' => 'A foto é obrigatório'
        ];
    }
}
