@extends('template')


@section('title', 'Semilleros Udenar')


@section('content')
	@include('Componentes.header')
	<div id="modal_crear_semillero" class="modal" onclick="closeModal('modal_crear_semillero')">
		<div class="modal-content" onclick="event.stopPropagation();">
			<div class="form-close-container">
				<button class="modal-aux-button close-modal" onclick="closeModal('modal_crear_semillero')"><i class="fa-solid fa-xmark"></i></button>
			</div>
			<div class="form-title">
				<h4>Ingrese los datos del semillero</h4>
			</div>
			<div class="container mt-3 mb-3">
				<form class="wrap-form-signup100" action="{{ route('reg_semillero') }}" id="signup_form" enctype="multipart/form-data" method="POST">
					@csrf
					
                    <div class="form_section1" id="form_section1">
						<div class="mb-3">
							<label for="nombre" class="form-label">Nombre del Semillero:</label>
							<input type="text" class="form-control" id="nombre" name="nombre" required>
						</div>

						<div class="mb-3">
							<label for="correo" class="form-label">Correo del Semillero:</label>
							<input type="email" class="form-control" id="correo" name="correo" required>
						</div>

						<div class="mb-3">
							<label for="logo" class="form-label">Logo del Semillero:</label>
							<input type="file" class="form-control" id="logo" name="logo" accept="image/*" required>
						</div>

						<div class="mb-3">
							<label for="fecha" class="form-label">Fecha de Creación:</label>
							<input type="date" class="form-control" id="fecha" name="fecha" required>
						</div>

						<div class="mb-3">
							<label for="presentacion" class="form-label">Presentación (PDF):</label>
							<input type="file" class="form-control" id="presentacion" name="presentacion" accept=".pdf" required>
						</div>

						<div class="mb-3">
							<label for="resolucion" class="form-label">Resolución de Creación (PDF):</label>
							<input type="file" class="form-control" id="resolucion" name="resolucion" accept=".pdf" required>
						</div>

						<div class="mb-3">
							<label for="selLinea" class="form-label">Línea de Investigación:</label>
							<select class="js-example-basic-single js-states form-control" id="selLinea" name="selLinea">
								<option selected disabled>Seleccionar Línea</option>
								<option value="1">Ingeniería en Computación</option>
								<option value="2">Ciencia en Computación</option>
								<option value="3">Sistemas de Información</option>
								<option value="4">Tecnología de Información</option>
								<option value="5">Ingeniería de Software</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="selCoord" class="form-label">Asignar coordinador</label>
							<select class="js-example-basic-single js-states form-control" id="selCoord" name="selCoord">
								<option selected disabled>Seleccionar</option>
                                @foreach ($coordinadores as $coordinador)
                                    <option value="{{ $coordinador->idCoord }}">{{ $coordinador->nomCoord }}</option>
                                @endforeach
							</select>
						</div>
					</div>
                    <div class="form_section1" id="form_section1">
						<div class="mb-3">
							<label for="descripcion" class="form-label">Descripción:</label>
							<textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="4"></textarea>
						</div>

						<div class="mb-3">
							<label for="mision" class="form-label">Misión:</label>
							<textarea class="form-control" name="mision" id="mision" cols="30" rows="4"></textarea>
						</div>

						<div class="mb-3">
							<label for="vision" class="form-label">Visión:</label>
							<textarea class="form-control" name="vision" id="vision" cols="30" rows="4"></textarea>
						</div>

						<div class="mb-3">
							<label for="valores" class="form-label">Valores:</label>
							<textarea class="form-control" name="valores" id="valores" cols="30" rows="4"></textarea>
						</div>

						<div class="mb-3">
							<label for="objetivos" class="form-label">Objetivos:</label>
							<textarea class="form-control" name="objetivos" id="objetivos" cols="30" rows="4"></textarea>
						</div>
					</div>
					<button type="submit" class="btn btn-success">Crear Semillero</button>
				</form>
			</div>
		</div>
	</div>

	@include('Componentes.modal_act_semillero')
	
	<div class="container">
		<div class="user-if">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="card opt-dir-container">
						<div class="card-header">Panel de Control</div>
		
						<div class="card-body">
							<div class="mensaje mb-5">
								<h5 class="mb-3">¡Bienvenido, Ing. Luis Obeymar!</h5>
								<h6>¿Qué semillero desea gestionar?</h6>
							</div>

							<div class="dir options justify-content-center">
								@foreach($semilleros as $semillero)
								@php
								$coordinador = DB::table('coordinadores')->where('semillero', $semillero->codSemillero)->first();
								$coord = "";
								@endphp
								@if($coordinador)
									@php
									$coord = $coordinador->idCoord;
									@endphp
								@endif
								<div class="card card-item mx-2 mb-3">
									<a href="{{ route('gest_semillero', $semillero->codSemillero) }}" class="img-container">
										<img src="{{ asset('storage/' . $semillero->logoSemillero) }}" class="card-img-top" alt="logo {{ $semillero->nomSemillero}}">
										<div class="overlay">
											<span>Gestionar</span>
										</div>
									</a>
									<div class="elipsis">
										<a href=""  id="dropdownMenuButton" data-toggle="dropdown">
											<i class="fa-solid fa-ellipsis"></i>
										</a>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item text-secondary" href="{{ route('pdf_semillero', $semillero->codSemillero) }}">Generar Reporte</a>
										</div>
									</div>
									<hr>
									<div class="card-body">
										<div class="op-semilleros">
											<a href="#" class="op-link mx-4" id="act_semillero">
												<i class="fa-solid fa-pen-to-square" data-target="modal_act_semillero" onclick="openModal('modal_act_semillero')" data-parametro="{{ json_encode($semillero) }}" coord="{{ $coord }}"></i>
											</a>
											<a href="{{ route('del_semillero', $semillero->codSemillero) }}" class="op-link mx-4"><i class="fa-solid fa-trash-can"></i></a>
										</div>
									</div>
								</div>
								@endforeach
								<a href="#" class="card card-item mx-2 mb-3 icon-only" style="width: 202px;" data-target="modal_crear_semillero" onclick="openModal('modal_crear_semillero')">
									<div class="img-container">
										<i class="fa-solid fa-square-plus fa-2xl card-img-top"></i>
									</div>
									<hr class="hr-line">
									<div class="card-body">
										<h7>Crear Semillero</h7>
									</div>
								</a>
							</div>					
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		@if(session('success'))
			<script>
				Swal.fire({
					icon: 'success',
					title: 'Éxito',
					text: '{{ session('success') }}'
				});
			</script>
		@endif
@endsection