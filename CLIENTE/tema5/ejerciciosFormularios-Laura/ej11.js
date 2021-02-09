var form = document.getElementById('formulario')
var divCorrecto = document.getElementById('contenedorCorrecto')
var divErrores = document.getElementById('contenedorErrores')
var boton = document.getElementById('enviar')
var correcto = ''
var incorrecto = ''
var regexDNI = /^\d{8}[a-zA-Z]$/
var regexNombreApellidos = /[a-zA-Z ]*/
boton.addEventListener('click',()=>{validar()})

const validar = () => {
    debugger
    for(let i = 0; i<form.asignatura.length;i++){
        if(form.asignatura[i].checked){
            correcto += `La asignatura seleccionada es: ${form.asignatura[i].value} <br/>`
        }
    }
    correcto += `El texto escrito en el text-area es: ${form.textarea.value}<br/>`
    var resRegexDNI = form.dni.value.match(regexDNI)
    if(resRegexDNI == null){
        incorrecto += `El dni es incorrecto <br/>`
    }else{
        correcto += `El dni escrito es: ${form.dni.value}`
    }

    var resRegexNom = form.nombre.value.match(regexNombreApellidos)
    if(resRegexNom == null){
        incorrecto += `El nombre es incorrecto <br/>`
    }else{
        correcto += `El nombre escrito es: ${form.nombre.value}`
    }

    var resRegexApe = form.apellidos.value.match(regexNombreApellidos)
    if(resRegexApe == null){
        incorrecto += `El apellido es incorrecto <br/>`
    }else{
        correcto += `El apellido escrito es: ${form.nombre.value}`
    }

    correcto += `La fecha seleccionada es: ${form.fecha.value}<br/>`
    correcto += `El color seleccionado es: ${form.color.value}<br/>`
    correcto += `La hora seleccionad es: ${form.hora.value}<br/>`

    correcto += `La velocidad seleccionad es: ${form.velocidad.value}<br/>`

    for(let i = 0; i<form.lenguaje.length;i++){
        if(form.lenguaje[i].checked){
            correcto += `El lenguaje seleccionada es: ${form.lenguaje[i].value} <br/>`
        }
    }

    for(let i = 0; i<form.hardware.length;i++){
        if(form.hardware[i].checked){
            correcto += `El hardware seleccionada es: ${form.hardware[i].value} <br/>`
        }
    }

    divCorrecto.innerHTML = correcto
    divErrores.innerHTML = incorrecto

}