var form = document.getElementById('formulario')
var divCorrecto = document.getElementById('contenedorCorrecto')
var divIncorrecto = document.getElementById('contenedorErrores')
var boton = document.getElementById('enviar')
var correcto = ''
var incorrecto = ''

boton.addEventListener('click',() =>{validar()})

const validar = () => {
    let regexFecha = /(\d{4})\-((0[1-9])|(1(0|1|2)))\-((0[1-9])|(1|2[0-9])|(3(0|1)))/ 
    let regexInsti = /^[a-zA-Z ]+$/
    let regexEstudios = /[\dº a-zA-Z]+/
    var regexHora = /((0[0-9])|(1[0-9])|(2[0-3])):([0-5][0-9])/

    let halladoFecha = form.fecha.value.match(regexFecha)

    if(halladoFecha==null){incorrecto += `El formato de fecha es invalido<br/>`}
    else{correcto += `La fecha elegida es ${form.fecha.value} <br/>`}

    correcto += `El día de la semana elegido es: ${form.diasemana.value}<br/>`
    
    for(let i = 0; i<form.sexo.lenght; i++){
        if(form.sexo[i].cheked){correcto += `El sexo elegido es: ${form.sexo[i].value}<br/>`}
    }

    for(let i = 0; i<form.componente.lenght; i++){
        if(form.componente[i].cheked){correcto += `El sexo elegido es: ${form.componente[i].value}<br/>`}
    }

    correcto += `El texto escrito es: ${form.textarea.value}<br/>`
    let halladoInsti = form.instituto.value.match(regexInsti)

    if(halladoInsti==null){incorrecto += `El formato de instituto es invalido<br/>`}
    else{correcto += `El instituto elegido es ${form.instituto.value} <br/>`}

    let halladoCurso = form.estudios.value.match(regexEstudios)

    if(halladoCurso==null){incorrecto += `El formato de curso es invalido<br/>`}
    else{correcto += `El curso elegido es ${form.estudios.value} <br/>`}

    let halladoHora = form.hora.value.match(regexHora)

    if(halladoHora==null){incorrecto += `El formato de hora es invalido<br/>`}
    else{correcto += `La hora elegida es ${form.hora.value} <br/>`}

    divCorrecto.innerHTML = correcto
    divIncorrecto.innerHTML = incorrecto

}