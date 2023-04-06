<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseClassResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'course_id' => $this->course_id,
            'name' => $this->name,
            'thumbnail_img' => $this->thumbnail_img,
            'class_code' => $this->class_code,
            'creator_user_id' => $this->creator_user_id,
            'syllabus_id' => $this->syllabus_id,
        ];
    }
}
