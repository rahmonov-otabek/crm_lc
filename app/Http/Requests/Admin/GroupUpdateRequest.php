<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GroupUpdateRequest extends FormRequest
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
            'name' => 'sometimes|required|string|max:255',
            'image' => 'sometimes|nullable|mimes:jpeg,png,jpg|max:2048', // Maksimal ruxsat etilgan rasmi hajmi 2 MB
            'course_id' => 'sometimes|nullable|exists:courses,id',
            'teacher_id' => 'sometimes|nullable|exists:teachers,id',
            'room_id' => 'sometimes|nullable|exists:rooms,id',
            'start_time' => 'sometimes|nullable|date_format:H:i', // Soat formati, masalan: 08:00
            'end_time' => 'sometimes|nullable|date_format:H:i', // Soat formati, masalan: 10:00
            'start_date' => 'sometimes|nullable|date', // Sana formati, masalan: 2024-05-01
            'end_date' => 'sometimes|nullable|date', // Sana formati, masalan: 2024-07-01
            'week_days' => 'sometimes|nullable|array', // Massiv shaklida
            'week_days.*' => 'integer|exists:week_days,id', // Har bir hafta kuni uchun mavjud bo'lishini tekshiradi
       ];
    }
}
