var form  = document.getElementById('formulario')
var divCorrecto = document.getElementById('contenedorCorrecto')
var divIncorrecto = document.getElementById('contenedorErrores')
var boton = document.getElementById('enviar')
var correcto = ''
var incorrecto = ''

boton.addEventListener('click',()=>{validar()})

const validar = () => {
    let regexFecha = /(\d{4})\-((0[1-9])|(1(0|1|2)))\-((0[1-9])|(1|2[0-9])|(3(0|1)))/ 

    let halladoFecha = form.fecha.value.match(regexFecha)
    if(halladoFecha == null){incorrecto+=`Formato de fecha inválido`}
    else{correcto += `La fecha seleccionada es: ${form.fecha.value}<br/>`}
    
    correcto += `El color elegido es ${form.color.value}<br/>`
    correcto += `La provincia elegida es: ${form.provincia.value}<br/>`
    
    for(let i = 0; i<form.conector.length; i++){
        if(form.conector[i].checked){correcto+=`El conecto elegido es: ${form.conector[i].value}`}
    }

    divCorrecto.innerHTML = correcto
    divIncorrecto.innerHTML = incorrecto
}