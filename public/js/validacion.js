window.onload = iniciar;

function iniciar() {
    document
        .getElementById("login")
        .addEventListener("click", validarLogin, false);
    document.getElementById("enviar").addEventListener("click", validar, false);
}

function validaNombre() {
    var elemento = document.getElementById("nombre");
    if (elemento != null) {
        if (!elemento.checkValidity()) {
            if (elemento.validity.valueMissing) {
                errorLogin(elemento, "El nombre es obligatorio");
                return false;
            }

            if (elemento.validity.patternMismatch) {
                errorLogin(elemento, "El nombre no tiene un formato correcto");
                return false;
            }

            if (elemento.value.length < 3 || elemento.value.length > 15) {
                errorLogin(elemento, "Tiene que tener entre 3 y 15 caracteres");
                return false;
            }
        }
    }
}

function validaNombreCliente() {
    var elemento = document.getElementById("nombre_cliente");
    if (elemento != null) {
        if (!elemento.checkValidity()) {
            if (elemento.validity.valueMissing) {
                error(elemento, "El nombre es obligatorio");
                return false;
            }

            if (elemento.validity.patternMismatch) {
                error(elemento, "El nombre no tiene un formato correcto");
                return false;
            }

            if (elemento.value.length < 3 || elemento.value.length > 15) {
                error(elemento, "Tiene que tener entre 3 y 15 caracteres");
                return false;
            }
        }
    }

    return true;
}

function validaMovil() {
    var elemento = document.getElementById("movil");
    if (elemento != null) {
        if (!elemento.checkValidity()) {
            if (elemento.validity.valueMissing) {
                error(elemento, "El telefono es obligatorio");
                return false;
            }
            if (elemento.validity.patternMismatch) {
                error(elemento, "El telefono tiene que contener 9 digitos");
                return false;
            }

            if (elemento.value.length > 9 || elemento.value.length < 9) {
                error(elemento, "El telefono tiene que tener 9 digitos");
                return false;
            }

            return false;
        }
    }
    return true;
}

function validaCorreo() {
    var elemento = document.getElementById("email");
    if (elemento != null) {
        if (!elemento.checkValidity()) {
            if (elemento.validity.valueMissing) {
                error(elemento, "El correo es obligatorio");
                return false;
            }

            if (elemento.validity.patternMismatch) {
                error(elemento, "El correo no cumple las caracteristicas");
                return false;
            }
        }
    }

    return true;
}

function validaContraseña() {
    var elemento = document.getElementById("contraseña");
    if (elemento != null) {
        if (!elemento.checkValidity()) {
            if (elemento.validity.valueMissing) {
                errorLogin(elemento, "La contraseña es obligatoria");
                return false;
            }
        }
    }

    return true;
}

function validar(e) {
    borrarError();

    if (validaNombreCliente() && validaMovil() && validaCorreo()()) {
        alert("El formulario ha sido enviado. Gracias.");
        return true;
    } else {
        e.preventDefault();
        return false;
    }
}

function validarLogin(e) {
    borrarError();

    if (validaNombre() && validaContraseña()) {
        return true;
    } else {
        e.preventDefault();
        return false;
    }
}

function error(elemento, mensaje) {
    document.getElementById("mensajeError").innerHTML = "** " + mensaje + " **";
    elemento.className = " error";
    elemento.focus();
}

function errorLogin(elemento, mensaje) {
    document.getElementById("errorLogin").innerHTML = "** " + mensaje + " **";
    elemento.className = " error";
    elemento.focus();
}

function borrarError() {
    var formulario = document.forms[0];
    for (var i = 0; i < formulario.elements.length; i++) {
        formulario.elements[i].className = "";
    }
}
