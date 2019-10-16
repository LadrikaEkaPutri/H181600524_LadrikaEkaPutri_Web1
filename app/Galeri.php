<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galeri extends Model
{
    use SoftDeletes;

    protected $table='galeri';

    protected $fillable=[
        'nama','keterangan','users_id','path','kategori_galeri_id'
    ];

    
   protected $casts=[
    'deleted_at' =>'datetime'
  ];
}
