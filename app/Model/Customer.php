<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'nama', 'alamat', 'no_telp', 'npwp', 'email'
    ];

    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class);
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}
