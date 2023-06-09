<?php

namespace App\Http\Resources\Admin\Config;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExternalReferenceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'         => $this->resource->id,
            'name'       => $this->resource->name,
            'url'        => $this->resource->url,
            'isDeleted'  => $this->resource->isDeleted,
        ];
    }
}
