<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articulo extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'contenido',
        'imagen_destacada',
        'autor',
        'categoria_blog_id',
        'fecha_publicacion',
    ];

    public function categoriaBlog()
    {
        return $this->belongsTo(CategoriaBlog::class);
    }


    public function Comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
}
