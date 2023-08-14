<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Director;
use App\Models\Semillero;

class DirectorController extends Controller
{
    public function authPass(Request $r)
    {
        $contrasenaIngresada = $r->input('txtPassDir');

        if ($contrasenaIngresada == 'milo') {
            return view('Signup.signup_director');
        } else {
            $error = 'Contraseña incorrecta';
            return redirect()->back()->withErrors($error)->withInput();
        }
    }

    public function registrar(Request $r){
        $pic = $r->file('filePic');
        $picPath = $pic->store('Semilleristas/fotos/','public') ;
        $director = new Director();
        $director->nomDir = $r->input('txtNom');
        $director->emailDir = $r->input('txtEmail');
        $director->telDir = $r->input('txtTel');
        $director->picDir = $picPath;
        $director->usuDir = $r->input('txtUsu');
        $director->passDir = $r->input('txtPass');
        $director->save();
        return redirect()->to('/')->with(['success' => 'Cuenta creada exitosamente'])->withInput();
    }

    public function mainDir(){
        $semilleros = DB::table('semilleros')->get();
        return view('main', ['semilleros' => $semilleros]);
    }
}
