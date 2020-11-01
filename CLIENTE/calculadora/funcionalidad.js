//Declaración de variables para poder usar JS.
var btnUno = document.getElementById("btnUno")
var btnDos = document.getElementById("btnDos")
var btnTres = document.getElementById("btnTres")
var btnCuatro = document.getElementById("btnCuatro")
var btnCinco = document.getElementById("btnCinco")
var btnSeis = document.getElementById("btnSeis")
var btnSiete = document.getElementById("btnSiete")
var btnOcho = document.getElementById("btnOcho")
var btnNueve = document.getElementById("btnNueve")
var btnCero = document.getElementById("btnCero")
var display = document.getElementById("pantalla")
var btnDosCeros = document.getElementById("btnDosCero")
//botones operaciones
var btnC = document.getElementById("btnC")
var btnCE = document.getElementById("btnCE")
var btnSuma = document.getElementById("btnSumar")
var bntResta = document.getElementById("btnRestar")
var btnMultiplicar = document.getElementById("btnMultiplicar")
var btnDividir = document.getElementById("btnDividir")
var btnIgual = document.getElementById("btnIgual")
var btnPunto = document.getElementById("btnPunto")


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
btnPunto.addEventListener("click",function(){actualizarDisplay(btnPunto.value)})
btnDosCeros.addEventListener("click",function(){actualizarDisplay(btnDosCeros.value)})
btnC.addEventListener("click", function(){borrarDisplay()})
btnC.addEventListener("click", function(){borrarTodo()})
btnSuma.addEventListener("click",function(){operar(btnSuma.value)})
btnIgual.addEventListener("click", function(){igual()})
bntResta.addEventListener("click",function(){operar(bntResta.value)})
btnMultiplicar.addEventListener("click",function(){operar(btnMultiplicar.value)})
btnDividir.addEventListener("click",function(){operar(btnDividir.value)})

const actualizarDisplay = (numero)=>{
    if(display.value.length <10)
        display.value += numero
}
const borrarDisplay = () =>{
    display.value = ""
}
const borrarTodo = () =>{
    borrarDisplay()
    ope = ""
    num1=""
    num2=""
}
const operar = (botonOperacion) => {
    num1 = display.value;
    display.value ="";
    ope = botonOperacion;
}
const igual = () => {
    num2 = display.value;
    resultado = 0.0;
    
    switch (ope){
        case "+":
            display.value = parseInt(num1) + parseInt(num2)
            break;
        case "-":
            display.value = parseInt(num1) - parseInt(num2)
            break;
        case "x":
            display.value = parseInt(num1) * parseInt(num2)
            break;
        case "/":
            display.value = parseInt(num1) / parseInt(num2)
            break;
    }
}