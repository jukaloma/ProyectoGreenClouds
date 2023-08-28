<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class proyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    { 
     $datos = [
        [
            'codProy'=> '101',
            'titProy'=> 'SEGUJAZ',
            'tipProy'=>'investigacion',
            'estProy'=> 'propuesta',
            'fecIniProy'=> '2021-11-5',
            'propProy'=> 'n/a',
            'semillero'=> '1',
        ],
        [
            'codProy'=> '102',
            'titProy'=> 'EXTREM',
            'tipProy'=>'emprendimiento',
            'estProy'=> 'en curso',
            'fecIniProy'=> '2021-11-5',
            'propProy'=> 'n/a',
            'semillero'=> '1',
        ],
        [
            'codProy'=> '103',
            'titProy'=> 'ASCOFI',
            'tipProy'=>'investigacion',
            'estProy'=> 'en curso',
            'fecIniProy'=> '2021-11-5',
            'propProy'=> 'n/a',
            'semillero'=> '2',
        ],
        [
            'codProy'=> '104',
            'titProy'=> 'Propuesta de marketing digital',
            'tipProy'=>'emprendimiento',
            'estProy'=> 'finalizado',
            'fecIniProy'=> '2021-11-5',
            'propProy'=> 'n/a',
            'semillero'=> '1',
        ],

        [
            'codProy'=> '105',
            'titProy'=> 'ANÁLISIS DEL USO Y APLICACIÓN DE LAS HERRAMIENTAS DE LA WEB 2.0 TANTO EN DOCENTES COMO EN ESTUDIANTES DEL PROGRAMA DE INGENIERÍA DE SISTEMAS DE LA UNIVERSIDAD DE NARIÑO',
            'tipProy'=>'investigacion',
            'estProy'=> 'finalizado',
            'fecIniProy'=> '2020-11-4',
            'propProy'=> 'n/a',
            'semillero'=> '1',
        ],
        [
            'codProy'=> '106',
            'titProy'=> 'ESTRATEGIA DIDÁCTICA MEDIADA CON TIC PARA INCENTIVAR LOS PROCESOS DE LECTURA EN LA BIBLIOTECA PÚBLICA RURAL “JUAN LORENZO QUENGUAN" DEL MUNICIPIO DE IPIALES',
            'tipProy'=>'investigacion',
            'estProy'=> 'en curso',
            'fecIniProy'=> '2021-10-4',
            'propProy'=> 'n/a',
            'semillero'=> '2',
        ],
        [
            'codProy'=> '107',
            'titProy'=> 'ESTRATEGIA DIDÁCTICA MEDIADA CON TIC PARA INCENTIVAR LOS PROCESOS DE LECTURA EN LA BIBLIOTECA PÚBLICA RURAL “JUAN LORENZO QUENGUAN" DEL MUNICIPIO DE IPIALES',
            'tipProy'=>'investigacion',
            'estProy'=> 'en curso',
            'fecIniProy'=> '2021-10-4',
            'propProy'=> 'n/a',
            'semillero'=> '1',
        ],
        [
            'codProy'=> '108',
            'titProy'=> 'NATUFARMA',
            'tipProy'=>'emprendimento',
            'estProy'=> 'propuesta',
            'fecIniProy'=> '2023-10-4',
            'propProy'=> 'n/a',
            'semillero'=> '1',
        ],
        [
            'codProy'=> '109',
            'titProy'=> 'MOVIMAD',
            'tipProy'=>'innovacion y desarrollo tecnologico',
            'estProy'=> 'en curso',
            'fecIniProy'=> '2023-4-15',
            'propProy'=> 'n/a',
            'semillero'=> '2',
        ],
        [
            'codProy'=> '110',
            'titProy'=> 'propuesta para la movididad en pasto',
            'tipProy'=>'innovacion y desarrollo tecnologico',
            'estProy'=> 'terminada',
            'fecIniProy'=> '2023-5-15',
            'propProy'=> 'n/a',
            'semillero'=> '2',
        ]
    ];        
      DB::table ('proyectos') -> insert($datos);
    }
}
