var form = document.getElementById('formulario')
var divCorrecto = document.getElementById('contenedorCorrecto')
var divIncorrecto = document.getElementById('contenedorErrores')
var boton = document.getElementById('enviar')
var correcto = ''
var incorrecto = ''
boton.addEventListener('click',()=>{validar()})

const validar = () => {
    for(let i = 0; i<form.asignatura.length; i++){
        if(form.asignatura[i].checked){
            correcto += 'La asignatura marcada es: '+ form.asignatura[i].value + "<br/>"
        }
    }

    for(let i = 0; i<form.editor.length; i++){
        if(form.editor[i].checked){
            correcto += `El editor usado es: ${form.editor[i].value}<br/>` 
        }
    }

    correcto += `El texto del textarea es: ${form.textarea.value} <br/>`

    correcto += `El valor seleccionado en procesador es: ${form.procesador.value}` 

    divCorrecto.innerHTML = correcto
}