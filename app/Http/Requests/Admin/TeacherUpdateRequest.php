<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TeacherUpdateRequest extends FormRequest
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
            'phone_number' => 'sometimes|required|max:13|unique:teachers,phone_number,' . $this->teacher->id, 
            'profile_pic' => 'sometimes|nullable|image|mimes:jpeg,jpg,png', 
            "salary" => 'sometimes|nullable',
            "birthday" => 'sometimes|nullable',
            "gender" => 'sometimes|nullable',
            'password' => 'sometimes|nullable|min:6|confirmed', 
        ];
    }
}
