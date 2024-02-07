<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CityResponse extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this['id'],
            'province' => ProvinceResponse::make($this->whenLoaded('province')),
            'type' => $this['type'],
            'name' => $this['name'],
            'postal_code' => $this['postal_code'],
            'created_at' => $this['created_at'],
            'updated_at' => $this['updated_at'],
        ];
    }
}
