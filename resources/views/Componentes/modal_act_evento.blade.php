<div id="modal_act_evento" class="modal" onclick="closeModal('modal_act_evento')">
		<div class="modal-content" onclick="event.stopPropagation();">
			<div class="form-close-container">
				<button class="close-modal" onclick="closeModal('modal_act_evento')"><i class="fa-solid fa-xmark"></i></button>
			</div>
			<div class="form-title">
				<h4>Actualizar Evento</h4>
			</div>
			<div class="container mt-3 mb-3">
				<form class="wrap-form-signup100" id="signup_form" enctype="multipart/form-data" method="POST">
					@csrf
					
                    <div class="form_section1" id="form_section1">
						
						<div class="wrap-input100">
                            <input class="input100" type="text" name="nombre" id="nombre" placeholder="nombre Evento" required>
                            <span class="focus-input100"></span>
                        </div>
                        
						<div class="wrap-input100">
						<textarea class="input100 py-2" name="descripcion" id="descripcion" cols="30" rows="4" placeholder="Descripción" required></textarea>
                            <span class="focus-input100"></span>
                        </div>

						<div class="wrap-input100-date">
                            <label class="form-check-label" for="fechaIni">Fecha de Inicio:</label>
                            <input class="form-date-input" type="date" name="fechaIni" id="fechaIni" required>
                            <span class="focus-input100"></span>
                        </div>
                        
						<div class="wrap-input100-date">
                            <label class="form-check-label" for="fechaFin">Fecha de Finalización:</label>
                            <input class="form-date-input" type="date" name="fechaFin" id="fechaFin" required>
                            <span class="focus-input100"></span>
                        </div>
						
						<div class="wrap-input100">
                            <input class="input100" type="text" name="lugar" id="lugar" placeholder="lugar Evento" required>
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                    <div class="form_section1" id="form_section1">
						<div class="wrap-input100">
                            <select class="input100" aria-label="Tipo" name="selTipo" id="selTipo" placeholder="Tipo" required>
                                <option value="" selected disabled>Elija el tipo de evento</option>
                                <option value="congreso">congreso</option>
                                <option value="encuentro">encuentro</option>
                                <option value="seminario">seminario</option>
                                <option value="taller">taller</option>
                            </select>
                            <span class="focus-input100"></span>
                        </div>
                            
                        <div class="wrap-input100-radio">
                            <label for="rdMod1" class="form-check-label">Modalidad</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rdMod" id="rdMod1" value="presencial" checked>
                                <label class="form-check-label" for="rdMod1">
                                    <div class="form-radio-text">Presencial</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rdMod" id="rdMod2" value="virtual">
                                <label class="form-check-label" for="rdMod2">
                                    <div class="form-radio-text">Virtual</div>
                                </label>
                            </div>
                        </div>

						<div class="wrap-input100">
                            <select class="input100" aria-label="Clasificación" name="selClasificacion" id="selClasificacion" placeholder="Clasificación" required>
                                <option value="" selected disabled>Elija la clasificación del proyecto</option>
                                <option value="local">Local</option>
                                <option value="regional">Regional</option>
                                <option value="nacional">Nacional</option>
                                <option value="internacional">Internacional</option>
                            </select>
                            <span class="focus-input100"></span>
                        </div>
                        
						<div class="wrap-input100">
						<textarea class="input100 py-2" name="observaciones" id="observaciones" cols="30" rows="4" placeholder="Observaciones" required></textarea>
                            <span class="focus-input100"></span>
                        </div>
					</div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn col-md-5">Actualizar</button>
                    </div>
				</form>
			</div>
		</div>
	</div>