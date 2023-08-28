<div id="modal_act_semillero" class="modal" onclick="closeModal('modal_act_semillero')">
	<div class="modal-content" onclick="event.stopPropagation();">
		<div class="form-close-container">
			<button class="modal-aux-button close-modal" onclick="closeModal('modal_act_semillero')"><i class="fa-solid fa-xmark"></i></button>
		</div>
		<div class="form-title">
			<h4>Ingrese los datos del semillero</h4>
		</div>
		<div class="container mt-3 mb-3">
			<form class="wrap-form-signup100" action="{{ route('act_semillero','') }}" id="signup_form" enctype="multipart/form-data" method="POST">
				@csrf
				
                <div class="form_section1" id="form_section1">
					<div class="mb-3">
						<label for="nombre" class="form-label">Nombre del Semillero:</label>
						<input type="text" class="form-control" id="nombre" name="nombre" required disabled>
						<input type="hidden" class="form-control" id="nombreHidden" name="nombreHidden">
					</div>

					<div class="mb-3">
						<label for="correo" class="form-label">Correo del Semillero:</label>
						<input type="email" class="form-control" id="correo" name="correo" required>
					</div>

					<div class="mb-3">
						<label for="logo" class="form-label">Logo del Semillero:</label>
						<img class="act-logo" id="logo-preview" src="" alt="Logo" width="100" height="100">
						<input type="file" class="form-control" id="logo" name="logo" accept="image/*">
					</div>

					<div class="mb-3">
						<label for="fecha" class="form-label">Fecha de Creación:</label>
						<input type="date" class="form-control" id="fecha" name="fecha" required>
					</div>

					<div class="mb-3">
						<label for="presentacion" class="form-label">Presentación (PDF):</label>
						<input type="file" class="form-control" id="presentacion" name="presentacion" accept=".pdf">
					</div>

					<div class="mb-3">
						<label for="resolucion" class="form-label">Resolución de Creación (PDF):</label>
						<input type="file" class="form-control" id="resolucion" name="resolucion" accept=".pdf">
					</div>

					<div class="mb-3">
						<label for="selLinea" class="form-label">Línea de Investigación:</label>
						<select class="js-example-basic-single js-states form-control" id="selLinea" name="selLinea">
							<option selected>Seleccionar Línea</option>
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
								<option selected>Seleccionar</option>
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
						<textarea class="form-control" name="valores" id="valores" cols="30" rows="4" required></textarea>
					</div>

					<div class="mb-3">
						<label for="objetivos" class="form-label">Objetivos:</label>
						<textarea class="form-control" name="objetivos" id="objetivos" cols="30" rows="4"></textarea>
					</div>

				</div>
				<button type="submit" class="btn btn-success">Actualizar Semillero</button>
			</form>
		</div>
	</div>
</div>