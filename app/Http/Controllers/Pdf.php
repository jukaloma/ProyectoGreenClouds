<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class Pdf extends Controller
{   
    public function semilleroPdf($id) {
        $semillero = Semillero::findOrFail($id);
        
        $view = View::make('pdf.semillero', ['semillero' => $semillero]);
        $html = $view->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return $dompdf->stream('semillero.pdf');
    }
}
