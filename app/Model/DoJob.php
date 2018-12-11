<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoJob extends Model
{
    protected $table = 'do_jobs';

    protected $fillable = [
        'bill_of_service', 'price', 'start_time', 'end_time', 'start', 'finish', 'job_id', 'pegawai_id', 'parts_id', 'job_pause_id'
    ];

    public function jobs()
    {
        return $this->hasMany(Jobs::class);
    }

    public function historyJob()
    {
        return $this->hasMany(HistoryJob::class);
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function Parts()
    {
        return $this->belongsTo(Parts::class);
    }

    public function jobPause()
    {
        return $this->belongsTo(JobPause::class);
    }
}
