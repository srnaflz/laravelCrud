<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //
    protected $fillable = ['nama']; //file apa saja yang harus di simpan
    public $timestamps = true;
}
