<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|max:100|min:3',
            'image' => 'required|max:255|min:10',
            'type' => 'required|max:100|min:3',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Campo obbligatorio',
            'title.max' => 'Può contenere massimo :max caratteri',
            'title.min' => 'Deve contenere minimo :min caratteri',
            'image.required' => 'Campo obbligatorio',
            'image.max' => 'Può contenere massimo :max caratteri',
            'image.min' => 'Deve contenere minimo :min caratteri',
            'type.required' => 'Campo obbligatorio',
            'type.max' => 'Può contenere massimo :max caratteri',
            'type.min' => 'Deve contenere minimo :min caratteri',
        ];
    }
}
