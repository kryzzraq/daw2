var form = document.getElementById('formulario')
var divCorrecto = document.getElementById('contenedorCorrecto')
var divIncorrecto = document.getElementById('contenedorErrores')
var boton = document.getElementById('enviar')
var correcto =''
var incorrecto =''

boton.addEventListener('click',()=>{validar()})

const validar = () => {
    let regexDNI = /^(\d{8})[a-zA-Z]$/
    var regexNombreApe = /( ?[a-zA-Z]+)+$/
    var regexTel = /\d{9}/

    for(let i = 0; i<form.curso.length; i++){
        if(form.curso[i].checked){correcto += `El curso elegido es: ${form.curso[i].value}<br/>`}
    }
    correcto += `El curso 2 elegido es: ${form.curso1.value}<br/>`

    correcto += `El texto introducido es: ${form.textarea.value}<br/>`

    let halladoDni = form.dni.value.match(regexDNI)
    if(halladoDni==null){incorrecto+=`El valor introducido como dni no es correcto<br/>`}
    else{correcto += `El dni introducido es: ${form.dni.value}<br/>`}

    let halladoNombre = form.nombre.value.match(regexNombreApe)
    let halladoApe = form.apellidos.value.match(regexNombreApe)

    if(halladoNombre==null){incorrecto+=`El valor introducido como nombre no es correcto<br/>`}
    else{correcto += `El nombre introducido es: ${form.nombre.value}<br/>`}
    if(halladoApe==null){incorrecto+=`El valor introducido como apellido no es correcto<br/>`}
    else{correcto += `El apellidos introducido es: ${form.apellidos.value}<br/>`}

    let halladoTel = form.tel.value.match(regexTel)
    if(halladoTel==null){incorrecto+=`El valor introducido como teléfono no es correcto<br/>`}
    else{correcto += `El teléfono introducido es: ${form.tel.value}<br/>`}

    divIncorrecto.innerHTML = incorrecto
    divCorrecto.innerHTML = correcto
}