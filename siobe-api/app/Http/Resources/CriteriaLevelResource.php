<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CriteriaLevelResource extends JsonResource
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
            'criteria_id' => $this->criteria_id,
            'point' => $this->point,
            'title' => $this->title,
            'description' => $this->description,
        ];
    }
}
