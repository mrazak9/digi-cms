<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
        //SliderRequest
        return [
            'title' => 'required|string',
            'text' => 'required|string',
            'button_text' => 'nullable|string',
            'button_url' => 'nullable|string',
            'slider_photo' => 'required',
            'created_by' => 'exists:users,id',
            'updated_by' => 'exists:users,id',
        ];
    }
}
