<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class semilleristasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos=[
                [
                    'codSemillerista' =>'1000',
                    'nomSemillerista' => 'Jorge Enrique Cordoba Florez',
                    'dirSemillerista' => 'mz 27 casa 4 la minga',
                    'telSemillerista' => '3145140413',
                    'emailSemillerista' => 'jorgenriquecordoba@gmail.com',
                    'sexSemillerista' => 'M',
                    'fecNacSemillerista' => '1998-06-08',
                    'semSemillerista' => '9',
                    'picSemillerista' => 'n/a',
                    'repMatricula' => 'n/a',
                    'progSemillerista' => 'Sistemas',
                    'fecVincSemillerista' => '2020-08-12',
                    'estSemillerista' => 'Activo',
                    'semillero' => '1',
                ],
                [
                    'codSemillerista' =>'1001',
                    'nomSemillerista' => 'Juan Jose Burbano Salas',
                    'dirSemillerista' => 'mz 21 casa 20 miraflores',
                    'telSemillerista' => '3117333095',
                    'emailSemillerista' => 'xtigerasx@gmail.com',
                    'sexSemillerista' => 'M',
                    'fecNacSemillerista' => '2000-01-13',
                    'semSemillerista' => '5',
                    'picSemillerista' => 'n/a',
                    'repMatricula' => 'n/a',
                    'progSemillerista' => 'Civil',
                    'fecVincSemillerista' => '2022-02-18',
                    'estSemillerista' => 'Activo',
                    'semillero' => '1',
                ],
                [
                    'codSemillerista' =>'1002',
                    'nomSemillerista' => 'Martha Cecilia Santos Cabrera',
                    'dirSemillerista' => 'm2  casa 8 santa fe',
                    'telSemillerista' => '3185005353',
                    'emailSemillerista' => 'goldenbonny@gmail.com',
                    'sexSemillerista' => 'F',
                    'fecNacSemillerista' => '2001-12-20',
                    'semSemillerista' => '3',
                    'picSemillerista' => 'n/a',
                    'repMatricula' => 'n/a',
                    'progSemillerista' => 'Electronica',
                    'fecVincSemillerista' => '2021-04-21',
                    'estSemillerista' => 'Activo',
                    'semillero' => '2',
                ],

        ];
        DB::table('semilleristas')->insert($datos);
    }
}
