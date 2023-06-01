<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseClassRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */

    public function rules(): array
    {
        $method = $this->method();
        if ($method == 'PATCH') {
            return [
                'course_id' => ['sometimes'],
                'name' => ['sometimes'],
                'thumbnail_img' => ['sometimes'],
                'class_code' => ['sometimes'],
                'creator_user_id' => ['sometimes'],
                'syllabus_id' => ['sometimes']
            ];
        } else {
            return [
                'course_id' => ['required'],
                'name' => ['required'],
                'thumbnail_img' => ['required'],
                'class_code' => ['required'],
                'creator_user_id' => ['required'],
                'syllabus_id' => ['required']
            ];
        }
    }
}
