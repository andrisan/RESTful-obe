<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AssignmentPlanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
			'syllabus_id' => $this->syllabus_id,
			'objective' => $this->objective,
			'title' => $this->title,
			'is_group_assignment' => $this->is_group_assignment,
			'assignment_style' => $this->assignment_style,
			'description' => $this->description,
			'output_instruction' => $this->output_instruction,
        	'submission_instruction' => $this->submission_instruction,
			'deadline_instruction' => $this->deadline_instruction,
		];
    }
}
