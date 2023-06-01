<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LessonLearningOutcomeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
					'clo_id' => $this->clo_id,
					'position' => $this->position,
					'code' => $this->code,
					'description' => $this->description,
				];
    }
}
