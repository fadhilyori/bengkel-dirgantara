<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';

    protected $fillable = [
        'name', 'alamat', 'latitude', 'longitude', 'tanggal_berdiri', 'tanggal_tutup', 'pemimpin_id'
    ];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }

    public function pemimpin()
    {
        return $this->hasOne(Pegawai::class);
    }

    public function history_pemimpin()
    {
        return $this->hasMany(HistoryPemimpinBranch::class);
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
}
