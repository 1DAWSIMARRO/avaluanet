document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("formulario").addEventListener('submit', validarFormulario);
});

function validarFormulario(evento) {
    evento.preventDefault();
    valid=true;
    if (document.getElementById('cognoms').value.length < 2) {
        document.getElementById("mal3").innerHTML = "ERROR APELLIDOS";
        valid = false;

    } else {
        document.getElementById("mal3").innerHTML = "";
    }


    var correo = document.getElementById("email").value;
        let re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
        if(!re.exec(correo)){
        document.getElementById("mal4").innerHTML = "ERROR EMAIL";
        valid = false;
    } else {
        document.getElementById("mal4").innerHTML = "";
    }

    var usuario = document.getElementById('username').value;
    if (usuario.length == 0) {
        document.getElementById("mal5").innerHTML = "ERROR LOGIN";
        //return;
        valid = false;
    } else {
        document.getElementById("mal5").innerHTML = "";
    }

    var clave = document.getElementById('password').value;
    if (clave.length < 6) {
        document.getElementById("mal6").innerHTML = "ERROR PASSWORD";
        //return;
        valid = false;
    } else {
        document.getElementById("mal6").innerHTML = "";
    }

    if (valid){
        document.editForm.submit();
    }
}