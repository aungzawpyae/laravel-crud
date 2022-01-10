<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CollectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        $data = [
            'id'=>$this->id,
            'name'=>$this->name,
            'active'=>$this->active,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
        ];

        if($request->has('home')){
            $data['products'] = ProductResource::collection($this->products->take(4));
        }

        if($request->has('default')){
            $data['products'] = ProductResource::collection($this->products);
        }
        return $data;
    }
}
