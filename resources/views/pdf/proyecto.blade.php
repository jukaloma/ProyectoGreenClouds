<!DOCTYPE html>
<html>
<head>
    <title>Reporte del Proyecto: {{ $proyecto->titProy }}</title>
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
		$semilleristas = DB::table('semilleristas')->where('proyecto', $proyecto->codProy)->get();
        $participaciones = [];
    @endphp
    <h3>Reporte del Proyecto: {{ $proyecto->titProy }}</h3>
    
    <h4>Información del Proyecto</h4>
    <p>Código: {{ $proyecto->codProy }}</p>
    <p>Nombre: {{ $proyecto->titProy }}</p>
    <p>Correo: {{ $proyecto->tipProy }}</p>
    <p>Estado: {{ $proyecto->estProy }}</p>
    <p>Fecha de Inicio: {{ $proyecto->fecIniProy }}</p>
    @if($proyecto->fecFinProy)
        <p>Fecha de creación: {{ $semillero->fecCreaSemillero }}</p>
    @else
        <p>Fecha de creación: Sin determinar</p>
    @endif
    @foreach($semilleros as $semillero)
        @if($semillero->codSemillero == $proyecto->semillero)
            <p>Semillero: {{ $semillero->nomSemillero }}</p>
        @endif
    @endforeach
    <br>
    <h2>Semilleristas inscritos al proyecto</h2>
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
                <td>Ing. {{ $semillerista->progSemillerista }}</td>
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
    <h2>Participaciones en eventos</h2>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Evento</th>
                <th>Modalidad</th>
                <th>Calificación</th>
            </tr>
        </thead>
        @foreach ($participaciones as $participacion)
        <tbody>
            <tr>
                
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>
