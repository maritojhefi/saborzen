<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;
    protected $table = "subcategorias";
    protected $fillable = [
        'nombre_subcategoria',
        'descripcion',
        'imagen',
        'categoria_id'
    ];

    public function categoria()
    {
        $this->belongsTo(Categoria::class);
    }
}
