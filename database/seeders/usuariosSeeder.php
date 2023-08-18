<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos=[
            [
                'emailUsuario' => 'profeObeymar@gmail.com',
                'passUsuario' => '1234',
                'rolUsuario' => 'D',
            ],
            [
                'emailUsuario' => 'profeSandra@gmail.com',
                'passUsuario' => '1234',
                'rolUsuario' => 'C',
            ],
            [
                'emailUsuario' => 'profePaola@gmail.com',
                'passUsuario' => '1234',
                'rolUsuario' => 'C',
            ],
            [
                'emailUsuario' => 'profeCarlos@gmail.com',
                'passUsuario' => '1234',
                'rolUsuario' => 'C',
            ],
            [
                'emailUsuario' => 'jukamilo2010@hotmail.com',
                'passUsuario' => '1234',
                'rolUsuario' => 'S',
            ]
        ];
        
        DB::table('usuarios')->insert($datos);
    }
}
