var form = document.getElementById('formulario')
var boton = document.getElementById('enviar')
var divCorrecto = document.getElementById('contenedorCorrecto')
var divIncorrecto = document.getElementById('contenedorErrores')
var correcto = ''
var incorrecto = ''
boton.addEventListener('click',()=>{validar()})

const validar = () => {
    let regexDNI = /\d{8}[a-zA-Z]$/
    let regexNombreApe = /( ?[a-zA-Z]+)+/
    let regexEmail = /[a-zA-Z0-9()<>,;:"\[\]\ç\%\&]+@[a-zA-Z]+\.[a-zA-Z]+/
    let regexHora = /((0[0-9])|(1[0-9])|(2[0-3])):([0-5][0-9])/

    correcto += `La velocidad elegida es ${form.velocidad.value} <br>`
    let halladoDni = form.dni.value.match(regexDNI)
    let halladoNombre = form.nombre.value.match(regexNombreApe)
    let halladoApellido = form.apellidos.value.match(regexNombreApe)
    let halladoEmail = form.mail.value.match(regexEmail)
    let halladoHora = form.hora.value.match(regexHora)

    if(halladoDni == null){incorrecto += `El dni introducido no es válido.<br/>`}
    else{correcto += `El dni introducido es: ${form.dni.value}<br/>`}

    if(halladoNombre == null){incorrecto += `El nombre introducido no es válido.<br/>`}
    else{correcto += `El nombre introducido es: ${form.nombre.value}<br/>`}

    if(halladoApellido == null){incorrecto += `Los apellidos introducido no es válido.<br/>`}
    else{correcto += `Los apellidos introducido es: ${form.apellidos.value}<br/>`}

    if(halladoEmail == null){incorrecto += `El email introducido no es válido.<br/>`}
    else{correcto += `El email introducido es: ${form.mail.value}<br/>`}

    correcto += `El color elegido es ${form.color.value} <br>`
    correcto += `El texto introducido es ${form.textarea.value} <br>`

    for(let i = 0; i<form.procesador.length; i++){
        if(form.procesador[i].checked){correcto += `El color elegido es ${form.procesador[i].value} <br>`}
    }

    if(halladoHora == null){incorrecto += `La hora introducido no es válido.<br/>`}
    else{correcto += `La hora introducido es: ${form.hora.value}<br/>`}

    for(let i = 0; i<form.velocidad1.length; i++){
        if(form.velocidad1[i].checked){correcto += `La velocidad elegida es ${form.velocidad1[i].value} <br>`}
    }
    divCorrecto.innerHTML = correcto
    divIncorrecto.innerHTML = incorrecto
}
