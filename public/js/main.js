
const passwordField = document.getElementById('pass');
const confirmPasswordField = document.getElementById('pass2');
const passwordMatchMessage = document.getElementById('mensaje_validacion');
//Validaciones login//////////////////////////////////////////////////////
document.addEventListener('DOMContentLoaded', function() {
    "use strict";

    var inputs = document.querySelectorAll('.validate-input .input100');

    if (document.querySelector('.validate-form')){
        document.querySelector('.validate-form').addEventListener('submit', function(event) {
            var check = true;

            inputs.forEach(function(input) {
                if (!validate(input)) {
                    showValidate(input);
                    check = false;
                }
            });

            if (!check) {
                event.preventDefault();
            }
        });
    }

    inputs.forEach(function(input) {
        input.addEventListener('focus', function() {
            hideValidate(this);
        });
    });

    function validate(input) {
        if (input.value.trim() === '') {
            return false;
        }
        return true;
    }

    function showValidate(input) {
        var thisAlert = input.parentElement;
        thisAlert.classList.add('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = input.parentElement;
        thisAlert.classList.remove('alert-validate');
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav_link');
    const contentItems = document.querySelectorAll('.content-item');
    // const 

    navLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            navLinks.forEach(function(navLink) {
                navLink.classList.remove('active');
            });

            this.classList.add('active');

            contentItems.forEach(function(contentItem) {
                contentItem.classList.add('hidden');
            });

            const contentId = this.getAttribute('href');
            const contentToShow = document.querySelector(contentId);
            contentToShow.classList.remove('hidden');
        });
    });
});

///////////////////////////////////////////////////////////////////////////////////////////

// formulario de registro //////////////////////////////////////////////////////

function verificarCampos() {
    var camposSeccion1 = document.querySelectorAll('#form_section1 [required]');
    var camposSeccion2 = document.querySelectorAll('#form_section2 [required]');

    var todosCompletados = true;

    camposSeccion1.forEach(function(campo) {
        if (!campo.value) {
            todosCompletados = false;
        }
    });
    var form_section1 = document.getElementById("form_section1");
    camposSeccion2.forEach(function(campo) {
        if (!campo.value && form_section1.style.display === "none") {
            todosCompletados = false;
        }
    });

    
    if (!todosCompletados) {        
            Swal.fire({
                icon: 'warning',
                title: 'Campos incompletos',
                text: 'Por favor, complete todos los campos para continuar.',
            });
        }
    else {
        if (passwordMatchMessage.style.display === "block") {
            Swal.fire({
                icon: 'warning',
                title: 'Contraseñas no coinciden',
                text: 'Por favor, asegurese de ingresar la misma contraseña en los campos de contraseña.',
            });
        }else{
            mostrarSiguiente();
        }
    }
}

function mostrarSiguiente() {
    var seccion1 = document.getElementById("form_section1");
    var secciones1 = document.querySelectorAll(".form_section1");
    var seccion2 = document.getElementById("form_section2");
    var titulo = document.getElementById("signup_title");
    var siguienteBoton = document.getElementById("siguiente");

    if (seccion1.style.display === "none" || !seccion2) {
        document.getElementById("signup_form").submit();
    } else {
        secciones1.forEach(function(seccion) {
        if (getComputedStyle(seccion).display !== "none") {
            seccion.style.display = "none";
        }
        });
        seccion2.style.display = "block";
        siguienteBoton.innerHTML = "Enviar";
        titulo.innerHTML = "Registrate <br>2 / 2";
    }
}

function fileUploaded(input) {
    var fileLabel = input.previousElementSibling;
    fileLabel.innerHTML = '<i class="fa fa-check-circle"></i> <div class="input-text"> Archivo cargado con éxito </div>';
}

function checkPasswordMatch() {
    if (passwordField.value !== confirmPasswordField.value) {
        passwordMatchMessage.style.display = "block";
        passwordMatchMessage.innerHTML = '<i class="fa-solid fa-circle-exclamation"></i> Las contraseñas no coinciden.';
        passwordMatchMessage.style.color = 'red';
    }else{
        passwordMatchMessage.style.display = "none";
    }
}

// Agregamos un evento de cambio a ambos campos para verificar en tiempo real
if (passwordField && confirmPasswordField) {
    passwordField.addEventListener('keyup', checkPasswordMatch);
    confirmPasswordField.addEventListener('keyup', checkPasswordMatch);    
}


///////////////////////////////////////////////////////////////////////////////////////////

//modal con envío de parámetro//////////////////////////////////////////////////////

document.querySelectorAll('.op-link i').forEach(function(icon) {
    icon.addEventListener('click', function() {
        var parametro = JSON.parse(this.getAttribute('data-parametro'));
        document.querySelector('#modal_act_semillero form#signup_form').action = window.location.origin + '/act_semillero/'+ parametro.codSemillero;
        document.querySelector('#modal_act_semillero input#nombre').value = parametro.nomSemillero;
        document.querySelector('#modal_act_semillero input#nombreHidden').value = parametro.nomSemillero;
        document.querySelector('#modal_act_semillero input#correo').value = parametro.emailSemillero;
        document.querySelector('#modal_act_semillero #logo-preview').src = "storage/" + parametro.logoSemillero;
        document.querySelector('#modal_act_semillero #descripcion').value = parametro.descSemillero;
        document.querySelector('#modal_act_semillero #mision').value = parametro.misSemillero;
        document.querySelector('#modal_act_semillero #vision').value = parametro.visSemillero;
        document.querySelector('#modal_act_semillero #valores').value = parametro.valSemillero;
        document.querySelector('#modal_act_semillero #objetivos').value = parametro.objSemillero;
        document.querySelector('#modal_act_semillero input#linea_investigacion').value = parametro.lineaSemillero;
        document.querySelector('#modal_act_semillero input#fecha').value = parametro.fecCreaSemillero;
        openModal('modal_act_semillero');
    });
});

///////////////////////////////////////////////////////////////////////////////////////////

// abrir y cerrar modal//////////////////////////////////////////////////////

function openModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "block";
}

function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "none";
}

///////////////////////////////////////////////////////////////////////////////////////////
