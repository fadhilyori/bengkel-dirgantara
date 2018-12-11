<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryPemimpinBranch extends Model
{
    protected $table = 'history_pemimpin_branches';

    protected $fillable = [
        'branch_id', 'pegawai_id', 'tanggal_mulai', 'tanggal_selesai'
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
