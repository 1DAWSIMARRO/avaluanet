window.onload=function(){
    console.log(document.getElementById("hores").value);
    // document.getElementById("hores").onchange=validate();
    document.getElementById("submitb").onclick=function(e){
        e.preventDefault();
        error=false;
        document.getElementById("nom_e").innerHTML="";
        document.getElementById("hores_e").innerHTML="";

        if (document.getElementById("nom").value=="") {
            error=true;
            document.getElementById("nom_e").innerHTML="Escriu un nom";
            console.log("nom error");
        }

        hours=document.getElementById("hores").value;
        console.log(hours);
        if (hours==0) {
            document.getElementById("hores_e").innerHTML="Selecciona unes hores";
            console.log("select error");
            error=true;
        }

        if (error==false) {
            document.getElementById("alta").submit();
        }
    };
}