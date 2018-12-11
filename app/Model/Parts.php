<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    protected $table = 'parts';

    protected $fillable = [
        'bill_of_service', 'part_id', 'total_price', 'keluhan'
    ];

    public function doJob()
    {
        return $this->belongsTo(DoJob::class);
    }

    public function part()
    {
        return $this->hasMany(Part::class);
    }
}
