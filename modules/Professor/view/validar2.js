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
        //this.submit();
        validarUsuari();
}

function validarUsuari() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "index.php?module=Professor&function=acceder", true);
   /*  let params = 'login='+document.getElementById('login').value;
    params += '&password='+document.getElementById('password').value; */
    xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    /* xhttp.send(params); */
    xhttp.send();


    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //alert(xhttp.responseText);
            let json = JSON.parse(xhttp.responseText);

            if(json.msg != 'ok') {
                document.getElementById("error").innerHTML = "ERROR USUARIO NO EXISTE";
            }else {
                document.getElementById("error").innerHTML = "";
            }
        }
    };
}