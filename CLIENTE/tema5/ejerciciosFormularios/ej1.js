/*Declaración de elementos*/
var boton = document.getElementById("enviar")
var divContenedor = document.getElementById("contenedor")
var divErrores = document.getElementById("contenedorErrores")
var frmIdioma = document.getElementsByName("idioma")
var frmConector = document.getElementsByName("conector")
var frmNombre = document.getElementById("nombre")
var frmApellidos = document.getElementById("apellidos")
var frmSexo = document.getElementsByName("sexo")
var frmSexo1 = document.getElementsByName("sexo1")
var frmFecha = document.getElementsByName("fecha")

/* Evento */
boton.addEventListener("click", function(){pintarDatos()})
/* Funciones */
pintarDatos = () =>{
    var pintar
    for(let i = 0; i<frmIdioma.length; i++){
        pintar += `El elemento ${frmIdioma[i].value} seleccionado es ${frmIdioma[i].checked} <br/>`
    }

    //var a = frmConector.options[frmConector.selectedIndex].value;
    //console.log(a) --
    
    pintar += `El nombre es: ${frmNombre.value} <br/>` 
    pintar += `Los apellidos son: ${frmApellidos.value} <br/>`

    pintar += `El elemento ${frmSexo1.value} seleccionado es ${frmSexo1.checked}<br/>`
    pintar += `La fecha seleccionada es: ${frmFecha.value}`
    divContenedor.innerHTML = pintar
}