<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IntendedLearningOutcomeResource extends JsonResource
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
            'syllabus_id' => $this->syllabus_id,
            'position' => $this->position,
            'description' => $this->description,
            'code' => $this->code
        ];
    }
}
