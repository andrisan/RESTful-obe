<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SyllabusResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
                'id' => $this->id,
                'course_id' =>$this->course_id, 
                'title' =>$this->title,
                'author' => $this->author,
                'head_of_study_program' =>$this->head_of_study_program, 
                //'creator_user_id' =>$this->creator_user_id,
                'studyProgram' =>$this->whenLoaded('studyProgram')
            ];
    }
}
