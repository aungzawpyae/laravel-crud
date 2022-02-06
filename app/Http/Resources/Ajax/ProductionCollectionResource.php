<?php

namespace App\Http\Resources\Ajax;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ProductionCollectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
                "id"=>  $this->id,
                "name"=>    $this->name,
                "details"=> $this->details,
                "price"=>   $this->price,
                "image"=>   Storage::url($this->image),
                "category_id"=> $this->category_id,
                "slug"       => $this->slug,
        ];
    }
}
