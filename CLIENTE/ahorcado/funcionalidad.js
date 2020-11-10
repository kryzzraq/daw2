//VARIABLES:
    const arrayPalabras = ["SABIO", "CASADO", "JUBILADO", "CAMPING", "VAMPIRO", "HIJOS", "TESTAMENTO", "VIDRIO", "HUESO", "AGUACERO", 
    "REALIDAD", "RELLENO", "MERCADO", "MEDICINA", "PROHIBIR"]
    arrayPalabra = []
    const FALLOS = 7
    numeroFallos = 0;

    //botones del abecedario
    var btnA = document.getElementById("btn_a")
    var btnB = document.getElementById("btn_b")
    var btnC = document.getElementById("btn_c")
    var btnD = document.getElementById("btn_d")
    var btnE = document.getElementById("btn_e")
    var btnF = document.getElementById("btn_f")
    var btnG = document.getElementById("btn_g")
    var btnH = document.getElementById("btn_h")
    var btnI = document.getElementById("btn_i")
    var btnJ = document.getElementById("btn_j")
    var btnK = document.getElementById("btn_k")
    var btnL = document.getElementById("btn_l")
    var btnM = document.getElementById("btn_m")
    var btnN = document.getElementById("btn_n")
    var btnÑ = document.getElementById("btn_ñ")
    var btnO = document.getElementById("btn_o")
    var btnP = document.getElementById("btn_p")
    var btnQ = document.getElementById("btn_q")
    var btnR = document.getElementById("btn_r")
    var btnS = document.getElementById("btn_s")
    var btnT = document.getElementById("btn_t")
    var btnU = document.getElementById("btn_u")
    var btnV = document.getElementById("btn_v")
    var btnW = document.getElementById("btn_w")
    var btnX = document.getElementById("btn_x")
    var btnY = document.getElementById("btn_y")
    var btnZ = document.getElementById("btn_z")

    //variables de div
    var divPalabra = document.getElementById("palabraHTML")
    var imgAhorcado = document.getElementById("imagen")

    //añadir funcionalidad a los botones
    btnA.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnA))})
    btnB.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnB))})
    btnC.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnC))})
    btnD.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnD))})
    btnE.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnE))})
    btnF.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnF))})
    btnG.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnG))})
    btnH.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnH))})
    btnI.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnI))})
    btnJ.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnJ))})
    btnK.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnK))})
    btnL.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnL))})
    btnM.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnM))})
    btnN.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnN))})
    btnÑ.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnÑ))})
    btnO.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnO))})
    btnP.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnP))})
    btnQ.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnQ))})
    btnR.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnR))})
    btnS.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnS))})
    btnT.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnT))})
    btnU.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnU))})
    btnV.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnV))})
    btnW.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnW))})
    btnX.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnX))})
    btnY.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnY))})
    btnZ.addEventListener("click",function(){compararArrays(arrayPalabra,arrayDelJugador,pulsarBoton(btnZ))})



//Funciones
const generarNumeroAleatorio = () =>{
    var num = Math.floor(Math.random() * arrayPalabras.length)
    return num;
}

const seleccionarPalabraAleatoria = () =>{
    var palabraAdivinar = arrayPalabras[generarNumeroAleatorio()]
    return palabraAdivinar
}

const dividirPalabraArray = (palabra) =>{
    var arrayPalabra = palabra.split("")
    return arrayPalabra;
}

const crearArrayJugador = (array) => {
    var arrayJugador = []
    for(let i = 0; i<array.length; i++){
        arrayJugador[i] = "_"
    }
    return arrayJugador
}
const compararArrays = (arrayPalabra, arrayJugador, valorLetra) =>{
    for(let i = 0; i<arrayPalabra.length; i++){
        if(arrayPalabra[i] == valorLetra){
            arrayJugador[i] = valorLetra
        }
    }
    console.log(numeroFallos)
    numFallos(numeroFallos)
    divPalabra.innerHTML = arrayJugador
    console.log(arrayDelJugador)
    return arrayJugador
}
const pulsarBoton = (letra) =>{
    //deshabilito el boton
    letra.disabled = true
    return letra.value
}

const numFallos = (fallos) =>{
    switch(fallos){
        case 1:
            imgAhorcado.innerHTML = "<img src='gui/fallos1.jpg'>"
            break
        case 2:
            imgAhorcado.innerHTML = "<img src='gui/fallos2.jpg'>"
            break
        case 3:
            imgAhorcado.innerHTML = "<img src='gui/fallos3.jpg'>"
            break
        case 4:
            imgAhorcado.innerHTML = "<img src='gui/fallos4.jpg'>"
            break
        case 5:
            imgAhorcado.innerHTML = "<img src='gui/fallo5.jpg'>"
            break
        case 6:
            imgAhorcado.innerHTML = "<img src='gui/fallos6.jpg'>"
            break
        case 7:
            imgAhorcado.innerHTML = "<img src='gui/fallos7.jpg'>"
            break
        default:
            imgAhorcado.innerHTML = "<img src='gui/fallos0.jpg'>"
    }
}


 //prueba de que el juego comienza:
var palabraAjugar = seleccionarPalabraAleatoria();
console.log(palabraAjugar)

var arrayPalabra = dividirPalabraArray(palabraAjugar)
console.log(arrayPalabra)

var arrayDelJugador = crearArrayJugador(arrayPalabra)
console.log(arrayDelJugador)