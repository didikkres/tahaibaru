<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';
    protected $fillable = ['kk_id','nama','nik','usia','tempat_lahir','tgl_lahir','jekel','agama','alamat','status_pernikahan','status_dikeluarga','pekerjaan','pendidikan','warganegara'];
}
