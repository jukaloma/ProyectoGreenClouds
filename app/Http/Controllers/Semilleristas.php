<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Semillerista;
use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Dompdf\Dompdf;

class Semilleristas extends Controller
{
    public function signup(){
        return view('Signup.signup_semillerista');
    }

    public function registrar(Request $r){
        $pic = $r->file('filePic');
        $rep = $r->file('fileRep');
        $repPath = $rep->store('Semilleristas/Reportes/','public') ;
        $picPath = $pic->store('Semilleristas/fotos/','public') ;
        $semillerista = new Semillerista();
        $semillerista->codSemillerista = $r->input('txtCod');
        $semillerista->nomSemillerista = $r->input('txtNom');
        $semillerista->dirSemillerista = $r->input('txtDir');
        $semillerista->telSemillerista = $r->input('txtTel');
        $semillerista->emailSemillerista = $r->input('txtEmail');
        $semillerista->sexSemillerista = $r->input('rdSex');
        $semillerista->fecNacSemillerista = $r->input('txtFecNac');
        $semillerista->semSemillerista = $r->input('selSems');
        $semillerista->picSemillerista = $picPath;
        $semillerista->repMatricula = $repPath;
        $semillerista->progSemillerista = $r->input('selProg');
        $semillerista->fecVincSemillerista = $r->input('txtFecVinc');
        $semillerista->estSemillerista = $r->input('rdEst');
        $semillerista->semillero = $r->input('selSem');
        $semillerista->save();
        return redirect()->route('gest_semillero', $semillerista->semillero)->with(['success' => 'Cuenta creada exitosamente'])->withInput();
    }

    public function actualizar(Request $r, $id){
        $semillerista = Semillerista::findOrFail($id);
        if ($r->hasFile('filePic')) {
            if (Storage::exists($semillerista->picSemillerista)) {
                Storage::delete($semillerista->picSemillerista);
            }
            $picPath = $r->file('filePic')->store('Semilleristas/fotos/','public') ;
        }else{
            $picPath = $semillerista->picSemillerista;
        }
        if ($r->hasFile('fileRep')) {
            if (Storage::exists($semillerista->repMatricula)) {
                Storage::delete($semillerista->repMatricula);
            }
            $repPath = $r->file('fileRep')->store('Semilleristas/Reportes/','public') ;
        }else{
            $repPath = $semillerista->repMatricula;
        }
        $semillerista->codSemillerista = $id;
        $semillerista->nomSemillerista = $r->input('txtNom');
        $semillerista->dirSemillerista = $r->input('txtDir');
        $semillerista->telSemillerista = $r->input('txtTel');
        $semillerista->emailSemillerista = $r->input('txtEmail');
        $semillerista->sexSemillerista = $r->input('rdSex');
        $semillerista->fecNacSemillerista = $r->input('txtFecNac');
        $semillerista->semSemillerista = $r->input('selSems');
        $semillerista->picSemillerista = $picPath;
        $semillerista->repMatricula = $repPath;
        $semillerista->progSemillerista = $r->input('selProg');
        $semillerista->fecVincSemillerista = $r->input('txtFecVinc');
        $semillerista->estSemillerista = $r->input('rdEst');
        $semillerista->proyecto = $r->input('selProy');
        $semillerista->save();
        return redirect()->route('gest_semillero', $semillerista->semillero)->with(['success' => 'Cuenta actualizada exitosamente'])->withInput();
    }

    public function eliminar($id){
        $semillerista = Semillerista::findOrFail($id);
        $sem = $semillerista->semillero;
        $semillerista->delete();
        return redirect()->route('gest_semillero', $sem)->with(['success' => 'Semillerista eliminado exitosamente'])->withInput();
    }

    public function pdf($id){
        $semillerista = Semillerista::findOrFail($id);
        
        $view = View::make('pdf.semillerista', ['semillerista' => $semillerista]);
        $html = $view->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return $dompdf->stream('Reporte '.$semillerista->nomSemillerista.'.pdf');
    }
}
