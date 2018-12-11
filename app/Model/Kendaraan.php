<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table = 'kendaraans';

    protected $fillable = [
        'nama', 'tahun_keluar', 'license', 'warna_id', 'type_kendaraan_id', 'model_kendaraan_id', 'customer_id'
    ];

    public function warna()
    {
        return $this->belongsTo(Warna::class);
    }

    public function model()
    {
        return $this->belongsTo(ModelKendaraan::class);
    }

    public function type()
    {
        return $this->belongsTo(TypeKendaraan::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
