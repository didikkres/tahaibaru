<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';
    protected $fillable = ['nik','no_surat','jenis_surat','status','keterangan','link','payah','pibu','hari','jam','hiburan','alamat_hiburan'];
}
