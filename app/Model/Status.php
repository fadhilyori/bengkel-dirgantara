<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';

    protected $fillable = [
        'status'
    ];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
