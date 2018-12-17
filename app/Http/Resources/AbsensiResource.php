<?php

namespace App\Http\Resources;

use App\Branch;
use App\Pegawai;
use Illuminate\Http\Resources\Json\Resource;

class AbsensiResource extends Resource
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
            'date' => $this->date,
            'jam_masuk' => $this->jam_masuk,
            'jam_pulang' => $this->jam_pulang,
            'pegawai' => Pegawai::find($this->pegawai_id),
            'branch' => Branch::find($this->branch_id),
            'keterangan' => $this->keterangan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
