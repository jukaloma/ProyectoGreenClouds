<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proyecto;

class Proyectos extends Controller
{
    public function registrar(Request $r, $id){
        $proyecto = new Proyecto();
        $prop = $r->file('fileProp');
        $propPath = $prop->store('Proyectos/propuestas','public') ;
        $proy = $r->file('fileProy');
        $proyPath = "";
        if ($proy) {
            $proyPath = $proy->store('Proyectos/proyectos','public') ;
        }
        $proyecto->titProy = $r->input('titulo');
        $proyecto->tipProy = $r->input('selTipo');
        $proyecto->estProy = $r->input('selEstado');
        $proyecto->fecIniProy = $r->input('fechaIni');
        $proyecto->fecFinProy = $r->input('fechaFin');
        $proyecto->propProy = $propPath;
        $proyecto->finProy = $proyPath;
        $proyecto->semillero = $id;
        $proyecto->save();
        return redirect()->route('gest_semillero', $id)->with(['success' => 'Proyecto creado exitosamente'])->withInput();
    }
}
