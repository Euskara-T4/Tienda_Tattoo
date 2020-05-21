window.onload = iniciar;

function iniciar() {
    document.getElementById("enviar").addEventListener('click', validar, false);
}

function validaNombre() {
    var elemento = document.getElementById("nombre");
    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            error(elemento, "introduce un nombre");
            return false;
        }

        if (elemento.validity.patternMismatch) {
            error(elemento, "el nombre no es correcto");
            return false;
        }

        if (elemento.value.length < 3 || elemento.value.length < 15) {
            error(elemento, "el nombre no es correcto");
            return false;
        }

    }
    return true;
}


function validaMovil() {
    var elemento = document.getElementById("movil");
    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            error(elemento, "introduce un numero de telefono");
            return false;
        }

        if (elemento.validity.patternMismatch) {
            error(elemento, "el telefono no es correcto");
            return false;
        }
    }
    return true;
}

function validaCorreo() {
    var elemento = document.getElementById("email");
    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            error(elemento, "introduce un email")
        }

        if (elemento.validity.patternMismatch) {
            error(elemento, "el email no es correcto");
            return false;
        }
    }
    return true;
}

function validar(e) {
    borrarError();
    if (validaNombre() && validaMovil() && validaCorreo() && confirm("Pulsa aceptar si deseas enviar el formulario")) {
        return true
    } else {
        e.preventDefault();
        return false;
    }
}


function error(elemento, mensaje) {
    document.getElementById("mensajeError").innerHTML ="** " + mensaje + " **";
    elemento.className = " error";
    elemento.focus();
}

function borrarError() {
    var formulario = document.forms[0];
    for (var i = 0; i < formulario.elements.length; i++) {
        formulario.elements[i].className = "";
    }


}