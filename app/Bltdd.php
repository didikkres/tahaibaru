<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bltdd extends Model
{
    protected $table = 'bltdd';
    protected $fillable = ['id','nik','bltdd','pkh','blsm','bpnt'];
}
