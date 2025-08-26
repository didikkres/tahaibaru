<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nikah extends Model
{ 
    protected $table = 'nikah';
    protected $fillable = ['nama','binti','jekel','ttl','warganegara','agama','pekerjaan','nik','alamat','tujuan','surat_id'];
}
