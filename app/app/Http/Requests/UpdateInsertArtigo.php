<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInsertArtigo extends FormRequest
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
            'title' => 'required|min:3|max:160',
            'resumo' => ["required", "min:10", "max: 1000"],
            'content' => ['required', 'min:20', 'max: 2000']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O campo title não pode ser vazio',
            'resumo.required' => 'O campo resumo não pode ser vazio',
            'content.required' => 'O campo content não pode ser vazio'
        ];
    }
}
