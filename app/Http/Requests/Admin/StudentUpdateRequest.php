<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StudentUpdateRequest extends FormRequest
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
            'name' => 'sometimes|required|max:255',
            'phone_number' => 'sometimes|required|max:13|unique:teachers,phone_number',
            'profile_pic' => 'sometimes|nullable|image|mimes:jpeg,jpg,png', 
            "cash" => 'sometimes|nullable',
            "address" => 'sometimes|nullable',
            "birthday" => 'sometimes|nullable',
            "gender" => 'sometimes|nullable',
            "groups" => 'sometimes|nullable|array',  
            "groups.*" => 'integer|exists:groups,id',  
        ];
    }
}
