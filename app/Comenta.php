<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comenta extends Model
{
    protected $table = 'comentas';
    public $timestamps = false;
    protected  $fillable = [
        'nombre', 'descripcion','idMovie'
    ];

}
