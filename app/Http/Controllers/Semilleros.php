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
        if ($r->hasFile('logo')) {
            Storage::delete($semillero->logoSemillero);    
            $logoPath = $r->file('logo')->store('Semilleros/logos', 'public');
        }else {
            $logoPath = $semillero->logoSemillero;
        }
        if ($r->hasFile('presentacion')) {
            Storage::delete($semillero->presSemillero);    
            $presPath = $r->file('presentacion')->store('Semilleros/presentaciones', 'public');
        }else {
            $presPath = $semillero->presSemillero;
        }
        if ($r->hasFile('resolucion')) {
            Storage::delete($semillero->resCreaSemillero);
            $resPath = $r->file('resolucion')->store('Semilleros/resoluciones', 'public');
        }else {
            $resPath = $semillero->resCreaSemillero;
        }
        $semillero->nomSemillero = $id;
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

    public function eliminar($id){
        $semillero = Semillero::findOrFail($id);
        $semillero->delete();
        return redirect()->route('main_dir');
    }
}
