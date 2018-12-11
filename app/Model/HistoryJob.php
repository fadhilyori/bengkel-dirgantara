<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryJob extends Model
{
    protected $table = 'history_jobs';

    protected $fillable = [
        'tanggal', 'do_job_id', 'invoice_id'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function doJob()
    {
        return $this->belongsTo(DoJob::class);
    }
}
