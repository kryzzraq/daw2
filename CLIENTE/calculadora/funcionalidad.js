//Declaración de variables para poder usar JS.
var btnUno = document.getElementById("btnUno");
var btnDos = document.getElementById("btnDos");
var btnTres = document.getElementById("btnTres");
var btnCuatro = document.getElementById("btnCuatro");
var btnCinco = document.getElementById("btnCinco");
var btnSeis = document.getElementById("btnSeis");
var btnSiete = document.getElementById("btnSiete");
var btnOcho = document.getElementById("btnOcho");
var btnNueve = document.getElementById("btnNueve");
var btnCero = document.getElementById("btnCero");
var display = document.getElementById("pantalla");


//Añadir funcionalidad a los botones del 0 al 9:
btnUno.addEventListener("click", function(){actualizarDisplay(btnUno.value)})
btnDos.addEventListener("click",function(){actualizarDisplay(btnDos.value)})
btnTres.addEventListener("click",function(){actualizarDisplay(btnTres.value)})
btnCuatro.addEventListener("click",function(){actualizarDisplay(btnCuatro.value)})
btnCinco.addEventListener("click",function(){actualizarDisplay(btnCinco.value)})
btnSeis.addEventListener("click",function(){actualizarDisplay(btnSeis.value)})
btnSiete.addEventListener("click",function(){actualizarDisplay(btnSiete.value)})
btnOcho.addEventListener("click",function(){actualizarDisplay(btnOcho.value)})
btnNueve.addEventListener("click",function(){actualizarDisplay(btnNueve.value)})
btnCero.addEventListener("click",function(){actualizarDisplay(btnCero.value)})


function actualizarDisplay(numero){
    if(display.value.length <10)
        display.value += numero
}
