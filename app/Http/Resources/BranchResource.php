<?php

namespace App\Http\Resources;

use App\Pegawai;
use Illuminate\Http\Resources\Json\Resource;

class BranchResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'alamat' => $this->alamat,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'tanggal_berdiri' => $this->tanggal_berdiri,
            'tanggal_tutup' => $this->tanggal_tutup,
            'pemimpin' => Pegawai::find($this->pemimpin_id),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
