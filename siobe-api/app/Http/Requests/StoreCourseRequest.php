<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
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
        ];
    }
}
