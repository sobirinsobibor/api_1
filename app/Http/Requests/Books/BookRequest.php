<?php

namespace App\Http\Requests\Books;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required',
            'price' => 'required',
            'id_author' => 'required',
            'id_book_category' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Please fill the title.',
            'price.required' => 'Please fill the price.',
            'author.required' => 'Please fill the id_user.',
            'editor.required' => 'Please fill the id_book_category.',
        ];
    }

}
