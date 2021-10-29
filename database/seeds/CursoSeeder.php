<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            "nombreCurso" => "matematica",
            "year" => 2021,
            "ciclo" => 1,
            "user_id" => 2
        ]);
        DB::table('cursos')->insert([
            "nombreCurso" => "Sociales",
            "year" => 2021,
            "ciclo" => 1,
            "user_id" => 2
        ]);
        DB::table('cursos')->insert([
            "nombreCurso" => "Lenguaje",
            "year" => 2021,
            "ciclo" => 1,
            "user_id" => 2
        ]);
    }
}
