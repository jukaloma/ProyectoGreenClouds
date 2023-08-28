<!DOCTYPE html>
<html>
<head>
    <title>Reporte del Semillerista: {{ $semillerista->nomSemillerista }}</title>
	<link rel="stylesheet" type="text/css" href="css/pdf.css">
    <style>
        h3{
            text-align: center;
        }

        table{
            text-align: center;
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    @php
		$proyecto = DB::table('proyectos')->where('codProy', $semillerista->proyecto)->first();
        $participaciones = [];
    @endphp
    <h3>Reporte del Semillerista: {{ $semillerista->nomSemillerista }}</h3>
    
    <h4>Información del Semillerista</h4>
    <p>Código: {{ $semillerista->codSemillerista }}</p>
    <p>Nombre: {{ $semillerista->nomSemillerista }}</p>
    <p>Dirección: {{ $semillerista->dirSemillerista }}</p>
    <p>Correo: {{ $semillerista->emailSemillerista }}</p>
    <p>Sexo: {{ $semillerista->sexSemillerista }}</p>
    <p>Fecha de Nacimiento: {{ $semillerista->fecNacSemillerista }}</p>
    <p>Semestre: {{ $semillerista->semSemillerista }}</p>
    <p>Programa: Ing. {{ $semillerista->progSemillerista }}</p>
    <p>Fecha de Vinculación: {{ $semillerista->fecVincSemillerista }}</p>
    <p>Estado: {{ $semillerista->estSemillerista }}</p>
    <p>Semillero: {{ $semillerista->semillero }}</p>
    @if($proyecto)
        <p>Proyecto: {{ $proyecto->titProy }}</p>
    @else
        <p>Proyecto: Aún no está inscrito a un proyecto</p>
    @endif
</body>
</html>
