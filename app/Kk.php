<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kk extends Model
{
    protected $table = 'kartu_keluarga';
    protected $fillable = ['namakk','nokk','rw_id','rt_id','status_eko','foto'];
}
