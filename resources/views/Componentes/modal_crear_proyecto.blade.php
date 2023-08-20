<div id="modal_crear_proyecto" class="modal" onclick="closeModal('modal_crear_proyecto')">
		<div class="modal-content" onclick="event.stopPropagation();">
			<div class="form-close-container">
				<button class="close-modal" onclick="closeModal('modal_crear_proyecto')"><i class="fa-solid fa-xmark"></i></button>
			</div>
			<div class="form-title">
				<h4>Crear Proyecto</h4>
			</div>
			<div class="container mt-3 mb-3">
				<form class="wrap-form-signup100" action="{{ route('reg_proyecto', $id) }}" id="signup_form" enctype="multipart/form-data" method="POST">
					@csrf
					
                    <div class="form_section1" id="form_section1">
						
						<div class="wrap-input100">
                            <input class="input100" type="text" name="titulo" placeholder="Título Proyecto *" required>
                            <span class="focus-input100"></span>
                        </div>

						<div class="wrap-input100">
                            <select class="input100" aria-label="Tipo" name="selTipo" placeholder="Tipo" required>
                                <option value="" selected disabled>Elija el tipo de proyecto *</option>
                                <option value="investigacion">investigación</option>
                                <option value="innovacion">innovación</option>
                                <option value="desarrollo">desarrollo</option>
                                <option value="emprendimiento">emprendimiento</option>
                            </select>
                            <span class="focus-input100"></span>
                        </div>

						<div class="wrap-input100">
                            <select class="input100" aria-label="Estado" name="selEstado" placeholder="Estado" required>
                                <option value="" selected disabled>Elija el Estado del proyecto *</option>
                                <option value="propuesta">Propuesta</option>
                                <option value="en curso">En Curso</option>
                                <option value="finalizado">Finalizado</option>
                            </select>
                            <span class="focus-input100"></span>
                        </div>

						<div class="wrap-input100-date">
                            <label class="form-check-label" for="fechaIni">Fecha de Inicio: *</label>
                            <input class="form-date-input" type="date" name="fechaIni" id="fechaIni" required>
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                    <div class="form_section1" id="form_section1">
						<div class="wrap-input100-date">
                            <label class="form-check-label" for="fechaFin">Fecha de Finalización:</label>
                            <input class="form-date-input" type="date" name="fechaFin" id="fechaFin">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100">
                            <label for="repmat" class="input100">
                                <i class="fa fa-cloud-upload"></i> 
                                <div class="input-text">
                                    Cargar Propuesta *
                                </div>
                            </label>
                            <input id="repmat" type="file" name="fileProp" placeholder="Propuesta" style="display:none;" onchange="fileUploaded(this)" required>
                        </div>

                        <div class="wrap-input100">
                            <label for="repmat" class="input100">
                                <i class="fa fa-cloud-upload"></i> 
                                <div class="input-text">
                                    Cargar Proyecto final
                                </div>
                            </label>
                            <input id="repmat" type="file" name="fileProy" placeholder="Foto" style="display:none;" onchange="fileUploaded(this)">
                        </div>
					</div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn col-md-5">Crear</button>
                    </div>
				</form>
			</div>
		</div>
	</div>