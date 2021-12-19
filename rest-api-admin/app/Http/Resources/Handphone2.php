<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Handphone2 extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'Merk' => $this->Nama,
            'Jenis' => $this->Jenis,
            'Harga' => $this->Harga
        ];
    }
}
