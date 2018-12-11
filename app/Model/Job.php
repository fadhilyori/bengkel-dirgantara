<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job';

    protected $fillable = [
        'nama', 'deskripsi'
    ];

    public function doJob()
    {
        return $this->hasMany(DoJob::class);
    }
}
