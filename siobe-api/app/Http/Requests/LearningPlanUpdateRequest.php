<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LearningPlanUpdateRequest extends FormRequest
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
				'week_number' => ['sometimes', 'integer'],
            'llo_id' => ['required', 'integer'],
            'syllabus_id' => ['sometimes', 'integer'],
            'study_material' => ['sometimes', 'string'],
            'learning_method' => ['sometimes', 'string'],
            'estimated_time' => ['sometimes', 'string']
			];
		} else {
			return [
				'week_number' => ['required', 'integer'],
            'llo_id' => ['required', 'integer'],
            'syllabus_id' => ['required', 'integer'],
            'study_material' => ['required', 'string'],
            'learning_method' => ['required', 'string'],
            'estimated_time' => ['required', 'string']
			];
		}
        
    }
}
