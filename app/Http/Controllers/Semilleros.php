<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Semillero;
use App\Models\Coordinador;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Dompdf\Dompdf;

class Semilleros extends Controller
{
    public function registrar(Request $r){
        $coordinador = Coordinador::findOrFail($r->input('selCoord'));
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
        $semillero->lineaSemillero = $r->input('selLinea');
        $semillero->descSemillero = $r->input('descripcion');
        $semillero->misSemillero = $r->input('mision');
        $semillero->visSemillero = $r->input('vision');
        $semillero->valSemillero = $r->input('valores');
        $semillero->objSemillero = $r->input('objetivos');
        $semillero->save();
        if ($coordinador) {
            $coordinador->semillero = $semillero->codSemillero;
        }
        return redirect()->to('/principal')->with(['success' => 'Semillero creado exitosamente'])->withInput();
    }
    
    public function actualizar(Request $r, $id){
        $semillero = Semillero::findOrFail($id);
        $coordinador = Coordinador::findOrFail($r->input('selCoord'));
        
        $delCoord = Coordinador::where('semillero', $semillero->codSemillero)->first();
        if ($delCoord) {
            $delCoord->semillero = null;
            $delCoord->save();
        }

        if ($r->hasFile('logo')) {
            if (Storage::exists($semillero->logoSemillero)) {
                Storage::delete($semillero->logoSemillero);
            }
            $logoPath = $r->file('logo')->store('Semilleros/logos', 'public');
        }else {
            $logoPath = $semillero->logoSemillero;
        }
        if ($r->hasFile('presentacion')) {
            if (Storage::exists($semillero->presSemillero)) {
                Storage::delete($semillero->presSemillero);    
            }
            $presPath = $r->file('presentacion')->store('Semilleros/presentaciones', 'public');
        }else {
            $presPath = $semillero->presSemillero;
        }
        if ($r->hasFile('resolucion')) {
            if (Storage::exists($semillero->resCreaSemillero)) {
                Storage::delete($semillero->resCreaSemillero);
            }
            $resPath = $r->file('resolucion')->store('Semilleros/resoluciones', 'public');
        }else {
            $resPath = $semillero->resCreaSemillero;
        }
        $semillero->nomSemillero = $r->input('nombreHidden');
        $semillero->emailSemillero = $r->input('correo');
        $semillero->logoSemillero = $logoPath;
        $semillero->fecCreaSemillero = $r->input('fecha');
        $semillero->presSemillero = $presPath;
        $semillero->resCreaSemillero = $resPath;
        $semillero->lineaSemillero = $r->input('selLinea');
        $semillero->descSemillero = $r->input('descripcion');
        $semillero->misSemillero = $r->input('mision');
        $semillero->visSemillero = $r->input('vision');
        $semillero->valSemillero = $r->input('valores');
        $semillero->objSemillero = $r->input('objetivos');
        $semillero->save();
        if ($coordinador) {
            $coordinador->semillero = $semillero->codSemillero;
            $coordinador->save();
        }
        return redirect()->to('/principal')->with(['success' => 'Semillero actualizado exitosamente'])->withInput();
    }

    public function gestionar($id){
        $semillero = Semillero::findOrFail($id);
        return view('Semilleros.main',
            compact('semillero','id'));
    }

    public function eliminar($id){
        $semillero = Semillero::findOrFail($id);
        // Semillerista::where('semillero', $semillero->codSemillero)->delete();
        $semillero->delete();
        return redirect()->route('main_dir');
    }

    public function pdf($id){
        $semillero = Semillero::findOrFail($id);
        
        $view = View::make('pdf.semillero', ['semillero' => $semillero]);
        $html = $view->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return $dompdf->stream('Reporte '.$semillero->nomSemillero.'.pdf');
    }
}
