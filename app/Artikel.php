<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['judul','slug','deskripsi','foto','user_id','kategori_id'
];

public $timestams = true;

public function kategori()
{
    // data Model 'Artikel' bisa dimiliki oleh Model 'Kategori'
   //melalui 'kategori_id'
   return $this->belongsTo('App\User','kategori_id');
}

public function user()
{
    // data Model 'Artikel' bisa dimiliki oleh Model 'User'
   //melalui 'kategori_id'
   return $this->belongsTo('App\User','user_id');
}
public function tag()
{
     //Model 'Artikel' Memiliki relasi Many to Many (belongsToMany)
        // terhadap model 'tag' yang terhubung oleh
        // table'artikel_tag' masing-masing sebagai 'tag_id' dan
        //'artikel_id'
        return $this->belongsToMany(
            'App\Tag',
            'artikel_tag',            
            'artikel_id',
            'tag_id',
            );
}
}
