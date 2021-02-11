/*Declaración de elementos*/
var boton = document.getElementById("enviar")
var form = document.getElementById("formulario")
var frmIdioma = form.idioma
var frmConector = form.conector
var frmNombre = form.nombre
var frmApellidos = form.apellidos
var frmSexo = form.sexo
var frmSexo1 = form.sexo1
var frmDate = form.fecha
var regexNombre = /^[a-zA-Z]*$/;
var correcto = ''
var incorrecto = ''

var divCorrecto = document.getElementById("contenedor")
var divIncorrecto = document.getElementById("contenedorErrores")

const validar = () => {
    var regexNombre = /^[a-zA-Z]*$/;
    var halladoNombre = frmNombre.value.match(regexNombre)
    var halladoApellidos = frmApellidos.value.match(regexNombre)
    
    correcto += frmIdioma.value + '<br/>'
    correcto += frmConector.value + '<br/>'
 

    if(halladoNombre.length>= 1){correcto += frmNombre.value+ '<br/>'}
    else{incorrecto += frmNombre.value + '<br/>'}
    
    if(halladoApellidos.length>= 1){correcto += frmApellidos.value+ '<br/>'}
    else{incorrecto += frmApellidos.value+ '<br/>'}

    correcto += frmSexo.value + '<br/>'
debugger
    for(i=0;i<frmSexo1.length;i++){
        if(frmSexo1[i].checked) {correcto += frmSexo1[i].value + '<br/>'}
    }

    divCorrecto.innerHTML = correcto
    divIncorrecto.innerHTML = incorrecto

}

boton.addEventListener('click',()=>{validar()})
