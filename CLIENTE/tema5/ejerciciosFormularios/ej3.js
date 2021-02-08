var form = document.getElementById('formulario')
var boton = document.getElementById('enviar')
var divCorrecto = document.getElementById('contenedorCorrecto')
var divIncorrecto = document.getElementById('contenedorErrores')
var correcto = ''
var incorrecto = ''

boton.addEventListener('click',()=>{validar()})

const validar = () =>{
    correcto += "Color elejido: " + form.color.value + "<br/>"
    correcto += "Texto del textarea: " + form.textarea.value + "<br/>"
    correcto += "Texto del select: " + form.lenguaje.value + "<br/>"

    debugger
    for(let i = 0; i<form.ciclo.length; i++){
        if(form.ciclo[i].checked){
            correcto += "Opción de ciclo: " + form.ciclo[i].value + "<br/>"
        }
    }

    correcto += "Fecha elegida: " + form.fecha.value + "<br/>"
    correcto += "Ciclo 2 elegido: " + form.ciclo1.value + "<br/>"

    divCorrecto.innerHTML = correcto
}
