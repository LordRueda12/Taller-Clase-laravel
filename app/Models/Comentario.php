<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comentario extends Model
{
   use hasfactory;

   protected $fillable =[
    'contenido',
    'nombre_usuario',
    'email',
    'articulo_id',
   ];

   public function articulo()
   {
    return $this->belongsTo(Articulo::class);
   }
}
