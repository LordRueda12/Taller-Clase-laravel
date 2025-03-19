<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Producto 1',
                'descripcion' => 'Descripción del producto 1',
                'precio' => 10000,
                'stock' => 50,
                'categoria_id' => 1,
                'imagen' => 'imagenes/producto1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Producto 2',
                'descripcion' => 'Descripción del producto 2',
                'precio' => 15000,
                'stock' => 30,
                'categoria_id' => 2,
                'imagen' => 'imagenes/producto2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Producto 3',
                'descripcion' => 'Descripción del producto 3',
                'precio' => 20000,
                'stock' => 20,
                'categoria_id' => 1,
                'imagen' => 'imagenes/producto3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}