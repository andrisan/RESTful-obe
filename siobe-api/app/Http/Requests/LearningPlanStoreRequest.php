<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LearningPlanStoreRequest extends FormRequest
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
            'week_number' => ['sometimes'],
            'llo_id' => ['required'],
            'study_material' => ['sometimes'],
            'learning_method' => ['sometimes'],
            'estimated_time' => ['sometimes'],
        ];
    }
}
