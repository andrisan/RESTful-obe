<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'study_program_id' => $this->study_program_id,
            'creator_user_id' => $this->creator_user_id,
            'name' => $this->name,
            'code' => $this->code,
            'course_credit' => $this->course_credit,
            'lab_credit' => $this->lab_credit,
            'type' => $this->type,
            'short_description' => $this->short_description,
            'minimal_requirement' => $this->minimal_requirement,
            'study_material_summary' => $this->study_material_summary,
            'learning_media' => $this->learning_media,
        ];
    }
}
