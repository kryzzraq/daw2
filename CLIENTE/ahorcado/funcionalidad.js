//VARIABLES:
    var arrayPalabras = ["Sabio", "Casado", "Jubilado", "Camping", "Vampiro", "Hijos", "testamento", "Vidrio", "Hueso", "Aguacero", 
    "Realidad", "Relleno", "Mercado", "Medicina", "Prohibir"]
    arrayLetrasDichas = []
    const FALLOS = 8

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

    //añadir funcionalidad a los botones
    btnA.addEventListener("click",function(){pulsarBoton(btnA)})
    btnB.addEventListener("click",function(){pulsarBoton(btnB)})
    btnC.addEventListener("click",function(){pulsarBoton(btnC)})
    btnD.addEventListener("click",function(){pulsarBoton(btnD)})
    btnE.addEventListener("click",function(){pulsarBoton(btnE)})
    btnF.addEventListener("click",function(){pulsarBoton(btnF)})
    btnG.addEventListener("click",function(){pulsarBoton(btnG)})
    btnH.addEventListener("click",function(){pulsarBoton(btnH)})
    btnI.addEventListener("click",function(){pulsarBoton(btnI)})
    btnJ.addEventListener("click",function(){pulsarBoton(btnJ)})
    btnK.addEventListener("click",function(){pulsarBoton(btnK)})
    btnL.addEventListener("click",function(){pulsarBoton(btnL)})
    btnM.addEventListener("click",function(){pulsarBoton(btnM)})
    btnN.addEventListener("click",function(){pulsarBoton(btnN)})
    btnÑ.addEventListener("click",function(){pulsarBoton(btnÑ)})
    btnO.addEventListener("click",function(){pulsarBoton(btnO)})
    btnP.addEventListener("click",function(){pulsarBoton(btnP)})
    btnQ.addEventListener("click",function(){pulsarBoton(btnQ)})
    btnR.addEventListener("click",function(){pulsarBoton(btnR)})
    btnS.addEventListener("click",function(){pulsarBoton(btnS)})
    btnT.addEventListener("click",function(){pulsarBoton(btnT)})
    btnU.addEventListener("click",function(){pulsarBoton(btnU)})
    btnV.addEventListener("click",function(){pulsarBoton(btnV)})
    btnW.addEventListener("click",function(){pulsarBoton(btnW)})
    btnX.addEventListener("click",function(){pulsarBoton(btnX)})
    btnY.addEventListener("click",function(){pulsarBoton(btnY)})
    btnZ.addEventListener("click",function(){pulsarBoton(btnZ)})



//Funciones
const generarPosicionAleatoria = () =>{
    var num = Math.floor(Math.random() * arrayPalabras.length);
    return num;
}

var numero = generarPosicionAleatoria()
var palabra = arrayPalabras[numero]
console.log(arrayPalabras[numero])
console.log(palabra)
console.log(numero)
