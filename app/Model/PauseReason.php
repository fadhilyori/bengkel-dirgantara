<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PauseReason extends Model
{
    protected $table = 'pause_reasons';

    protected $fillable = [
        'reason'
    ];

    public function jobPause()
    {
        return $this->hasMany(JobPause::class);
    }
}
