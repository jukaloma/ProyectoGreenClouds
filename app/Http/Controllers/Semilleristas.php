<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Semillerista;
use App\Models\Usuario;

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
        return redirect()->to('/')->with(['success' => 'Cuenta creada exitosamente'])->withInput();
    }
}
