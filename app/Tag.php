<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
protected $fillable = ['nama','slug'];
public $timestamps = true;

public function artikel()
{
    //Model 'Tag' Memiliki relasi Many to Many (belongsToMany)
        // terhadap model 'artikel' yang terhubung oleh
        // table'artikel_tag' masing-masing sebagai 'artikel_id' dan
        //'tag_id'
        return $this->belongsToMany(
            'App\Artikel',
            'artikel_tag',
            'tag_id',
            'artikel_id');
}
}

