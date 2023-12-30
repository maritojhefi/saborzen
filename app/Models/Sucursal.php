<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_sucursal',
        'direccion',
        'telefono',
        'latitud',
        'longitud',
        'imagen',
        'impresora_cocina_id',
        'impresora_caja_id',
    ];
}
