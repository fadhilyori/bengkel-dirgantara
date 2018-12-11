<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryAtasan extends Model
{
    protected $table = 'history_atasans';

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
}
