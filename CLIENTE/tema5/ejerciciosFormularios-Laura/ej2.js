var form = document.getElementById('formulario')
var divCorrecto = document.getElementById('contenedorCorrecto')
var divIncorrecto = document.getElementById('contenedorErrores')
var boton = document.getElementById('enviar')
var correcto = ''
var incorrecto = ''

boton.addEventListener('click',()=>{validar()})

const validar = () =>{
    debugger
    var patternNombre = /^\D*$/
    var patternDireccion = /^[a-zA-Z \dº]*$/

    var halladoNombre = form.nombre.value.match(patternNombre)
    var halladoApellido = form.apellidos.value.match(patternNombre)
    var halladoDireccion = form.direccion.value.match(patternDireccion)

    //fecha:
    correcto += form.fecha.value +"<br/>"
    correcto += form.procesador.value + "<br/>"
    correcto += form.asignatura.value + "<br/>"

    if(halladoNombre.length==null){incorrecto += form.nombre.value + "<br/>"}
    else{correcto += form.nombre.value + "<br/>"}
    
    if(halladoApellido.length==null){incorrecto += form.apellidos.value +  "<br/>"}
    else{correcto += form.apellidos.value + "<br/>"}

    if(halladoDireccion==null){incorrecto += form.direccion.value +  "<br/>"}
    else{correcto += form.direccion.value + "<br/>"}

    correcto += form.color.value + "<br/>"
    correcto += form.textarea.value + "<br/>"
    correcto += form.fecha2.value + "<br/>"
    correcto += form.idioma.value + "<br/>"
    correcto += form.hora.value + "<br/>"

    for(let i = 0; i<form.sexo.length; i++){
        if(form.sexo[i].checked){
            correcto += form.sexo.value + "<br/>"
        }
    }

    divCorrecto.innerHTML = correcto
    divIncorrecto.innerHTML = incorrecto

}