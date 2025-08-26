<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembangunan extends Model
{
    protected $table = 'pembangunan';
    protected $fillable = ['nama_keg','alamat','sumber_dana','anggaran','volume','pelaksana','tahun','keterangan'];
}
