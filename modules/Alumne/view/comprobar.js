window.onload = function () {
    document.getElementById("send").onclick=validarFormulario;
}

function validarFormulario(evento) {
    evento.preventDefault();
    var valorValido = /^[0-9]{8}$/;
    var valorTel = /^[0-9]{9}$/;
    var testValido =/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;


    var emailValido = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    var NIA = document.getElementById("NIA").value;
    var Nom = document.getElementById("nom").value;
    var Cognom = document.getElementById("cognoms").value;
    var Tel = document.getElementById("tel").value;
    var Email = document.getElementById("email").value;
    var erro = false;
        if (NIA.match(valorValido)) {
            document.getElementById("ValidarNia").innerHTML = "";
        
        }else{
            document.getElementById("ValidarNia").innerHTML = "NIA invalido";
            erro = true;
        }
    
        if (Nom.match(testValido)) {
            document.getElementById("ValidarNom").innerHTML = "";
        } else {
            document.getElementById("ValidarNom").innerHTML = "Nom invalido";
            erro = true;
        }
    
        if (Cognom.match(testValido)) {
            document.getElementById("ValidarCognom").innerHTML = "";
        } else {
            document.getElementById("ValidarCognom").innerHTML = "Cognom invalido";
            erro = true;
        }
    
        if (Tel.match(valorTel)) {
            document.getElementById("ValidarTel").innerHTML = "";
        } else {
            
            document.getElementById("ValidarTel").innerHTML = "Tel invalido";
            erro = true;
        }
    
        if(Email.match(emailValido)){
            document.getElementById("ValidarEmail").innerHTML = "";
        }else{
            document.getElementById("ValidarEmail").innerHTML ="Email invalido";
            
            erro = true;
        }
        if(erro == false){
            var req = new XMLHttpRequest();
            console.log(document.getElementsByTagName('form')[0].id);
            if (document.getElementsByTagName('form')[0].id=="formulario") {
                req.open("POST", "index.php?module=Alumne&function=alta");
            } else {
                req.open("POST", "index.php?module=Alumne&function=edit");
            }
            req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            array={
                "NIA":document.getElementsByName("NIA")[0].value,
                "nom":document.getElementsByName("nom")[0].value,
                "cognoms":document.getElementsByName("cognoms")[0].value,
                "tel":document.getElementsByName("tel")[0].value,
                "email":document.getElementsByName("email")[0].value,
                "grup":document.getElementsByName("grup")[0].value
            }
            array=JSON.stringify(array)
            data="data="+array;
            req.send(data);

            req.onreadystatechange = function () {
                if (req.readyState == 4) {
                    console.log(req.responseText);
                    location.href = "index.php";
                }
            }
        }
    
    
}