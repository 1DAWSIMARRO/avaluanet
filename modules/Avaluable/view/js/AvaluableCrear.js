window.onload=function(){
    document.getElementById("send").onclick=function(e){
        error=false;

        
        for (let item of document.getElementsByClassName("text-danger")) {
            document.getElementById(item.id).innerHTML="";
            if (document.getElementById(item.id.split(["_"])[0]).value=="" || document.getElementById(item.id.split(["_"])[0]).value==0) {
                error=true;
                document.getElementById(item.id).innerHTML="Camp no valid";
            }
        }


        if (error==false) {
            if (document.getElementById("send").className.includes("edit")) {
                urlm="index.php?module=Avaluable&function=edit";
            } else {
                urlm="index.php?module=Avaluable&function=create";
            }
            $.ajax({
                type: 'POST',
                url: urlm,
                data: $("form").serialize(), 
                success: function(response) {
                    console.log(response);
                    window.location.href = "index.php?module=Asignatura&function=add_alumne"
                },
            });
        }
    };
}