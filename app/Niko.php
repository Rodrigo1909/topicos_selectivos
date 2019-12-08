<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niko extends Model
{
    protected $table = 'nikos';
    protected $fillable = [
        'nombre',
        'apellidoP',
        'apellidoM',
        'correo_electronico',
        'edad',
    ];
    protected $attributes = [
        'nombre' => '',
        'apellidoP' => '',
        'apellidoM' => '',
        'correo_electronico' => '',
        'edad' => '',
    ];
}
