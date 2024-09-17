<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
        //PostRequest
        return [
            'categories' => [
                'required',
                'array',
                'min:1', // Minimal satu kategori dipilih
                Rule::exists('categories', 'name'), // Pastikan kategori yang dipilih ada di tabel categories
            ],
            'type_id' => 'exists:types,id',
            'title' => 'required|string',
            'content' => 'required|string',
            'content_short' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // max:2048 menunjukkan ukuran maksimal 2MB
            'attachment' => 'nullable|mimes:pdf',
            'seo_title' => 'nullable|string',
            'seo_meta_description' => 'nullable|string',
            'nameFile' => 'nullable|string',
        ];
    }
}
