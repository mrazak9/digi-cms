<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FooterColumnRequest extends FormRequest
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
        //FooterColumnRequest
        return [
            'text' => 'required|string',
            'url' => 'required|string',
            'order' => 'required|integer',
            'column_name' => 'required|string',
            'created_by' => 'exists:users,id',
            'updated_by' => 'exists:users,id',
        ];
    }
}
