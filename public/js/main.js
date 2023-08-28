
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
    const btnProy = document.getElementById('btn_proy');
    const btnEvent = document.getElementById('btn_event');
    const btnSems = document.getElementById('btn_sems');

    if (btnProy) {
        btnProy.addEventListener("click", function() {
            const linkProyectos = document.getElementById("link_proy");
    
            if (linkProyectos) {
                linkProyectos.click();
            }
        });
    }

    if (btnEvent) {
        btnEvent.addEventListener("click", function() {
            const linkEventos = document.getElementById("link_event");

            if (linkEventos) {
                linkEventos.click();
            }
        });
    }

    if (btnSems) {
        btnSems.addEventListener("click", function() {
            const linkSemilleristas = document.getElementById("link_sems");

            if (linkSemilleristas) {
                linkSemilleristas.click();
            }
        });
    }

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

function verificarCamposModal() {
    var camposSeccion1 = document.querySelectorAll('#form_semillerista1 [required]');
    var camposSeccion2 = document.querySelectorAll('#form_semillerista2 [required]');

    var todosCompletados = true;

    camposSeccion1.forEach(function(campo) {
        if (!campo.value) {
            todosCompletados = false;
        }
    });
    
    var form_section1 = document.getElementById("form_semillerista1");
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
            mostrarSiguienteModal();
        }
    }
}

function mostrarSiguienteModal() {
    var seccion1 = document.getElementById("form_semillerista1");
    var secciones1 = document.querySelectorAll("#form_semillerista1");
    var seccion2 = document.getElementById("form_semillerista2");
    var titulo = document.getElementById("signup_title");
    var siguienteBoton = document.getElementById("siguiente");
    var modalBack = document.getElementById("modal_back");

    if (seccion1.style.display === "none" || !seccion2) {
        document.getElementById("signup_form").submit();
    } else {
        secciones1.forEach(function(seccion) {
        if (getComputedStyle(seccion).display !== "none") {
            seccion.style.display = "none";
        }
        });
        modalBack.style.display = "block";
        seccion2.style.display = "block";
        siguienteBoton.innerHTML = "Enviar";
        titulo.innerHTML = "2 / 2";
    }
}

