var form = document.getElementById('formulario')
var boton = document.getElementById('enviar')
var divCorrecto = document.getElementById('contenedorCorrecto')
var divIncorrecto = document.getElementById('contenedorErrores')
var correcto = ''
var incorrecto = ''

boton.addEventListener('click',()=>{validar()})

const validar = () => {
    let regexFecha = /(\d{4})\-((0[1-9])|(1(0|1|2)))\-((0[1-9])|(1|2[0-9])|(3(0|1)))/ 
    let regexInsti = /^[a-zA-Z ]+$/
    let regexEstudios = /[\dº a-zA-Z]+/
    var regexHora = /((0[0-9])|(1[0-9])|(2[0-3])):([0-5][0-9])/

    correcto += `El texto escrito es: ${form.textarea.value}<br/>`

    let halladoFecha = form.fecha.value.match(regexFecha)
    if(halladoFecha == null){incorrecto += `El formato de fecha es inválido.<br/>`}
    else{correcto += `La fecha elegida es: ${form.fecha.value}<br/>`}

    for(let i = 0; i<form.sexo.lenght; i++){
        if(form.sexo[i].checked){correcto+=`El sexo elegido es: ${form.sexo[i].value}`}
    }

    let halladoHora = form.hora.value.match(regexHora)

    if(halladoHora == null){incorrecto+=`El formato de hora es incorrecto<br/>`}
    else{correcto +=`La hora elegida es: ${form.hora.value}<br/>`}

    correcto += `La asignatura elegida es: ${form.asignatura.value}<br/>`

    let halladoInsti = form.instituto.value.match(regexInsti)

    if(halladoInsti == null){incorrecto += `El formato de instituto es erróneo<br/>`}
    else{correcto += `El instituto elegido es: ${form.instituto.value}<br/>`}

    let halladoCurso = form.estudios.value.match(regexEstudios)
    if(halladoCurso==null){incorrecto += `El formato de estudios es erróneo<br/>`}
    else{correcto += `El curso elegido es: ${form.estudios.value}<br/>`}

    let halladoFecha1 = form.fecha1.value.match(regexFecha)
    if(halladoFecha1 == null){incorrecto += `El formato de fecha es inválido.<br/>`}
    else{correcto += `La fecha elegida es: ${form.fecha.value}<br/>`}

    let halladoHora1 = form.hora1.value.match(regexHora)

    if(halladoHora1 == null){incorrecto+=`El formato de hora es incorrecto<br/>`}
    else{correcto +=`La hora elegida es: ${form.hora.value}<br/>`}

    for(let i = 0; i<form.asignatura1.lenght; i++){
        if(form.asignatura1[i].checked){correcto += `La asignatura elegida es: ${form.asignatura1[i].value}<br/>`}
    }

    correcto += `El periferico elegido es: ${form.periferico.value}<br/>`

    for(let i = 0; i<form.lenguaje.lenght;i++){
        if(form.lenguaje[i].checked){correcto += `El lenguaje que sabe es: ${form.lenguaje.value}`}
    }

    divCorrecto.innerHTML = correcto
    divIncorrecto.innerHTML = incorrecto
}