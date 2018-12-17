<?php

namespace App\Http\Resources;

use App\Branch;
use App\Pegawai;
use App\Status;
use Illuminate\Http\Resources\Json\Resource;

class PegawaiResource extends Resource
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
            'no_telp' => $this->no_telp,
            'tanggal_masuk' => $this->tanggal_masuk,
            'tanggal_keluar' => $this->tanggal_keluar,
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'role_id' => $this->role_id,
            'manajer' => Pegawai::find($this->manajer_id),
            'branch' => Branch::find($this->branch_id),
            'status' => Status::find($this->status_id),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
