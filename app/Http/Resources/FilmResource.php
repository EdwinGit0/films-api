<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class FilmResource extends JsonResource
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
        /*
        return [
            'id' => $this->id solo mostrar ids
            'identificador' => $this->id cambiar la variable a mostrar
        ];

        return [
            'id' => $this->id,
            'title' => Str::upper($this->title), //convertir mayusculas
            'adult' => $this->adult,
            'backdrop_path' => $this->backdrop_path,
            'overview' => $this->overview,
            'video' => $this->video,
            'created_at' => $this->created_at->format('d-m-Y'),
            'updated_at' => $this->updated_at->format('d-m-Y')
        ];
         */
    }

    public function with($request)
    {
        return [
            'res' => true,
        ];
    }
}
