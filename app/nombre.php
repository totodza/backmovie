<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class nombre extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'correo', 'nombre','contra',
    ];
}
