document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("formulario").addEventListener('submit', validarFormulario);
});

function validarFormulario(evento) {
    evento.preventDefault();

    dni = document.getElementById("dni").value;
    var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
    let valid = true;

    if (!(/^\d{8}[A-Z]$/.test(dni))) {
        valid = false;
        document.getElementById("mal1").innerHTML = "ERROR DNI";
        //return;
    } else {
        document.getElementById("mal1").innerHTML = "";
    }

    if (dni.charAt(8) != letras[(dni.substring(0, 8)) % 23]) {
        document.getElementById("mal1").innerHTML = "ERROR DNI";
        valid = false;
        //return;
    } else{
        document.getElementById("mal1").innerHTML = "";
    } 


    if (document.getElementById('nombre').value.length < 2) {
        document.getElementById("mal2").innerHTML = "ERROR NOMBRE";
        valid = false;
    } else {
        document.getElementById("mal2").innerHTML = "";
    }



    if (document.getElementById('apellidos').value.length < 2) {
        // todo_correcto = false;
        // alert("ERROR  APELLIDO")
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

    var usuario = document.getElementById('login').value;
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
        //this.submit();
        registrarUsuari();
    }
}

function registrarUsuari() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "index.php?module=Professor&function=registrar", true);
    let params = 'dni='+document.getElementById('dni').value; 
    params += '&nom='+document.getElementById('nombre').value;
	params += '&cognoms='+document.getElementById('apellidos').value;
    params += '&email='+document.getElementById('email').value;
    params += '&login='+document.getElementById('login').value;
    params += '&password='+document.getElementById('password').value;
    xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhttp.send(params);


    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //alert(xhttp.responseText);
            let json = JSON.parse(xhttp.responseText);

            if(json.msg != "ok") {
                //alert(xhttp.responseText);
                document.getElementById("error").innerHTML = "ERROR, EL USUARIO YA EXISTE";
            }else {
                //alert(xhttp.responseText);
                document.getElementById("error").innerHTML = "<p style='color:green'>REGISTRADO CORRECTAMENTE</p>";
            }
        }
    };
}