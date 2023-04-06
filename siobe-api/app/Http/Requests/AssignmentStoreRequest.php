<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignmentStoreRequest extends FormRequest
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
			'assignment_plan_id' => ['integer'],
			'course_class_id' => ['integer'],
			'assigned_date' => ['date'],
			'due_date' => ['date'],
			'note' => ['string', 'max:255']
		];
	}
}
