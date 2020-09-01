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
        $this->segment(2); // Pegando o id através da rota products/21/edit

        return [
            'name' => 'required|min:3|max:255|unique:products, name, {$id}, id',
            'description' => 'required|min:3|max:10000',
            'image' => 'nullable|image'
        ];
    }

    public function messages(){
        return [
            // Aqui dentro ficará todas as mensagens de validações
            'name.required' => 'O nome é obrigatório',
            'name.max' => 'O campo pode ter no máximo 255 caracteres',
            'name.min' => 'O campo tem que ter no mínimo 3 caracteres',
            'name.unique' => 'Já existe um produto com esse nome',
            'description.required' => 'A descrição é obrigatória',
            'image.required' => 'A foto é obrigatório',
            'price.required' => 'O preço é obrigatório',
            
        ];
    }
}
