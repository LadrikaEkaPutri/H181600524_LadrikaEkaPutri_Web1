<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table='galeri';

    protected $fillable=[
        'judul','isi','users_id','path','kategori_galeri_id'
    ];

    
   protected $casts=[

  ];
}
