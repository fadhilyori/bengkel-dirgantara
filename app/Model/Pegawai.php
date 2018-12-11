<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pegawai extends Authenticatable
{
    use Notifiable;

    protected $table = 'pegawai';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'alamat', 'no_telp', 'tanggal_masuk', 'tanggal_keluar', 'email', 'email_verified_at', 'role_id', 'manajer_id', 'branch_id', 'status_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }

    public function doJob()
    {
        return $this->hasMany(DoJob::class);
    }

    public function historyAtasan()
    {
        return $this->hasMany(HistoryAtasan::class);
    }

    public function branchs()
    {
        return $this->hasMany(Branch::class);
    }

    public function historyPemimpin()
    {
        return $this->hasMany(HistoryPemimpinBranch::class);
    }

    public function bawahan()
    {
        return $this->hasMany(Pegawai::class);
    }

    public function manajer()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
