<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AssignmentResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @return array<string, mixed>
	 */
	public function toArray(Request $request): array
	{
		return [
            'id' => $this->id,
			'assignment_plan_id' => $this->assignment_plan_id,
			'course_class_id' => $this->course_class_id,
			'assigned_date' => $this->assigned_date,
			'due_date' => $this->due_date,
			'note' => $this->note,
		];
	}
}