function modalBack(){
    var seccion2 = document.getElementById("form_semillerista2");
    var secciones1 = document.querySelectorAll("#form_semillerista1");
    var titulo = document.getElementById("signup_title");
    var siguienteBoton = document.getElementById("siguiente");
    var modalBack = document.getElementById("modal_back");
    
    secciones1.forEach(function(seccion) {
    if (getComputedStyle(seccion).display === "none") {
        seccion.style.display = "block";
    }
    });
    modalBack.style.display = "none";
    seccion2.style.display = "none";
    siguienteBoton.innerHTML = "Siguiente";
    titulo.innerHTML = "1 / 2";
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

document.querySelectorAll('#act_semillero i').forEach(function(icon) {
    icon.addEventListener('click', function() {
        var parametro = JSON.parse(this.getAttribute('data-parametro'));
        var coord = this.getAttribute('coord');
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
        document.querySelector('#modal_act_semillero #selLinea').value = parametro.lineaSemillero;
        document.querySelector('#modal_act_semillero input#fecha').value = parametro.fecCreaSemillero;
        document.querySelector('#modal_act_semillero #selCoord').value = coord;
        openModal('modal_act_semillero');
    });
});

document.querySelectorAll('#act_proy i').forEach(function(icon) {
    icon.addEventListener('click', function() {
        var parametro = JSON.parse(this.getAttribute('data-parametro'));
        document.querySelector('#modal_act_proyecto form#signup_form').action = window.location.origin + '/act_proyecto/'+ parametro.codProy;
        document.querySelector('#modal_act_proyecto input#titulo').value = parametro.titProy;
        document.querySelector('#modal_act_proyecto #selTipo').value = parametro.tipProy;
        document.querySelector('#modal_act_proyecto #selEstado').value = parametro.estProy;
        document.querySelector('#modal_act_proyecto input#fechaIni').value = parametro.fecIniProy;
        document.querySelector('#modal_act_proyecto input#fechaFin').value = parametro.fecFinProy;
        document.querySelector('#modal_act_proyecto #propuesta').href = "../storage/" + parametro.propProy;
        if (parametro.finProy) {
            document.querySelector('#modal_act_proyecto #proyectoFinal').href = "../storage/" + parametro.finProy;
        }else{
            document.querySelector('#modal_act_proyecto a#proyectoFinal').innerHTML = "<i class='fa-solid fa-eye-slash'></i> No existe Proyecto actual"
            document.querySelector('#modal_act_proyecto a#proyectoFinal').style = "text-decoration: none;"
        }
        openModal('modal_act_proyecto');
    });
});

document.querySelectorAll('#act_evento i').forEach(function(icon) {
    icon.addEventListener('click', function() {
        var parametro = JSON.parse(this.getAttribute('data-parametro'));
        var semillero = this.getAttribute('semillero');
        document.querySelector('#modal_act_evento form#signup_form').action = window.location.origin + '/act_evento/'+ parametro.codEvento + "/" + semillero;
        document.querySelector('#modal_act_evento input#nombre').value = parametro.nomEvento;
        document.querySelector('#modal_act_evento #descripcion').value = parametro.descEvento;
        document.querySelector('#modal_act_evento input#fechaIni').value = parametro.fecIniEvento;
        document.querySelector('#modal_act_evento input#fechaFin').value = parametro.fecFinEvento;
        document.querySelector('#modal_act_evento input#lugar').value = parametro.lugarEvento;
        document.querySelector('#modal_act_evento #selTipo').value = parametro.tipoEvento;
        if (parametro.modEvento === 'P') {
            document.querySelector('#modal_act_evento input#rdMod1').checked = true;
        }else{
            
            document.querySelector('#modal_act_evento input#rdMod2').checked = true;
        }
        document.querySelector('#modal_act_evento #selClasificacion').value = parametro.clasEvento;
        document.querySelector('#modal_act_evento #observaciones').value = parametro.obsEvento;
        openModal('modal_act_evento');
    });
});

document.querySelectorAll('#act_semillerista i').forEach(function(icon) {
    icon.addEventListener('click', function() {
        var parametro = JSON.parse(this.getAttribute('data-parametro'));
        document.querySelector('#modal_act_semillerista form#signup_form').action = window.location.origin + '/act_semillerista/'+ parametro.codSemillerista;
        document.querySelector('#modal_act_semillerista input#txtCod').value = parametro.codSemillerista;
        document.querySelector('#modal_act_semillerista input#txtNom').value = parametro.nomSemillerista;
        document.querySelector('#modal_act_semillerista input#txtDir').value = parametro.dirSemillerista;
        document.querySelector('#modal_act_semillerista input#txtTel').value = parametro.telSemillerista;
        document.querySelector('#modal_act_semillerista input#txtEmail').value = parametro.emailSemillerista;
        if (parametro.sexSemillerista === 'M') {
            document.querySelector('#modal_act_semillerista input#rdSex1').checked = true;
        }else{
            document.querySelector('#modal_act_semillerista input#rdSex2').checked = true;
        }
        document.querySelector('#modal_act_semillerista #selSems').value = parametro.semSemillerista;
        document.querySelector('#modal_act_semillerista input#txtFecNac').value = parametro.fecNacSemillerista;
        document.querySelector('#modal_act_semillerista #fotoSemillerista').href = "../storage/" + parametro.picSemillerista;
        document.querySelector('#modal_act_semillerista #repSemillerista').href = "../storage/" + parametro.repMatricula;
        document.querySelector('#modal_act_semillerista input#txtFecVinc').value = parametro.fecVincSemillerista;
        document.querySelector('#modal_act_semillerista #selProg').value = parametro.progSemillerista;
        if (parametro.estSemillerista === 'Activo') {
            document.querySelector('#modal_act_semillerista input#rdEst1').checked = true;
        }else{
            document.querySelector('#modal_act_semillerista input#rdEst2').checked = true;
        }
        if (parametro.proyecto) {
            document.querySelector('#modal_act_semillerista #selProy').value = parametro.proyecto;
        }
        openModal('modal_act_semillerista');
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
