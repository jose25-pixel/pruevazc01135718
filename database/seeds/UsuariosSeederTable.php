<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "nombre"=>"Jose",
            "apellido" => "zabaleta",
            "fechaNacimiento" => "2000-12-20",
            "direccion" => "Santiago Texacuangos",
            "dui" => "19239834-2",
            "genero" => "M",
            "telefono" => 7438945,
            "email" => "josezabaletac94@gmail.com",
            "password" => bcrypt('jose'),
            "role_id" => 1,
        ]);
        DB::table('users')->insert([
            "nombre"=>"Pedro",
            "apellido" => "Noble",
            "fechaNacimiento" => "2002-12-20",
            "direccion" => "San salvador",
            "dui" => "14239834-2",
            "genero" => "M",
            "telefono" => 7838445,
            "email" => "docente@gmail.com",
            "password" => bcrypt('jose'),
            "role_id" => 2,
        ]);
        DB::table('users')->insert([
            "nombre"=>"Francisco",
            "apellido" => "Monterroza",
            "fechaNacimiento" => "2000-12-20",
            "direccion" => "San salvador",
            "dui" => "19239834-2",
            "genero" => "M",
            "telefono" => 7438945,
            "email" => "estudiante@gmail.com",
            "password" => bcrypt('jose'),
            "role_id" => 3,
        ]);
        DB::table('users')->insert([
            "nombre"=>"Javier",
            "apellido" => "Salinas",
            "fechaNacimiento" => "2000-12-20",
            "direccion" => "San salvador",
            "dui" => "19239834-2",
            "genero" => "M",
            "telefono" => 7438945,
            "email" => "estudiante1@gmail.com",
            "password" => bcrypt('jose'),
            "role_id" => 3,
        ]);
    }
}
