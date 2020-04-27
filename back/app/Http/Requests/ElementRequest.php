<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'link' => ['required'],
            'title' => ['required'],
            'year' => ['required','numeric'],
            'description' => ['required'],
            'category_id' => ['required','numeric'],
            'jobtype_id' => ['required','numeric'],
        ];
    }
}
