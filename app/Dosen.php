<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = ['nama','nipd'];
    public $timestamps = true;

    public function mahasiswa()
    {
        return $this->hasMany('App\Mahasiwa','id_dosen');
    }
}
