@extends('template')


@section('title', 'Semilleros Udenar')


@section('content')
@include('Componentes.header')
@if ($errors->any())
	<script>
		Swal.fire({
			icon: 'error',
			title: 'Error',
			text: '{{ $errors->first() }}',
		});
	</script>
@endif
@if(session('success'))
	<script>
		Swal.fire({
			icon: 'success',
			title: 'Éxito',
        	text: '{{ session('success') }}'
		});
	</script>
@endif
<section class="semilleros">
	<div class="l-navbar" id="l-nav-bar">
		<nav class="nav">
			<div class="nav-options"> 
				<div class="nav_list">					
					<a href="#content-dashboard" class="nav_link active"> 
						<i class="fa-solid fa-table"></i>
					</a>
					<a href="#content-proyectos" class="nav_link" id="link_proy"> 
						<i class="fa-solid fa-diagram-project"></i>
					</a> 
					<a href="#content-eventos" class="nav_link" id="link_event"> 
						<i class="fa-solid fa-calendar-days"></i>
					</a> 
					<a href="#content-semilleristas" class="nav_link" id="link_sems"> 
						<i class="fa-solid fa-users"></i>
					</a> 
					<!-- <a href="#content-dashboard" class="nav_link"> 
						<i class="fa-solid fa-list"></i>
					</a>  -->
				</div>
			</div> 
			<a href="{{ route('main_dir') }}" class="log-out"> 
				<i class="fa-solid fa-arrow-right-from-bracket"></i> 
			</a>
		</nav>
	</div>

	@include('Componentes.modal_crear_proyecto')
	@include('Componentes.modal_crear_evento')

    <div class="components">
        <div class="content">
			<div id="content-dashboard" class="content-item">
				<div class="content-item-title">
					<h4>{{ $semillero->nomSemillero }}</h4>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3 shadow">
						<div class="card">
							<div class="card-header">
								Proyectos
							</div>
							@php
								$proyectos = DB::table('proyectos')->where('semillero', $semillero->codSemillero)->get();
							@endphp
							<div class="card-body">
								@if ($proyectos->isEmpty())
									<div class="widget-null">
										<img src="{{ asset('images/crea-proy.png')}}" alt="">
										<p>Este semillero aún no tiene Proyectos.</p> <br>
										<button class="btn btn-success" data-target="modal_crear_proyecto" onclick="openModal('modal_crear_proyecto')">Crear proyecto</button>
									</div>
								@else
									<div class="owl-carousel owl-theme">
										@foreach ($proyectos as $proyecto)
											<div class="item">
												<div class="carousel-proy">
													{{ $proyecto->titProy }}
												</div>
											</div>
										@endforeach
									</div>
									<div class="login100-form-btn col-md-3 float-right mt-2" id="btn_proy">Ver Todos</div>
								@endif
							</div>
						</div>
					</div>

					<div class="col-md-6 mb-3">
						<div class="card">
							<div class="card-header">
								Eventos
							</div>
							@php
								$eventos = DB::table('eventos')->get();
							@endphp
							<div class="card-body">
								@if ($eventos->isEmpty())
									<div class="widget-null">
										<img src="{{ asset('images/crea-event.png')}}" alt="">
										<p>Este semillero aún no tiene Eventos. </p> <br>
										<button class="btn btn-success" data-target="modal_crear_evento" onclick="openModal('modal_crear_evento')">Crear evento</button>
									</div>
								@else
									<div class="owl-carousel owl-theme">
										@foreach ($eventos as $evento)
											<div class="item">
												<div class="carousel-proy">
													{{ $evento->nomEvento }}
													<br>
													{{ $evento->lugarEvento }}
													<br>
													fecha inicio: {{ $evento->fecIniEvento}}
													<br>
													fecha fin: {{ $evento->fecFinEvento}}
												</div>
											</div>
										@endforeach
									</div>
									<div class="login100-form-btn col-md-3 float-right mt-2" id="btn_event">Ver Todos</div>
								@endif
							</div>
						</div>
					</div>

					<div class="col-md-6 mb-3">
						<div class="card">
							<div class="card-header">
								Semilleristas
							</div>
							@php
								$semilleristas = DB::table('semilleristas')->where('semillero', $semillero->codSemillero)->get();
							@endphp
							<div class="card-body">
								@if ($semilleristas->isEmpty())
									<div class="widget-null">
										<img src="{{ asset('images/user-null.png')}}" alt="">
										<p>Aún no hay semilleristas vinculados a este semillero. </p> <br>
									</div>
								@else
									<div class="tabla-sems">
									<table class="table table-striped table-hover">
										<thead>
											<tr>
												<th scope="col">Código</th>
												<th scope="col">Nombre</th>
												<th scope="col">Correo</th>
												<th scope="col">Semestre</th>
												<th scope="col">Estado</th>
											</tr>
										</thead>
										<tbody>
											@foreach($semilleristas as $semillerista)
												<tr>
													<th scope="row">{{ $semillerista->codSemillerista }}</th>
													<td>{{ $semillerista->nomSemillerista }}</td>
													<td>{{ $semillerista->emailSemillerista }}</td>
													<td>{{ $semillerista->semSemillerista }}</td>
													<td>{{ $semillerista->estSemillerista }}</td>
												</tr>
											@endforeach
										</tbody>
									</table>
									</div>
									<div class="login100-form-btn col-md-3 float-right mt-2" id="btn_sems">Ver Todos</div>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div id="content-proyectos" class="content-item hidden">
				<div class="content-header">
					<div class="content-item-title">
						<h4>{{ $semillero->nomSemillero }}</h4><br>
						<h6 class="pl-2 pt-2"> Proyectos</h6> 
					</div>
					<div class="login100-form-btn col-md-2 mb-3" id="btn_sems">Agregar Proyecto</div>
				</div>
				<div class="card mx-2 mb-3">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th scope="col">Título</th>
								<th scope="col">Tipo</th>
								<th scope="col">Estado</th>
								<th scope="col">Fecha Inicio</th>
								<th scope="col">Fecha Fin</th>
								<th scope="col">Propuesta</th>
								<th scope="col">Proyecto final</th>
								<th scope="col">Opciones</th>
							</tr>
						</thead>
						<tbody>
							@if($proyectos->isEmpty())
								<tr>
									<td colspan="8" class="text-center">
										No hay proyectos registrados
									</td>
								</tr>
							@else
								@foreach($proyectos as $proyecto)
									<tr>
										<th scope="row" class="limited-column align-middle">{{ $proyecto->titProy }}</th>
										<td class="align-middle">{{ $proyecto->tipProy }}</td>
										<td class="align-middle">{{ $proyecto->estProy }}</td>
										<td class="align-middle">{{ $proyecto->fecIniProy }}</td>
										@if($proyecto->fecFinProy)
											<td class="align-middle">{{ $proyecto->fecFinProy }}</td>
										@else
											<td class="align-middle">n/a</td>
										@endif
										<td class="align-middle">
											<a href="{{ asset('storage/' . $proyecto->propProy) }}" target="_blank">Descargar Archivo</a>
										</td>
										@if($proyecto->finProy)
										<td class="align-middle">
											<a href="{{ asset('storage/' . $proyecto->finProy) }}" target="_blank">Descargar Archivo</a>
										</td>
										@else
											<td class="align-middle">n/a</td>
										@endif
										<td class="align-middle">
											<div class="opt-table pr-3">
												<a href="#" class="op-link">
													<i class="fa-solid fa-pen-to-square" data-target="modal_act_semillero" onclick="openModal('modal_act_semillero')" data-parametro="{{ json_encode($semillero) }}"></i>
												</a>
												<a href="{{ route('del_semillero', $semillero->codSemillero) }}" class="op-link">
													<i class="fa-solid fa-trash-can"></i>
												</a>
											</div>
										</td>
									</tr>
								@endforeach
							@endif
						</tbody>
					</table>
				</div>
			</div>
			<div id="content-eventos" class="content-item hidden">
				<div class="content-item-title">
					<h4>{{ $semillero->nomSemillero }}</h4>
					<h6 class="pl-2 pt-2">Eventos</h6>
				</div>
			</div>
			<div id="content-semilleristas" class="content-item hidden">
				<div class="content-item-title">
					<h4>{{ $semillero->nomSemillero }}</h4>
					<h6 class="pl-2 pt-2">Semilleristas</h6>
				</div>
			</div>
        </div>
    </div>

</section>	
@endsection