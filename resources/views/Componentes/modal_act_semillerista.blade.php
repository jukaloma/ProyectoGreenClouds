<div id="modal_act_semillerista" class="modal" onclick="closeModal('modal_act_semillerista')">
	<div class="modal-content" onclick="event.stopPropagation();">
		<div class="form-close-container">
			<button class="close-modal" onclick="closeModal('modal_act_semillerista')"><i class="fa-solid fa-xmark"></i></button>
		</div>
		<div class="form-title">
			<h4>Actualizar Semillerista</h4>
		</div>
		<div class="container mt-3 mb-3">
		<form class="wrap-form-signup100" id="signup_form" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form_section1" id="form_semillerista1">
                        <div class="signup-input-container" >
                            <div class="wrap-input100">
                                <input class="input100" type="text" name="txtCod" id="txtCod" placeholder="Código" disabled>
                                <span class="focus-input100"></span>
                            </div>
                            
                            <div class="wrap-input100">
                                <input class="input100" type="text" name="txtNom" id="txtNom" placeholder="Nombre Completo">
                                <span class="focus-input100"></span>
                            </div>
                            
                            <div class="wrap-input100">
                                <input class="input100" type="text" name="txtDir" id="txtDir" placeholder="Dirección">
                                <span class="focus-input100"></span>
                            </div>
                            
                            <div class="wrap-input100">
                                <input class="input100" type="text" name="txtTel" id="txtTel" placeholder="Teléfono">
                                <span class="focus-input100"></span>
                            </div>
                            
                            <div class="wrap-input100">
                                <input class="input100" type="email" name="txtEmail" id="txtEmail" placeholder="Correo">
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
                            
                            <div class="wrap-input100">
                                <select class="input100" aria-label="Semestre" name="selSems" id="selSems" placeholder="Semestre">
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
                                <select class="input100" aria-label="Programa" name="selProg" id="selProg">
                                    <option value="" selected disabled>Elija su programa</option>
                                    <option value="Sistemas">Ing Sistemas</option>
                                    <option value="Electronica">Ing Electrónica</option>
                                    <option value="Civil">Ing Civil</option>
                                </select>
                                <span class="focus-input100"></span>
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

							<div class="current-file">
								<a id="fotoSemillerista"><i class="fa-solid fa-eye"></i>Ver foto Actual</a>
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

							<div class="current-file">
								<a id="repSemillerista"><i class="fa-solid fa-eye"></i>Ver foto Actual</a>
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
                            
                            <div class="wrap-input100-date">
                                <label class="form-check-label" for="txtFecVinc">Fecha de vinculación</label>
                                <input class="form-date-input" type="date" name="txtFecVinc" id="txtFecVinc">
                                <span class="focus-input100"></span>
                            </div>

                            <div class="wrap-input100-radio">
                                <label class="form-check-label">Estado</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdEst" id="rdEst1" value="A" checked>
                                    <label class="form-check-label" for="rdSex1">
                                        <div class="form-radio-text">A</div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdEst" id="rdEst2" value="I">
                                    <label class="form-check-label" for="rdSex2">
                                        <div class="form-radio-text">I</div>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="wrap-input100">
                                <select class="input100" aria-label="Proyecto" name="selProy" id="selProy" placeholder="Semestre">
                                    <option value="" selected disabled>Asignar Proyecto</option>
                                    @foreach ($proyectos as $proyecto)
                                        <option value="{{ $proyecto->codProy }}">{{ $proyecto->titProy }}</option>
                                    @endforeach
                                </select>
                                <span class="focus-input100"></span>
                            </div>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn col-md-5">Actualizar</button>
                    </div>
                </form>
		</div>
	</div>
</div>