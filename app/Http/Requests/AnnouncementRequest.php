<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
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
        //AnnouncementRequest
        return [
            'title' => 'required|string',
            'slug' => 'required|string',
            'content' => 'required|string',
            'content_short' => 'required|string',
            'image' => 'nullable|string',
            'attachment' => 'nullable|string',
            'seo_title' => 'nullable|string',
            'seo_meta_description' => 'nullable|string',
            'created_by' => 'required|exists:users,id',
            'updated_by' => 'required|exists:users,id',
        ];
    }
}
