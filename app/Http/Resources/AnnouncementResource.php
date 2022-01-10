<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnnouncementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $data = [
            'id'                    => $this->id,
            'name'          => $this->name,
            'desc'             =>$this->desc,
            'type'              => $this->type,
            'is_new'       =>$this->is_new,
            'creater_id'  =>$this->creater_id,
            'created_at'    => $this->created_at->diffForHumans(),
            'updated_at'    => $this->updated_at,
        ];

        return $data;
    }
}
