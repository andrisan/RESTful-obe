<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonLearningOutcomeUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
                'clo_id' => ['required', 'integer'],
                'position' => ['sometimes','integer'],
                'description' => ['sometimes','string'],
                'code' => ['required', 'string'],
                'syllabus_id' => ['required','integer']
            ];
        } else {
            return [
                'clo_id' => ['required', 'integer'],
                'position' => ['required','integer'],
                'description' => ['required','string'],
                'code' => ['required', 'string'],
                'syllabus_id' => ['required','integer']
            ];
        }
    }
}
