<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
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
        return [
            'name' => 'required|max:255',
            'phone_number' => 'required|max:13|unique:teachers,phone_number',
            'profile_pic' => 'nullable|image|mimes:jpeg,jpg,png', 
            "cash" => 'nullable',
            "address" => 'nullable',
            "birthday" => 'nullable',
            "gender" => 'nullable',
            'password' => 'required|min:6|confirmed', 
        ];
    }
}
