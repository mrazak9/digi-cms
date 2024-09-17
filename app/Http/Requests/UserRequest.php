<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        $userId = $this->route('user');

        return [
            'name' => 'required|string|max:80',
            'photo' => 'nullable',
            'email' => [
                'required',
                'email',
                $this->isMethod('post') ? 'unique:users,email' : Rule::unique('users', 'email')->ignore($userId),
            ],
            'password' => $this->isMethod('post') ? 'required' : 'nullable',
            'phone' => [
                'string',
                $this->isMethod('post') ? 'unique:users,phone' : Rule::unique('users', 'phone')->ignore($userId),
            ],
        ];
    }
}
