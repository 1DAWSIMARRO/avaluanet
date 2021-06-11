window.onload=function(){
     searchbar=document.getElementById("buscar").onkeydown=search;
}
function search(){
    console.log("keydown in searchbar");
}