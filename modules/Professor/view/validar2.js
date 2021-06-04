document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("formulario").addEventListener('submit', validarFormulario);
});

function validarFormulario(evento) {
    evento.preventDefault();
    let valid = true;

    var usuario = document.getElementById('login').value;
    if (usuario.length == 0) {
        document.getElementById("mal5").innerHTML = "ERROR LOGIN";
        //return;
        valid = false;
    } else {
        document.getElementById("mal5").innerHTML = "";
    }

    var clave = document.getElementById('password').value;
    if (clave.length < 1) {
        document.getElementById("mal6").innerHTML = "ERROR PASSWORD";
        //return;
        valid = false;
    } else {
        document.getElementById("mal6").innerHTML = "";
    }

    if (valid)
        this.submit();
}