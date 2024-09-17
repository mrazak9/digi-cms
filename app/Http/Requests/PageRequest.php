<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
        //PageRequest
        return [
            'title' => 'required|string',
            'banner' => 'nullable',
            'content' => 'nullable|string',
            'image' => 'nullable',
            'is_show' => 'required',
            'type' => 'required|string',
            'seo_title' => 'nullable|string',
            'seo_meta_description' => 'nullable|string',
            'created_by' => 'exists:users,id',
            'updated_by' => 'exists:users,id',
        ];
    }
}
