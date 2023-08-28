<!DOCTYPE html>
<html>
<head>
    <title>Reporte del Evento: {{ $evento->nomEvento }}</title>
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
        $participaciones = [];
        $proyectos = [];
    @endphp
    <h3>Reporte del Evento: {{ $evento->nomEvento }}</h3>
    
    <h4>Información del Proyecto</h4>
    <p>Código: {{ $evento->codEvento }}</p>
    <p>Nombre: {{ $evento->nomEvento }}</p>
    <p>Fecha de Inicio: {{ $evento->fecIniEvento }}</p>
    <p>Fecha de Finalización: {{ $evento->fecFinEvento }}</p>
    <p>Lugar: {{ $evento->lugarEvento }}</p>
    <p>Tipo: {{ $evento->tipoEvento }}</p>
    <p>Modalidad: {{ $evento->modEvento }}</p>
    <p>Clasificación: {{ $evento->clasEvento }}</p>
    <br>
    <table>
        <thead>
            <tr>
                <th>Descripción</th>
                <th>Observaciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $evento->descEvento }}</td>
                <td>{{ $evento->obsEvento }}</td>
            </tr>
        </tbody>
    </table>
    <h2>Proyectos Inscritos</h2>
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
    <h2>Participaciones</h2>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Proyecto</th>
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
