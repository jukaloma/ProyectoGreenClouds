<div id="modal_crear_semillerista" class="modal" onclick="closeModal('modal_crear_semillerista'); modalBack()">
	<div class="modal-content" onclick="event.stopPropagation();">
		<div class="form-close-container">
			<button class="modal-aux-button close-modal" onclick="closeModal('modal_crear_semillerista'); modalBack()"><i class="fa-solid fa-xmark"></i></button>
		</div>
		<div class="form-modal-back">
			<button class="modal-aux-button modal-back" id="modal_back" onclick="modalBack()" style="display: none;"><i class="fa-solid fa-arrow-left"></i></button>
		</div>
		<div class="form-title">
			<h4>Crear Semillerista</h4>
		</div>
		<div class="container mt-3 mb-3">
            <form class="wrap-form-signup100" action="{{ route('reg_semillerista') }}" id="signup_form" enctype="multipart/form-data" method="POST">
                @csrf
                <span class="login100-form-title" id="signup_title">
                    1 / 2
                </span>
                <div class="form_section1" id="form_semillerista1">
                    <div class="signup-input-container" >
                        <div class="wrap-input100">
                            <input class="input100" type="text" name="txtCod" placeholder="Código">
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100">
                            <input class="input100" type="text" name="txtNom" placeholder="Nombre Completo">
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100">
                            <input class="input100" type="text" name="txtDir" placeholder="Dirección">
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100">
                            <input class="input100" type="text" name="txtTel" placeholder="Teléfono">
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100">
                            <input class="input100" type="email" name="txtEmail" placeholder="Correo" required>
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100-radio">
                            <label class="form-check-label">Sexo</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rdSex" id="rdSex1" value="M" checked>
                                <label class="form-check-label" for="rdSex1">
                                    <div class="form-radio-text">M</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rdSex" id="rdSex2" value="F">
                                <label class="form-check-label" for="rdSex2">
                                    <div class="form-radio-text">F</div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form_section1" id="form_semillerista1">
                    <div class="signup-input-container">
                        <div class="wrap-input100-date">
                            <label class="form-check-label" for="txtFecNac">Fecha de nacimiento</label>
                            <input class="form-date-input" type="date" name="txtFecNac" id="txtFecNac">
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100">
                            <select class="input100" aria-label="Semestre" name="selSems" placeholder="Semestre">
                                <option value="" selected disabled>Elija su semestre</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100">
                            <label for="foto" class="input100">
                                <i class="fa fa-cloud-upload"></i> 
                                <div class="input-text">
                                    Cargar foto
                                </div>
                            </label>
                            <input id="foto" type="file" name="filePic" placeholder="Foto" accept="image/*" style="display:none;" onchange="fileUploaded(this)">
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100">
                            <label for="repmat" class="input100">
                                <i class="fa fa-cloud-upload"></i> 
                                <div class="input-text">
                                    Cargar reporte de matrícula
                                </div>
                            </label>
                            <input id="repmat" type="file" name="fileRep" placeholder="Foto" style="display:none;" onchange="fileUploaded(this)">
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100">
                            <select class="input100" aria-label="Programa" name="selProg">
                                <option value="" selected disabled>Elija su programa</option>
                                <option value="Sistemas">Ing Sistemas</option>
                                <option value="Electronica">Ing Electrónica</option>
                                <option value="Civil">Ing Civil</option>
                            </select>
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100-date">
                            <label class="form-check-label" for="txtFecVinc">Fecha de vinculación</label>
                            <input class="form-date-input" type="date" name="txtFecVinc" id="txtFecVinc">
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                </div>
                <div class="form_section2" id="form_semillerista2" style="display: none;">
                    <div class="signup-input-container">                        
                        <div class="wrap-input100-radio">
                            <label class="form-check-label">Estado</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rdEst" id="rdEst1" value="Activo" checked>
                                <label class="form-check-label" for="rdSex1">
                                    <div class="form-radio-text">Activo</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rdEst" id="rdEst2" value="Inactivo">
                                <label class="form-check-label" for="rdSex2">
                                    <div class="form-radio-text">Inactivo</div>
                                </label>
                            </div>
                        </div>
                        
                        <div class="wrap-input100">
                            <input class="input100" type="text" name="txtUsu" placeholder="Usuario" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
                        
                        <div class="wrap-input100">
                            <input class="input100" type="password" name="txtPass" id="pass" placeholder="Contraseña">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="wrap-input100">
                            <input class="input100" type="password" name="txtPass2" id="pass2" placeholder="Repetir Contraseña">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <small id="mensaje_validacion" class="form-title"></small>
                        
                        <div class="wrap-input100">
                            <select class="input100" aria-label="Semillero" name="selSem">
                                <option value="" selected disabled>Elija su semillero</option>
                                @foreach ($semilleros as $semillero)
                                    <option value="{{ $semillero->codSemillero }}">{{ $semillero->nomSemillero }}</option>
                                @endforeach
                            </select>
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                </div>
            </form>
            <div class="container-login100-form-btn">
                <button id="siguiente" onclick="verificarCamposModal()" class="login100-form-btn">
                    Siguiente
                </button>
            </div>
		</div>
	</div>
</div>