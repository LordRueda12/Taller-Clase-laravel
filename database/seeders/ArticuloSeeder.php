<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articulos')->insert([
            [
                'titulo' => 'Introducción a Laravel',
                'contenido' => 'Laravel es un framework de PHP muy popular...',
                'imagen_destacada' => 'https://example.com/laravel.jpg',
                'autor' => 'Juan Pérez',
                'categoria_blog_id' => 1, // Asegúrate de que la categoría existe
                'fecha_publicacion' => Carbon::now()->subDays(10),
            ],
            [
                'titulo' => 'Cómo mejorar tu código en PHP',
                'contenido' => 'Es importante seguir buenas prácticas...',
                'imagen_destacada' => 'https://example.com/php-tips.jpg',
                'autor' => 'María Gómez',
                'categoria_blog_id' => 2,
                'fecha_publicacion' => Carbon::now()->subDays(5),
            ],
            [
                'titulo' => 'Tendencias en desarrollo web 2025',
                'contenido' => 'Las tecnologías como Laravel, React y Vue...',
                'imagen_destacada' => 'https://example.com/web-dev.jpg',
                'autor' => 'Carlos López',
                'categoria_blog_id' => 3,
                'fecha_publicacion' => Carbon::now(),
            ],
        ]);
    }
}
