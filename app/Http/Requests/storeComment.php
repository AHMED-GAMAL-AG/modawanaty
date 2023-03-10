<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeComment extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // i chanced it to true so i can add comments
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'body' => 'required',
        ];
    }
}
