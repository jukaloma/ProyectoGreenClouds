<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Evento;

class Eventos extends Controller
{    
    public function registrar(Request $r, $id){
        $evento = new Evento();
        $evento->nomEvento = $r->input('nombre');
        $evento->descEvento = $r->input('descripcion');
        $evento->fecIniEvento = $r->input('fechaIni');
        $evento->fecFinEvento = $r->input('fechaFin');
        $evento->lugarEvento = $r->input('lugar');
        $evento->tipoEvento = $r->input('selTipo');
        $evento->modEvento = $r->input('rdMod');
        $evento->clasEvento = $r->input('selClasificacion');
        $evento->obsEvento = $r->input('observaciones');
        $evento->save();
        return redirect()->route('gest_semillero', $id)->with(['success' => 'Evento creado exitosamente'])->withInput();
    }
}
