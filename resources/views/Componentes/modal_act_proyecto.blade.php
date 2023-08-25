<div id="modal_act_proyecto" class="modal" onclick="closeModal('modal_act_proyecto')">
		<div class="modal-content" onclick="event.stopPropagation();">
			<div class="form-close-container">
				<button class="close-modal" onclick="closeModal('modal_act_proyecto')"><i class="fa-solid fa-xmark"></i></button>
			</div>
			<div class="form-title">
				<h4>Actualizar Proyecto</h4>
			</div>
			<div class="container mt-3 mb-3">
				<form class="wrap-form-signup100" id="signup_form" enctype="multipart/form-data" method="POST">
					@csrf
					
                    <div class="form_section1" id="form_section1">
						
						<div class="wrap-input100">
                            <input class="input100" type="text" name="titulo" id="titulo" placeholder="Título Proyecto *" required>
                            <span class="focus-input100"></span>
                        </div>

						<div class="wrap-input100">
                            <select class="input100" aria-label="Tipo" name="selTipo" id="selTipo" placeholder="Tipo" required>
                                <option value="" selected disabled>Elija el tipo de proyecto *</option>
                                <option value="investigacion">investigación</option>
                                <option value="innovacion">innovación</option>
                                <option value="desarrollo">desarrollo</option>
                                <option value="emprendimiento">emprendimiento</option>
                            </select>
                            <span class="focus-input100"></span>
                        </div>

						<div class="wrap-input100">
                            <select class="input100" aria-label="Estado" name="selEstado" id="selEstado" placeholder="Estado" required>
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

                        <div class="current-file">
                            <a href="" id="propuesta"><i class="fa-solid fa-eye"></i>Ver Propuesta Actual</a>
                        </div>
                        <div class="wrap-input100">
                            <label for="fileProp" class="input100">
                                <i class="fa fa-cloud-upload"></i> 
                                <div class="input-text">
                                    Nueva Propuesta
                                </div>
                            </label>
                            <input id="fileProp" type="file" name="fileProp" placeholder="Propuesta" style="display:none;" onchange="fileUploaded(this)">
                        </div>

                        <div class="current-file">
                            <a id="proyectoFinal"><i class="fa-solid fa-eye"></i>Ver Proyecto Final Actual</a>
                        </div>
                        <div class="wrap-input100">
                            <label for="fileProy" class="input100">
                                <i class="fa fa-cloud-upload"></i> 
                                <div class="input-text">
                                    Nuevo Proyecto final
                                </div>
                            </label>
                            <input id="fileProy" type="file" name="fileProy" placeholder="Proyecto final" style="display:none;" onchange="fileUploaded(this)">
                        </div>
					</div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn col-md-5">Actualizar</button>
                    </div>
				</form>
			</div>
		</div>
	</div>