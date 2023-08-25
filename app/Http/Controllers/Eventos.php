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
    
    public function actualizar(Request $r, $id, $sem){
        $evento = Evento::findOrFail($id);
        $evento->codEvento = $id;
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
        return redirect()->route('gest_semillero', $sem)->with(['success' => 'Evento actualizado exitosamente'])->withInput();
    }

    public function eliminar($id, $sem){
        $evento = Evento::findOrFail($id);
        $evento->delete();
        return redirect()->route('gest_semillero', $sem)->with(['success' => 'Evento eliminado exitosamente'])->withInput();
    }
}
