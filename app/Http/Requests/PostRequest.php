<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:240',
            'description' => 'required|min:3|max:240',
            'content' => 'required|min:3',
            'cover' => 'file|max:1024|mimes:jpg,jpeg,bmp,png'
        ];
    }
}
