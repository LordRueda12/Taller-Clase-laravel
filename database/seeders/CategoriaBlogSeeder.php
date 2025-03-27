<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriaBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_blogs')->insert([
            [
                'nombre' => 'Tecnología',
                'descripcion' => 'Últimas tendencias y avances en tecnología.',
            ],
            [
                'nombre' => 'Salud',
                'descripcion' => 'Consejos y noticias sobre bienestar y salud.',
            ],
            [
                'nombre' => 'Viajes',
                'descripcion' => 'Explora nuevos destinos y experiencias.',
            ],
            [
                'nombre' => 'Negocios',
                'descripcion' => 'Estrategias y noticias del mundo empresarial.',
            ],
            [
                'nombre' => 'Educación',
                'descripcion' => 'Recursos y tendencias en el aprendizaje.',
            ],
        ]);
    }
}