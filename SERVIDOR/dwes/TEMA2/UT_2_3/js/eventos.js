function onClick_validar(){
    let errores="";
    errores+=(!document.getElementById("frmUsuario").value.length)?"- Falta el usuario.\n":"";
    errores+=(!document.getElementById("frmContr").value.length)?"- Falta la clave.\n":"";
    if (!errores) document.frmLogin.submit();
    else alert(errores);
}

function onLoad_body(){
    document.getElementById("cmdValidar").addEventListener("click", onClick_validar);
}