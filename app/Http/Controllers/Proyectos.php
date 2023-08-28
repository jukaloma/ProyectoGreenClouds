<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proyecto;
use App\Models\Semillerista;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Dompdf\Dompdf;

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
    
    public function actualizar(Request $r, $id){
        $proyecto = Proyecto::findOrFail($id);
        if ($r->hasFile('fileProp')) {
            if (Storage::exists($proyecto->propProy)) {
                Storage::delete($proyecto->propProy);
            }
            $propPath = $r->file('fileProp')->store('Proyectos/propuestas','public') ;
        }else{
            $propPath = $proyecto->propProy;
        }
        if ($r->hasFile('fileProy')) {
            if (Storage::exists($proyecto->finProy)) {
                Storage::delete($proyecto->finProy);    
            }
            $proyPath = $r->file('fileProy')->store('Proyectos/proyectos','public') ;
        }else{
            $proyPath = $proyecto->finProy;
        }
        $proyecto->codProy = $id;
        $proyecto->titProy = $r->input('titulo');
        $proyecto->tipProy = $r->input('selTipo');
        $proyecto->estProy = $r->input('selEstado');
        $proyecto->fecIniProy = $r->input('fechaIni');
        $proyecto->fecFinProy = $r->input('fechaFin');
        $proyecto->propProy = $propPath;
        $proyecto->finProy = $proyPath;
        $proyecto->save();
        return redirect()->route('gest_semillero', $proyecto->semillero)->with(['success' => 'Proyecto actualizado exitosamente'])->withInput();
    }

    public function eliminar($id){
        $proyecto = Proyecto::findOrFail($id);
        Semillerista::where('proyecto', $proyecto->codProy)->update(['proyecto' => null]);
        $sem = $proyecto->semillero;
        $proyecto->delete();
        return redirect()->route('gest_semillero', $sem)->with(['success' => 'Proyecto eliminado exitosamente'])->withInput();
    }

    public function pdf($id){
        $proyecto = Proyecto::findOrFail($id);
        
        $view = View::make('pdf.proyecto', ['proyecto' => $proyecto]);
        $html = $view->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return $dompdf->stream('Reporte '.$proyecto->titProy.'.pdf');
    }
}
