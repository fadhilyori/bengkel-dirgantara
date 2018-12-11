<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeKendaraan extends Model
{
    protected $table = 'type_kendaraans';

    protected $fillable = [
        'type'
    ];

    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class);
    }
}
