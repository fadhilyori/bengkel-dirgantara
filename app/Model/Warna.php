<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    protected $table = 'warnas';

    protected $fillable = [
        'warna'
    ];

    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class);
    }
}
