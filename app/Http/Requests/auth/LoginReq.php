<?php

namespace App\Http\Requests\auth;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class LoginReq extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        return $validator->errors();
        // throw new HttpResponseException(response()->json($validator->errors(), 422));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "email" => "required|email|exists:users,email",
            "password" => "required|min:8|max:16",
        ];
    }

    public function messages()
    {
        return [
            "email.required" => "email is required",
            "email.exists" => "email is not already exist",
            "email.email" => "email is invalid",
            "password.required" => "password is required",
            "password.min" => "password must be least 8 characters",
            "password.max" => "password must be a maximum 16 characters",
        ];
    }
}
