<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestValidationRegister extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "FullName"=>"required",
            "Age"=>"required",
            "Address"=>"required",
            "Email"=>"required|email|unique:users",
            "Login"=>"required|unique:users",
            "Password"=>"required|confirmed"
        ];
    }
}
