<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class eventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    { 
     $datos = [
        [
            'nomEvento'=> 'CACIED 2021',
            'descEvento'=>'CACIED 2021 es un lugar de encuentro de investigadores, docentes, profesionales y estudiantes de los países andinos con el fin de compartir y socializar sus experiencias e investigaciones en las Ciencias de la Computación, Informática y Educación en Ingeniería de Sistemas',
            'fecIniEvento'=> '2021-11-3',
            'fecFinEvento'=> '2021-11-5',
            'lugarEvento'=> 'Universidad de Nariño',
            'tipoEvento'=> 'congreso',
            'modEvento'=> 'presencial',
            'clasEvento'=> 'local',
            'obsEvento'=> 'ninguna'
        ],
        [
            'nomEvento'=> 'CACIED 2023',
            'descEvento'=>'CACIED 2023 es un lugar de encuentro de investigadores, docentes, profesionales y estudiantes de los países andinos con el fin de compartir y socializar sus experiencias e investigaciones en las Ciencias de la Computación, Informática y Educación en Ingeniería de Sistemas',
            'fecIniEvento'=> '2023-11-3',
            'fecFinEvento'=> '2023-11-5',
            'lugarEvento'=> 'Universidad de Nariño',
            'tipoEvento'=> 'encuentro',
            'modEvento'=> 'presencial',
            'clasEvento'=> 'local',
            'obsEvento'=> 'ninguna'
        ],

        [
            'nomEvento'=> 'ESIC 2022',
            'descEvento'=>' la Universidad CESMAG presenta el Primer encuentro internacional de semilleros de investigación que se constituye en un espacio para que los estudiantes investigadores que se inician en esta clase de actividades socialicen sus avances ante la comunidad educativa',
            'fecIniEvento'=> '2022-4-3',
            'fecFinEvento'=> '2022-4-5',
            'lugarEvento'=> 'Universidad CESMAG',
            'tipoEvento'=> 'seminario',
            'modEvento'=> 'presencial',
            'clasEvento'=> 'local',
            'obsEvento'=> 'ninguna'
        ],
        [
            'nomEvento'=> 'ESIC 2023',
            'descEvento'=>' la Universidad CESMAG presenta el Primer encuentro internacional de semilleros de investigación que se constituye en un espacio para que los estudiantes investigadores que se inician en esta clase de actividades socialicen sus avances ante la comunidad educativa',
            'fecIniEvento'=> '2023-4-3',
            'fecFinEvento'=> '2023-4-5',
            'lugarEvento'=> 'Universidad CESMAG',
            'tipoEvento'=> 'taller',
            'modEvento'=> 'presencial',
            'clasEvento'=> 'local',
            'obsEvento'=> 'ninguna'
        ],
    ];
        
      DB::table ('eventos') -> insert($datos);
    }
}
