<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    protected $table = 'rw';
    protected $fillable = ['ketua_nama','rw','priode1','priode2'];
}
