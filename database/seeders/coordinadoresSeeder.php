<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class coordinadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos=[
            [
                'nomCoord' => 'Sandra Guerrero',
                'dirCoord' => 'cl x # y-z',
                'telCoord' => '3000000000',
                'emailCoord' => 'profeSandra@gmail.com',
                'sexCoord' => 'F',
                'picCoord' => 'n/a',
                'fecNacCoord' => '1992-04-05',
                'progCoord' => 'Sistemas',
                'areaCoord' => 'area1',
                'fecVincCoord' => '2019-08-01',
                'acuerNomCoord' => 'n/a'
            ],
            [
                'nomCoord' => 'Paola Arturo',
                'dirCoord' => 'cra y #x-z',
                'telCoord' => '3111111111',
                'emailCoord' => 'profePaola@gmail.com',
                'sexCoord' => 'F',
                'picCoord' => 'n/a',
                'fecNacCoord' => '1970-08-16',
                'progCoord' => 'Sistemas',
                'areaCoord' => 'area2',
                'fecVincCoord' => '2019-05-04',
                'acuerNomCoord' => 'n/a'
            ],
            [
                'nomCoord' => 'Carlos Rodriguez',
                'dirCoord' => 'cl y #x-z',
                'telCoord' => '3200202000',
                'emailCoord' => 'profeCarlos@gmail.com',
                'sexCoord' => 'M',
                'picCoord' => 'n/a',
                'fecNacCoord' => '1975-01-08',
                'progCoord' => 'Sistemas',
                'areaCoord' => 'area3',
                'fecVincCoord' => '2018-05-08',
                'acuerNomCoord' => 'n/a'
            ]
        ];
        
        DB::table('coordinadores')->insert($datos);
    }
}
