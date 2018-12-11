<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensis';

    protected $fillable = [
        'date', 'jam_masuk', 'jam_pulang', 'pegawai_id', 'branch_id', 'keterangan'
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
