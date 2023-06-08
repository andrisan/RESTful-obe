<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CriteriaResource extends JsonResource
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
            'rubric_id' => $this->rubric_id,
            'llo_id' => $this->llo_id,
            'title' => $this->title,
            'description' => $this->description,
            'max_point' => $this->max_point,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'criteria_levels' => CriteriaLevelResource::collection($this->whenLoaded('criteriaLevels')),

        ];
    }
}
