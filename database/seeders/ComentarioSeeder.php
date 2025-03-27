<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert([
            [
                'contenido' => '¡Excelente artículo! Me ayudó mucho.',
                'nombre_usuario' => 'Juan Pérez',
                'email' => 'juanperez@example.com',
                'articulo_id' => 1,
            ],
            [
                'contenido' => 'Muy interesante, gracias por compartir.',
                'nombre_usuario' => 'Ana Gómez',
                'email' => 'anagomez@example.com',
                'articulo_id' => 2,
            ],
            [
                'contenido' => 'Tengo una duda sobre este tema, ¿podrías explicarlo más?',
                'nombre_usuario' => 'Carlos Ruiz',
                'email' => 'carlosruiz@example.com',
                'articulo_id' => 1,
            ],
        ]);
    }
}
