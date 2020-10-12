<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
           'title'       => 'required|min:5',
           'description' => 'required',
           'content'     => 'required',
           'slug'        => 'required',
           'thumb'       => 'required|image',
           'categories'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este campo é obrigatório',
            'min'      => 'Sua descricação deve ter pelo menos :min caracteres',
            'image'    => 'Imagem inválida'
        ];
    }
}
