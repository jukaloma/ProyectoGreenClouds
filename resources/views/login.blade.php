@extends('template')

@section('title', 'Inicio de Sesion')

@section('content')
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
	<div id="modal_signup" class="modal" onclick="closeModal('modal_signup')">
		<div class="modal-content signup-modal-content" onclick="event.stopPropagation();">
			<div class="form-close-container">
				<button class="close-modal" onclick="closeModal('modal_signup')"><i class="fa-solid fa-xmark"></i></button>
			</div>
			<div class="login100-form-title">
				<h4>Que tipo de cuenta desea crear?</h4>
			</div>
			<div class="modal-body">
                <button class="login100-form-btn mx-2" data-rol="director" onclick="closeModal('modal_signup'); openModal('modal_authdir')">Director</button>
				<button class="login100-form-btn mx-2" data-rol="coordinador" onclick="closeModal('modal_signup'); openModal('modal_authcoord')">Coordinador</button>
                <button class="login100-form-btn mx-2" data-rol="semillerista" onclick="window.location.href = '{{ route('signup_semillerista') }}';">Semillerista</button>
            </div>
		</div>
	</div>

	<div class="modal" id="modal_authcoord">
		<div class="modal-content signup-modal-content" onclick="event.stopPropagation();">
			<div class="form-close-container">
				<button class="close-modal" onclick="closeModal('modal_authcoord'); openModal('modal_signup')"><i class="fa-solid fa-xmark"></i></button>
			</div>
			<form action="{{ route('coord_signup') }}" method="POST">
				@csrf
				<div class="login100-form-title">
					<h4>Ingresar contraseña</h4>
				</div>
				<input class="input100" type="password" name="txtPassDir" placeholder="contraseña" required>
				<div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Continuar
                    </button>
                </div>
			</form>
		</div>
	</div>

	<div class="modal" id="modal_authdir">
		<div class="modal-content signup-modal-content" onclick="event.stopPropagation();">
			<div class="form-close-container">
				<button class="close-modal" onclick="closeModal('modal_authdir'); openModal('modal_signup')"><i class="fa-solid fa-xmark"></i></button>
			</div>
			<form action="{{ route('dir_signup') }}" method="POST">
				@csrf
				<div class="login100-form-title">
					<h4>Ingresar contraseña</h4>
				</div>
				<input class="input100" type="password" name="txtPassDir" placeholder="contraseña" required>
				<div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Continuar
                    </button>
                </div>
			</form>
		</div>
	</div>

    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<a href="">
					<div class="login100-pic js-tilt" data-tilt>
						<img src="images/logo-udenar-negro.png" alt="IMG">
					</div>
				</a>

				<form class="login100-form validate-form" action="principal">
					<span class="login100-form-title">
						Inicio de sesión
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Se requiere un usuario">
						<input class="input100" type="text" name="txtusr" placeholder="Usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Se requiere una contraseña">
						<input class="input100" type="password" name="txtpass" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Ingresar
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Olvide mi
						</span>
						<a class="txt2" href="#">
							Usuario / Contraseña?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#" data-target="modal_signup" onclick="openModal('modal_signup')">
							Crea tu cuenta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection