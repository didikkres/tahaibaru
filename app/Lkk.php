<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lkk extends Model
{
    protected $table = 'lkk';
    protected $fillable = ['nama','jabatan','lkd','masa_jabatan'];
}
