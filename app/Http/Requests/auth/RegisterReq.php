<?php

namespace App\Http\Requests\auth;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class RegisterReq extends FormRequest
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
            "fullname" => "required|min:5|max:100",
            "email" => "required|email|unique:users,email|max:100",
            "password" => "required|min:8|max:16",
        ];
    }
    public function messages()
    {
        return [
            "fullname.required" => "full name is required",
            "fullname.min" => "full name must be at least 5 characters",
            "fullname.max" => "full name must be a maximum of 100 characters",
            "email.required" => "email is required",
            "email.unique" => "email is already exists",
            "email.email" => "email is invalid",
            "email.max" => "email must be a maximum 100 characters",
            "password.required" => "password is required",
            "password.min" => "password must be least 8 characters",
            "password.max" => "password must be a maximum 16 characters",
        ];
    }
}
