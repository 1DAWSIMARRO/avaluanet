var value = null;

function pasarParametro(codi) {
    value = codi;
}

function accionEliminar() {
    window.open("index.php?module=Asignatura&function=baixa&codi=" + value, "_self");
}