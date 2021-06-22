document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("formulario").addEventListener('submit', validarFormulario);
});

/*document.getElementById("loginbtn").click(function (evento) {
    evento.preventDefault();
    validarUsuari();
});*/

function validarFormulario(evento) {
    evento.preventDefault();
    let valid = true;

    var usuario = document.getElementById('login').value;
    if (usuario.length == 0) {
        //PRUEBA PARA INTENTAR QUE PONGA "USUARIO NO EXISTE" DEBAJO DEL LOGIN
        document.getElementById("mal5").innerHTML = "ERROR LOGIN";
        //ESTO ES LO QUE ESTABA ANTES
        //document.getElementById("mal5").innerHTML = "ERROR LOGIN";
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
        //this.submit();
        validarUsuari();
}

function validarUsuari() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "index.php?module=Professor&function=acceder", true);
    let params = 'login='+document.getElementById('login').value;
    params += '&password='+document.getElementById('password').value;
    xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhttp.send(params);


    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //alert(xhttp.responseText);
            let json = JSON.parse(xhttp.responseText);
            console.log(xhttp.responseText);

            if(json.msg != 'ok') {
                document.getElementById("mal5").innerHTML = "ERROR USUARIO NO EXISTE";
            }else {
                document.getElementById("mal5").innerHTML = "";
                window.location.href = "index.php?module=Asignatura&function=llistar";
            }
        }
    };
}