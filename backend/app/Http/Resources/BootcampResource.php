<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class BootcampResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       //diseñar el encapsulamiento de nuestra entidad
       return[
        'name' => Str::upper($this->name) ,
        'id' => $this->id ,
        'website' => $this->website 
       ];
    }
}
