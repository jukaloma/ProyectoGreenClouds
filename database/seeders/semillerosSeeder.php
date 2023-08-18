<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class semillerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos=[
            [
                'nomSemillero' => 'GreenClouds',
                'emailSemillero' => 'insistemas@udenar.edu.co',
                'logoSemillero' => 'Semilleros\logos\green-clouds.png',
                'descSemillero' => 'Semillero de investigación en Ingeniería de Sistemas y Computación de la Universidad de 
                Nariño - Extensión Ipiales',
                'misSemillero' => 'GREEN CLOUDS es un semillero fundamentado en las Ciencias de la Computación y la Ingeniería de 
                Sistemas que busca fomentar la cultura investigativa, trabajo en equipo, innovación y desarrollo 
                tecnológico mediante el fortalecimiento de competencias críticas que contribuyan a la generación de 
                ideas que se concreten en proyectos que beneficien a la región nariñense.',
                'visSemillero' => 'En el 2025 seremos reconocidos por la comunidad académica a nivel regional por ser un semillero que 
                fomenta fuertes capacidades investigativas en sus integrantes incorporando nuevos proyectos que 
                permitan la generación de conocimiento en el área de las Ciencias de la Computación y la Ingeniería de 
                Sistemas.',
                'valSemillero' => 'El Semillero de Investigación en la extensión de Ipiales se caracterizará por ser un grupo solido que 
                trabaje colectivamente por alcanzar sus objetivos, busque a través del estudio y la investigación ayudar 
                a solventar las necesidades que vive la comunidad día a día y además caracterizándose por poseer 
                valores y principios que representen su identidad.
                • Responsabilidad. 
                El Semillero busca fomentar en sus integrantes el alto sentido de compromiso con la 
                investigación, resaltando la responsabilidad en cada una de las actividades que realizan y en 
                pro de obtener los mejores resultados.
                • Espíritu Investigativo, analítico y crítico.
                Las capacidades de análisis y comprensión de las problemáticas que se presentan en la región 
                son las pautas iniciales para crear en los semilleristas un espíritu investigativo y critico que 
                despierte en ellos su curiosidad por buscar alternativas de solución a través de la Ingeniería y 
                la Computación permitiendo nacer nuevos intereses que generen conocimiento.
                • Transparencia 
                Este valor resalta la honestidad y ética con la que se realiza cada estudio, haciendo de cada 
                una, investigaciones innovadoras.
                • Trabajo en Equipo
                Este principio junto con la comunicación, consolidan factores claves al momento de compartir 
                ideas y opiniones de manera asertiva, atribuyen un sentido de pertenencia al semillero y 
                propician el trabajo armónico por alcanzar un objetivo que permita construir colectivamente 
                alternativas de solución más compactas y efectivas acorde a las necesidades del entorno.
                ',
                'objSemillero' => 'Objetivo General
                Implementar procesos investigativos encaminados al emprendimiento e innovación en el área de las 
                Ciencias de la Computación y la Ingeniería de Sistemas que conduzcan a la solución de las 
                problemáticas que se presentan en el municipio de Ipiales.
                Objetivos Específicos
                1. Introducir a los integrantes en la formación en investigación, emprendimiento empresarial, 
                innovación y desarrollo tecnológico, como ejes fundamentales y de aplicación en cualquier área 
                del conocimiento.
                2. Consolidar proyectos de investigación orientados a las diferentes problemáticas que presenta 
                la comunidad buscando el aprovechamiento de las nuevas tecnologías. 
                3. Fomentar el trabajo en equipo y la participación de los integrantes para el desarrollo de diversos 
                proyectos bajo las líneas de investigación establecidas.',
                'lineaSemillero' => 'Ingeniería en Computación, Ciencia en Computación, Sistemas de Información, Tecnología de Información, Ingeniería de Software',
                'presSemillero' => 'Semilleros\presentaciones\SEMILLERO IPIALES-2020.pdf',
                'fecCreaSemillero' => '2019-12-13',
                'resCreaSemillero' => 'Semilleros\resoluciones\Acuerdo Semillero Green Clouds.pdf',
            ],
            [
                'nomSemillero' => 'TecnoPazifico',
                'emailSemillero' => 'insistemas@udenar.edu.co',
                'logoSemillero' => 'Semilleros\logos\tecnopazifico.jpeg',
                'descSemillero' => 'n/a',
                'misSemillero' => 'n/a',
                'visSemillero' => 'n/a',
                'valSemillero' => 'n/a',
                'objSemillero' => 'n/a',
                'lineaSemillero' => 'n/a',
                'presSemillero' => 'n/a',
                'fecCreaSemillero' => '2019-12-13',
                'resCreaSemillero' => 'n/a',
            ],
            [
                'nomSemillero' => 'WillaMuru',
                'emailSemillero' => 'insistemas@udenar.edu.co',
                'logoSemillero' => 'Semilleros\logos\willamuru.jpeg',
                'descSemillero' => 'Semillero de investigación en Ingeniería de Sistemas y Computación de la Universidad de Nariño en  San Juan de Pasto',
                'misSemillero' => 'WillaMuru es un semillero que formará en investigación fundamentada en las Ciencias de la Computación y la Ingeniería de Sistemas, y fomentará la cultura en investigación, en emprendimiento empresarial, en innovación y desarrollo tecnológico, permitiendo la solución a problemáticas que se presentan en las comunidades en el contexto institucional y regional.',
                'visSemillero' => 'En el año 2024, WillaMuru será un semillero de investigación reconocido por la comunidad académica a nivel regional por el compromiso con la cultura investigativa, de emprendimiento empresarial, de innovación y desarrollo tecnológico.',
                'valSemillero' => '',
                'objSemillero' => 'Objetivo General
                Fomentar la cultura investigativa, de emprendimiento empresarial, de innovación y desarrollo tecnológico acorde con las necesidades y las problemáticas del municipio de Pasto aplicando los fundamentos teóricos y prácticos de las Ciencias de la Computación y la Ingeniería de Sistemas.
                
                Objetivos específicos
                1.	Introducir a los integrantes en la formación en investigación, emprendimiento empresarial, innovación y desarrollo tecnológico, como ejes fundamentales y de aplicación en cualquier área del conocimiento.
                2.	Propiciar espacios para que los integrantes desarrollen competencias investigativas en las diferentes fases del desarrollo de proyectos de investigación, de emprendimiento empresarial, de innovación y desarrollo tecnológico.
                3.	Fomentar el trabajo interdisciplinario institucional, regional, nacional e internacional para el desarrollo proyectos de investigación, de emprendimiento empresarial, de innovación y desarrollo tecnológico.
                4.	Fomentar el desarrollo de proyectos la investigación, de emprendimiento empresarial, de innovación y desarrollo tecnológico como un trabajo extracurricular.
                ',
                'lineaSemillero' => 'Ingeniería en Computación, Ciencia en Computación, Sistemas de Información, Tecnología de Información, Ingeniería de Software',
                'presSemillero' => 'Semilleros\presentaciones\Plantilla WM.pptx',
                'fecCreaSemillero' => '2019-10-20',
                'resCreaSemillero' => 'Semilleros\resoluciones\Acuerdo104Willamuru001.pdf',
            ]
        ];
        DB::table('semilleros')->insert($datos);
    }
}
