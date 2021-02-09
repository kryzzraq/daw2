//añadir variables a los botones
var btn0 = document.getElementById("btnCero")
var btn00 = document.getElementById("btnDosCeros")
var btn1 = document.getElementById("btnUno")
var btn2 = document.getElementById("btnDos")
var btn3 = document.getElementById("btnTres")
var btn4 = document.getElementById("btnCuatro")
var btn5 = document.getElementById("btnCinco")
var btn6 = document.getElementById("btnSeis")
var btn7 = document.getElementById("btnSiete")
var btn8 = document.getElementById("btnOcho")
var btn9 = document.getElementById("btnNueve")
var display = document.getElementById("display")
var btnSuma = document.getElementById("btnSuma")
var btnResta = document.getElementById("btnResta")
var btnIgual = document.getElementById("btnIgual")
var btnMultiplicar = document.getElementById("btnMultiplicar")
var btnDividir = document.getElementById("btnDividir")
var btnC = document.getElementById("btnC")
var btnPorcentaje = document.getElementById("btnPorcentaje")
var cientifica = document.getElementById("btnCient")

//añadir funcionalidad a los botones:
btn0.addEventListener("click",function(){actualizarDisplay(btn0.value)})
btn00.addEventListener("click",function(){actualizarDisplay(btn00.value)})
btn1.addEventListener("click", function(){actualizarDisplay(btn1.value)})
btn2.addEventListener("click",function(){actualizarDisplay(btn2.value)})
btn3.addEventListener("click", function(){actualizarDisplay(btn3.value)})
btn4.addEventListener("click", function(){actualizarDisplay(btn4.value)})
btn5.addEventListener("click",function(){actualizarDisplay(btn5.value)})
btn6.addEventListener("click",function(){actualizarDisplay(btn6.value)})
btn7.addEventListener("click", function(){actualizarDisplay(btn7.value)})
btn8.addEventListener("click", function(){actualizarDisplay(btn8.value)})
btn9.addEventListener("click", function(){actualizarDisplay(btn9.value)})
btnC.addEventListener("click",function(){borrarMemoria()})
//btnResta.addEventListener("click",function(){actualizarDisplay(btnResta.value)})

//funciones
//primero que el display haga algo
const actualizarDisplay = (valorTecla) => {
    if(display.value.length < 10)
        display.value += valorTecla
}
//que la C deje toda la memoria a 0
const borrarMemoria = () => {
    display.value=""
}