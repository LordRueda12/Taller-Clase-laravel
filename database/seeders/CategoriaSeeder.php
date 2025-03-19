<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Schema::hasTable('categorias')) {
            DB::table('categorias')->insert([
                [
                    'nombre' => 'Tecnología',
                    'descripcion' => 'Categoría relacionada con tecnología y avances digitales.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Salud',
                    'descripcion' => 'Categoría enfocada en bienestar, salud y medicina.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Negocios',
                    'descripcion' => 'Categoría sobre economía, finanzas y emprendimiento.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}