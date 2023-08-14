@extends('template')


@section('title', 'Semilleros Udenar')


@section('content')
	@include('Componentes.header')
	<div id="modal_crear_semillero" class="modal" onclick="closeModal('modal_crear_semillero')">
		<div class="modal-content" onclick="event.stopPropagation();">
			<div class="form-close-container">
				<button class="close-modal" onclick="closeModal('modal_crear_semillero')"><i class="fa-solid fa-xmark"></i></button>
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
							<label for="linea_investigacion" class="form-label">Línea de Investigación:</label>
							<input type="text" class="form-control" id="linea_investigacion" name="linea_investigacion" required>
						</div>

						<div class="mb-3">
							<label for="id_label_single" class="form-label">Asignar coordinador</label>
								<select class="js-example-basic-single js-states form-control" id="selCoord">
									<option selected>Seleccionar</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
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

	@php 
		$parametro=0;
		$sem=0
	@endphp
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
								<div class="card card-item mx-2 mb-3">
									<a href="semilleros" class="img-container">
										<img src="images/tecnopazifico.jpg" class="card-img-top" alt="logo tecnopazifico">
										<div class="overlay">
											<span>Gestionar</span>
										</div>
									</a>
									<hr>
									<div class="card-body">
										<div class="op-semilleros">
											<a href="#" class="op-link mx-4">
												<i class="fa-solid fa-pen-to-square" data-target="modal_act_semillero" onclick="openModal('modal_act_semillero')" data-parametro="{{ 1 }}"></i>
											</a>
											<a href="#" class="op-link mx-4"><i class="fa-solid fa-trash-can"></i></a>
										</div>
									</div>
								</div>
								
								
								<div class="card card-item mx-2 mb-3">
									<a href="semilleros" class="img-container">
										<img src="images/logo_1.png" class="card-img-top" alt="logo greenclouds">
										<div class="overlay">
											<span>Gestionar</span>
										</div>
									</a>
									<hr>
									<div class="card-body">
										<div class="op-semilleros">
											<a href="#" class="op-link mx-4">
												<i class="fa-solid fa-pen-to-square" data-target="modal_act_semillero" onclick="openModal('modal_act_semillero')" data-parametro="{{ 2 }}"></i>
											</a>
											<a href="#" class="op-link mx-4"><i class="fa-solid fa-trash-can"></i></a>
										</div>
									</div>
								</div>

								<div class="card card-item mx-2 mb-3">
									<a href="semilleros" class="img-container">
										<img src="images/logo_willa.png" alt="logo willamuru" class="card-img-top">
										<div class="overlay">
											<span>Gestionar</span>
										</div>
									</a>
									<hr>
									<div class="card-body">
										<div class="op-semilleros">
											<a href="#" class="op-link mx-4">
												<i class="fa-solid fa-pen-to-square" data-target="modal_act_semillero" onclick="openModal('modal_act_semillero')" data-parametro="{{ 3 }}"></i>
											</a>
											<a href="#" class="op-link mx-4"><i class="fa-solid fa-trash-can"></i></a>
										</div>
									</div>
								</div>

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
							<div class="dir options justify-content-center">
								@foreach($semilleros as $semillero)
									<div class="card card-item mx-2 mb-3">
										<a href="{{ route('gest_semillero', $semillero->nomSemillero) }}" class="img-container">
											<img src="{{ asset('storage/' . $semillero->logoSemillero) }}" class="card-img-top" alt="logo {{ $semillero->nomSemillero}}">
											<div class="overlay">
												<span>Gestionar</span>
											</div>
										</a>
										<hr>
										<div class="card-body">
											<div class="op-semilleros">
												<a href="#" class="op-link mx-4">
													<i class="fa-solid fa-pen-to-square" data-target="modal_act_semillero" onclick="openModal('modal_act_semillero')" data-parametro="{{ json_encode($semillero) }}"></i>
												</a>
												<a href="#" class="op-link mx-4"><i class="fa-solid fa-trash-can"></i></a>
											</div>
										</div>
									</div>
								@endforeach
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