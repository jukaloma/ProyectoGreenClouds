<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proyecto;

class Proyectos extends Controller
{
    public function crear(Request $r){
        $proyecto = new Proyecto();
        $proyecto->nomDir = $r->input('txtNom');
        $proyecto->emailDir = $r->input('txtEmail');
        $proyecto->telDir = $r->input('txtTel');
        $proyecto->picDir = $picPath;
        $proyecto->usuDir = $r->input('txtUsu');
        $proyecto->passDir = $r->input('txtPass');
        $proyecto->save();
        return redirect()->to('/')->with(['success' => 'Cuenta creada exitosamente'])->withInput();
    }
}
