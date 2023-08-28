<!DOCTYPE html>
<html>
<head>
    <title>Reporte del Semillero: {{ $semillero->nomSemillero }}</title>
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
		$coordinador = DB::table('coordinadores')->where('semillero', $semillero->codSemillero)->first();
		$proyectos = DB::table('proyectos')->where('semillero', $semillero->codSemillero)->get();
		$semilleristas = DB::table('semilleristas')->where('semillero', $semillero->codSemillero)->get();
    @endphp
    <h3>Reporte del Semillero: {{ $semillero->nomSemillero }}</h3>
    
    <h4>Información del Semillero</h4>
    <p>Código: {{ $semillero->codSemillero }}</p>
    <p>Nombre: {{ $semillero->nomSemillero }}</p>
    <p>Correo: {{ $semillero->emailSemillero }}</p>
    <p>Descripción: {{ $semillero->descSemillero }}</p>
    <p>Fecha de creación: {{ $semillero->fecCreaSemillero }}</p>
    @if ($coordinador)
        <p>Coordinador: {{ $coordinador->nomCoord }}</p>
    @else
        <p>Coordinador: Aún no se ha asignado un coordinador para este semillero</p>
    @endif
    <br>    
    <h2>Proyectos del Semillero</h2>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Título</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Finalización</th>
            </tr>
        </thead>
        @foreach ($proyectos as $proyecto)
        <tbody>
            <tr>
                <td>{{ $proyecto->codProy }}</td>
                <td>{{ $proyecto->titProy }}</td>
                <td>{{ $proyecto->tipProy }}</td>
                <td>{{ $proyecto->estProy }}</td>
                <td>{{ $proyecto->fecIniProy }}</td>
                @if($proyecto->fecFinProy)
                    <td>{{ $proyecto->fecFinProy }}</td>
                @else
                    <td>Aún no hay fecha definida</td>
                @endif
            </tr>
        </tbody>
        @endforeach
    </table>
    
    <h2>Integrantes del Semillero</h2>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Programa</th>
                <th>Fecha de Vinculación</th>
                <th>Proyecto</th>
                <th>Estado</th>
            </tr>
        </thead>
        @foreach ($semilleristas as $semillerista)
        <tbody>
            <tr>
                <td>{{ $semillerista->codSemillerista }}</td>
                <td>{{ $semillerista->nomSemillerista }}</td>
                <td>{{ $semillerista->telSemillerista }}</td>
                <td>{{ $semillerista->emailSemillerista }}</td>
                <td>{{ $semillerista->progSemillerista }}</td>
                <td>{{ $semillerista->fecVincSemillerista }}</td>
                @if($semillerista->proyecto)
                    <td>{{ $semillerista->proyecto }}</td>
                @else
                    <td>Sin proyecto asignado</td>
                @endif
                <td>{{ $semillerista->estSemillerista }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>
