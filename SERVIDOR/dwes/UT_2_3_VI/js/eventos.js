function onClick_validar () {
    let errores="";
    errores+=(!document.getElementById("txtUser").value.length)?"- Falta el usuario.\n":"";
    errores+=(!document.getElementById("txtPass").value.length)?"- Falta la clave.\n":"";
    if (!errores) document.frmLogin.submit();
    else alert(errores);
}

function onLoad_body(){
    document.getElementById("cmdValidar").addEventListener("click",onClick_validar);
}

function onClick_crearAlumno() {
    let errores="";
    errores+=(!document.getElementById("txtNombre").value.length)?"- Falta el nombre.\n":"";
    errores+=(!document.getElementById("txtApellidos").value.length)?"- Falta los apellidos.\n":"";
    errores+=(!document.getElementById("txtDNI").value.length)?"- Falta el DNI.\n":"";
    errores+=(!document.getElementById("txtFechaNac").value.length)?"- Falta la fecha de nacimiento.\n":"";
    errores+=(!document.getElementById("txtNombreVia").value.length)?"- Falta el nombre de la vía.\n":"";
    errores+=(!document.getElementById("txtNumeroVia").value.length)?"- Falta el número de la vía.\n":"";
    errores+=(!document.getElementById("txtTelefono").value.length)?"- Falta el número de teléfono.\n":"";
    errores+=(!document.getElementById("txtLocalidad").value.length)?"- Falta la localidad.\n":"";

    if (!errores) document.frmCrearAlumno.submit();
    else alert(errores);
}