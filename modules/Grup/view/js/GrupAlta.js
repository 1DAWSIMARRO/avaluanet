window.onload = function () {
    console.log("enter");
    document.getElementById("send1").onclick=function (e) {
        e.preventDefault();
        error=false;
        document.getElementById("nom_e").innerHTML="";
        document.getElementById("curs_e").innerHTML="";

        if (document.getElementById("nom").value=="") {
            error=true;
            document.getElementById("nom_e").innerHTML="Escriu un nom";
            console.log("nom error");
        }

        curs=document.getElementById("curs").value;
        if (curs==0) {
            document.getElementById("curs_e").innerHTML="Selecciona un curs";
            console.log("select error");
            error=true;
        }

        if (error==false) {
            var req = new XMLHttpRequest();
            req.open("POST", "index.php?module=Grup&function=checkNom");
            req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            data="nom="+document.getElementById("nom").value;
            req.send(data);
            req.onreadystatechange = function () {
                if (req.readyState == 4) {
                    console.log(req.responseText);
                    if (req.responseText!="false") {
                        document.getElementById("nom_e").innerHTML = "Nom existente";
                    }else{
                        document.getElementById("alta").submit();
                    }
                }
            }
        }
    }
}