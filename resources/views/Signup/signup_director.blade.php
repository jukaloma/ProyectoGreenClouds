@extends('template')

@section('title', 'Registro de usuario')

@section('content')
    <div class="limiter">
		<div class="container-login100">
            <div class="wrap-signup100">
                <form class="wrap-form-signup100" action="{{ route('reg_director') }}" id="signup_form" enctype="multipart/form-data" method="POST">
                    @csrf
                    <span class="login100-form-title" id="signup_title">
                        Registrate
                    </span>
                    <div class="form_section1" id="form_section1">
                        <div class="signup-input-container" >                            
                            <div class="wrap-input100">
                                <input class="input100" type="text" name="txtNom" placeholder="Nombre Completo">
                                <span class="focus-input100"></span>
                            </div>
                            
                            <div class="wrap-input100">
                                <input class="input100" type="text" name="txtEmail" placeholder="Correo" required>
                                <span class="focus-input100"></span>
                            </div>

                            <div class="wrap-input100">
                                <input class="input100" type="text" name="txtTel" placeholder="Teléfono">
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
                        </div>
                    </div>
                    <div class="form_section1" id="form_section1">
                        <div class="signup-input-container">                        
                            <div class="wrap-input100">
                                <input class="input100" type="text" name="txtUsu" placeholder="Usuario">
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
                        </div>
                    </div>
                </form>
                <div class="container-login100-form-btn">
                    <button id="siguiente" onclick="verificarCampos()" class="login100-form-btn">
                        Enviar
                    </button>
                </div>
            </div>
		</div>
	</div>
@endsection