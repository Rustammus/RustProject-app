<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'load_by' => $this->load_by,
            'author_id' => $this->author_id,
            'type' => $this->type,
            'heading' => $this->heading,
            'description' => $this->description,
            'price' => $this->price,
            'can_pay_pushkin' => $this->can_pay_pushkin,
            'city' => $this->city,
            'address' => $this->address,
            'created_at' => $this->created_at
        ];
    }
}
