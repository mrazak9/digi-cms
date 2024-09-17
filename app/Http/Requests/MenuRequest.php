<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
        //MenuRequest
        return [
            'menu_name' => 'required|string',
            'slug_page' => 'nullable|string',
            'menu_status' => 'required|string',
            'sequence' => 'nullable|integer',
            'main_menu' => 'nullable|integer',
        ];
    }
}
