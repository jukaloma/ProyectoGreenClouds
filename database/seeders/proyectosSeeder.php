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
        
    ];
        
      DB::table ('proyectos') -> insert($datos);
    }
}
