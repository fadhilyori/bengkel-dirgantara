<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Jobs extends Model
{
    protected $table = 'jobs';

    protected $fillable = [
        'bill_of_service', 'do_job_id', 'total_prize', 'keluhan'
    ];

    public function doJob()
    {
        return $this->belongsTo(DoJob::class);
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}
