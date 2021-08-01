window.onload=function(){
    console.log("enter");
    document.getElementById("buscar").onkeyup=search;
    avaluable();
    // document.getElementsByClassName("gradebtn")[0].onclick=insertgrade;
}

function insertgrade(ava,alu) {
    // href="index.php?module=Asignatura&function=insertG&NIA='.$value['NIA'].'&ava='.$valueAva['id'].'"
    console.log(ava,alu);
    grade=document.getElementById(""+ava+alu).value;
    console.log(grade);
    dataA = {"ava":ava, "alu":alu, "grade":grade};
    console.log(dataA);
    $.ajax({
        type: 'POST',
        url: 'index.php?module=Asignatura&function=insertG',
        data: dataA, 
        success: function(response) {
            console.log(response);
            toastr.success('S\'ha canviat la nota ', 'Success');
        },
    });
}

function search(e){
    text="";
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
    req.open("POST", "index.php?module=Asignatura&function=search");
    req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    req.responseType = 'json';
    // req.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    data="text="+text;
    req.send(data);

    req.onreadystatechange = function () {
        if (req.readyState == 4) {
            console.log(req.response);
            table=document.getElementById('table_al');
            table.innerHTML = '';
            req.response.forEach(element => {
                tr=document.createElement("tr");
                td=document.createElement("td");
                td.innerHTML='<a id="add" onclick="add_student(' +element['NIA']+ ')" class="btn btn-outline-success btn_alu" style="text-decoration: none;">+</a>';
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

function avaluable() {
    var req = new XMLHttpRequest();
    req.open("POST", "index.php?module=Avaluable&function=list");
    req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    req.responseType = 'json';
    req.send();

    req.onreadystatechange = function () {
        if (req.readyState == 4) {
            console.log(req.response);
            avaluables=document.getElementById("avaluables");
            if (req.response=="") {
                console.log("empty");
                avaluables.innerHTML="Aquesta assignatura encara no te ningun avaluable creat";
            } else {
                console.log("full");
                req.response.forEach(element => {
                    // <div class="form-check form-switch">
                    //     <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    //     <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                    // </div>
                    // avaluables.innerHTML+='<li class="list-group-item"><span class="h3">'+element['nom']+'</span>'+
                    // '<a type="button" href="index.php?module=Asignatura&function=baixa&codi='+element['id']+'" class="btn btn-success">Eliminar</a></li>';
                    console.log(element);
                    avaluables.innerHTML+='<table class="table">'+
                    '<tbody>'+
                        '<tr>'+
                        '<td style="width:90%"><a href="index.php?module=Avaluable&function=view_create&id='+element['id']+'"><h2>'+element['nom']+'</h2></a></td>'+
                        // '<td class="text-end">'+element['data_lliurament']+'</td>'+
                        '<td>'+element['data_lliurament']+
                        // '<a style="margin-left:10%" type="button" href="index.php?module=Avaluable&function=baixa&codi='+element['id']+'" class="btn btn-outline-danger">Ocultar</a>'+
                        '</td>'+
                        '</tr>'+
                    '</tbody>'+
                    '</table>'
                });
            }
        }
    }
}

function add_student(NIA) {
    var req = new XMLHttpRequest();
    // req.open("POST", "index.php?module=Asignatura&function=inAlu&NIA=' . $value['NIA'] . '");
    req.open("GET", "index.php?module=Asignatura&function=inAlu&NIA="+NIA);
    req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    req.responseType = 'json';
    req.send();

    req.onreadystatechange = function () {
        if (req.readyState == 4) {
            console.log(req.response);
            update_list();
        }
    }
}

function update_list() {
    var req = new XMLHttpRequest();
    // req.open("POST", "index.php?module=Asignatura&function=inAlu&NIA=' . $value['NIA'] . '");
    req.open("POST", "index.php?module=Asignatura&function=list_modal");
    req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    req.responseType = 'json';
    req.send();

    req.onreadystatechange = function () {
        if (req.readyState == 4) {
            console.log(req.response);
            table=document.getElementById('table_al');
            table.innerHTML = '';
            req.response.forEach(element => {
                tr=document.createElement("tr");
                td=document.createElement("td");
                td.innerHTML='<a id="add" onclick="add_student(' +element['NIA']+ ')" class="btn btn-outline-success btn_alu" style="text-decoration: none;">+</a>';
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
        }
    }
}