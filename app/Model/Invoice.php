<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';

    protected $fillable = [
        'total_prize', 'discount', 'tax', 'bill_of_service', 'date', 'customer_id', 'jobs_id', 'kendaraan_id'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function jobs()
    {
        return $this->belongsTo(Jobs::class);
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function history()
    {
        return $this->hasMany(HistoryJob::class);
    }
}
