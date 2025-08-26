<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{
    protected $table = 'rt';
    protected $fillable = ['nama_ketua','rt','priode1','priode2','rw_id'];
}
