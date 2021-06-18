window.onload=function(){
    text="";
    searchbar=document.getElementById("buscar").onkeyup=search;
    console.log("enter");
}
function search(e){
    if (e.key=="backspace") {
        text.slice(0, -1)
    } else {
        text=document.getElementById("buscar").value;
    }
    // console.log(text);
    senda();
}

function senda() {
    var req = new XMLHttpRequest();
    req.open("POST", "index.php?module=Grup&function=llistar");
    req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    req.responseType = 'json';
    // req.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    data="text="+text;
    req.send(data);

    req.onreadystatechange = function () {
        if (req.readyState == 4) {
            console.log(req.response);
            table=document.getElementsByTagName("tbody")[3];
            table.innerHTML = '';
            req.response.forEach(element => {
                tr=document.createElement("tr");
                td=document.createElement("td");
                td.innerHTML='<a class="text-dark" href="index.php?module=Grup&function=inGru&codi='+element['codi']+'" style="text-decoration: none;">+</a>';
                tr.append(td);
                console.log(element);
                for (const [key, value] of Object.entries(element)) {
                    console.log(key, value);
                    td=document.createElement("td");
                    td.append(value);
                    tr.append(td)
                }
                table.append(tr);
            });
            // location.href = "index.php";
        }
    }
}