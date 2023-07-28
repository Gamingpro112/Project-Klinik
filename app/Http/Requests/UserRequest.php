<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:150',
            'email' => 'required|string|email|unique:users,email',
            'username' => 'required|string|max:100',
            'password' => ['required', 'string', Password::min(8)->numbers()],
            'rule' => 'required|string|exists:roles,name'
        ];
    }
}