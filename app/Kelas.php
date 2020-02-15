<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //
    protected $fillable = ['kelas']; //file apa saja yang harus di simpan
    public $timestamps = true;

    public function siswa(){
        return $this->hasMany('App\Siswa','id_kelas');
    }
}
