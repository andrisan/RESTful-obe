<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
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
        return [
            
        ];
    }
    public function rules(): array
    {
        $method = $this->method();
        if ($method == 'PATCH') {
            return [
                'study_program_id' => ['sometimes'],
                'creator_user_id' => ['sometimes'],
                'name' => ['sometimes'],
                'code' => ['sometimes'],
                'course_credit' => ['sometimes'],
                'lab_credit' => ['sometimes'],
                'type' => ['sometimes'],
                'short_description' => ['sometimes'],
                'minimal_requirement' => ['sometimes'],
                'study_material_summary' => ['sometimes'],
                'learning_media' => ['sometimes'],
                'name' => ['sometimes']
            ];
        } else {
            return [
                'study_program_id' => ['required'],
                'creator_user_id' => ['required'],
                'name' => ['required'],
                'code' => ['required'],
                'course_credit' => ['required'],
                'lab_credit' => ['required'],
                'type' => ['required'],
                'short_description' => ['required'],
                'minimal_requirement' => ['required'],
                'study_material_summary' => ['required'],
                'learning_media' => ['required'],
                'name' => ['required']
            ];
        }
    }
}


