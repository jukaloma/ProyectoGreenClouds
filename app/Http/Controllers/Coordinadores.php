<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Coordinador;

class Coordinadores extends Controller
{
    public function authPass(Request $r)
    {
        $contrasenaIngresada = $r->input('txtPassDir');

        if ($contrasenaIngresada == 'jukaloma') {
            return view('Signup.signup_coordinador');
        } else {
            $error = 'Contraseña incorrecta';
            return redirect()->back()->withErrors($error)->withInput();
        }
    }

    public function registrar(Request $r){
        $pic = $r->file('filePic');
        $acuerd = $r->file('fileAcuerd');
        $acuerdPath = $acuerd->store('Coordinadores/Acuerdos/','public') ;
        $picPath = $pic->store('Coordinadores/fotos/','public') ;
        $coordinador = new Coordinador();
        $coordinador->idCoord = $r->input('txtCod');
        $coordinador->nomCoord = $r->input('txtNom');
        $coordinador->dirCoord = $r->input('txtDir');
        $coordinador->telCoord = $r->input('txtTel');
        $coordinador->emailCoord = $r->input('txtEmail');
        $coordinador->sexCoord = $r->input('rdSex');
        $coordinador->picCoord = $picPath;
        $coordinador->fecNacCoord = $r->input('txtFecNac');
        $coordinador->progCoord = $r->input('selProg');
        $coordinador->areaCoord = $r->input('txtConoc');
        $coordinador->fecVincCoord = $r->input('txtFecVinc');
        $coordinador->acuerNomCoord = $acuerdPath;
        // $coordinador->semillero = $r->input('selSem');
        $coordinador->usuCoord = $r->input('txtUsu');
        $coordinador->passCoord = $r->input('txtPass');
        $coordinador->save();
        return redirect()->to('/')->with(['success' => 'Cuenta creada exitosamente'])->withInput();
    }
}
