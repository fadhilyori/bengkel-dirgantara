<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class JobPause extends Model
{
    protected $table = 'pause_reasons';

    protected $fillable = [
        'pause_start', 'pause_finish', 'pause_reason_id'
    ];

    public function jobPause()
    {
        return $this->hasMany(JobPause::class);
    }

    public function doJob()
    {
        return $this->belongsTo(DoJob::class);
    }
}
