<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $table = 'part';

    protected $fillable = [
        'nama', 'deskripsi', 'qty', 'price'
    ];

    public function parts()
    {
        return $this->hasMany(Parts::class);
    }
}
