<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKendaraan extends Model
{
    protected $table = 'model_kendaraans';

    protected $fillable = [
        'nama_model'
    ];

    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class);
    }
}
