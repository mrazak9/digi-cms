<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialMediaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //SocialMediaRequest
        return [
            'name' => 'required|string',
            'url' => 'required|string',
            'icon' => 'required|string',
            'order' => 'required|integer',
            'created_by' => 'exists:users,id',
            'updated_by' => 'exists:users,id',
        ];
    }
}
