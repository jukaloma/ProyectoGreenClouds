<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Semillero;

class Semilleros extends Controller
{
    public function registrar(Request $r){
        $logo = $r->file('logo');
        $logoPath = $logo->store('Semilleros/logos','public') ;
        $pres = $r->file('presentacion');
        $res = $r->file('resolucion');
        $presPath = $pres->store('Semilleros/presentaciones/','public') ;
        $resPath = $res->store('Semilleros/resoluciones/','public') ;
        $semillero = new Semillero();
        $semillero->nomSemillero = $r->input('nombre');
        $semillero->emailSemillero = $r->input('correo');
        $semillero->logoSemillero = $logoPath;
        $semillero->fecCreaSemillero = $r->input('fecha');
        $semillero->presSemillero = $presPath;
        $semillero->resCreaSemillero = $resPath;
        $semillero->lineaSemillero = $r->input('linea_investigacion');
        $semillero->descSemillero = $r->input('descripcion');
        $semillero->misSemillero = $r->input('mision');
        $semillero->visSemillero = $r->input('vision');
        $semillero->valSemillero = $r->input('valores');
        $semillero->objSemillero = $r->input('objetivos');
        $semillero->save();
        return redirect()->to('/principal')->with(['success' => 'Semillero creado exitosamente'])->withInput();
    }
    
    public function actualizar(Request $r, $id){
        $semillero = Semillero::findOrFail($id);
        $logo = $r->file('logo');
        $pres = $r->file('presentacion');
        $res = $r->file('resolucion');
        $logoPath = $logo->store('Semilleros/logos','public') ;
        $presPath = $pres->store('Semilleros/presentaciones/','public') ;
        $resPath = $res->store('Semilleros/resoluciones/','public') ;
        $semillero->nomSemillero = $r->input('nombre');
        $semillero->emailSemillero = $r->input('correo');
        $semillero->logoSemillero = $logoPath;
        $semillero->fecCreaSemillero = $r->input('fecha');
        $semillero->presSemillero = $presPath;
        $semillero->resCreaSemillero = $resPath;
        $semillero->lineaSemillero = $r->input('linea_investigacion');
        $semillero->descSemillero = $r->input('descripcion');
        $semillero->misSemillero = $r->input('mision');
        $semillero->visSemillero = $r->input('vision');
        $semillero->valSemillero = $r->input('valores');
        $semillero->objSemillero = $r->input('objetivos');
        $semillero->save();
        return redirect()->to('/principal')->with(['success' => 'Semillero actualizado exitosamente'])->withInput();
    }

    public function gestionar($id){
        $semillero = Semillero::findOrFail($id);
        return view('Semilleros.main',
            compact('semillero','id'));
    }
}
