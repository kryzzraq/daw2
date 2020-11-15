/* ARRAY DE PALABRAS */
    const arrayPalabras = ['AURORA', 'BAMBI', 'BELLA', 'BESTIA', 'BLANCANIEVES', 'CAMPANILLA', 
    'CHIP', 'DAYSI', 'DUMBO', 'ELSA', 'FORKY', 'CHESIRE', 'GOOFY', 'HERCULES', 'IGOR', 
    'JASMINE', 'JESSIE', 'CENICIENTA', 'MICKEY', 'MINNIE', 'MULAN', 'MERIDA', 'OLAF', 'PIGLET',
    'PINOCHO', 'PLUTO', 'POCAHONTAS', 'RAPUNZEL', 'SIMBA', 'STITCH', 'TIANA', 'TIGGER', 'VAIANA', 
    'WOODY']

/* VARIABLES NECESARIAS */
    const FALLOS = 8
    var contadorFallos = 0
    var palabraJugador = ""

/* BOTONES */
    var btnA = document.getElementById('btn_a')
    var btnB = document.getElementById('btn_b')
    var btnC = document.getElementById('btn_c')
    var btnD = document.getElementById('btn_d')
    var btnE = document.getElementById('btn_e')
    var btnF = document.getElementById('btn_f')
    var btnG = document.getElementById('btn_g')
    var btnH = document.getElementById('btn_h')
    var btnI = document.getElementById('btn_i')
    var btnJ = document.getElementById('btn_j')
    var btnK = document.getElementById('btn_k')
    var btnL = document.getElementById('btn_l')
    var btnM = document.getElementById('btn_m')
    var btnN = document.getElementById('btn_n')
    var btnÑ = document.getElementById('btn_ñ')
    var btnO = document.getElementById('btn_o')
    var btnP = document.getElementById('btn_p')
    var btnQ = document.getElementById('btn_q')
    var btnR = document.getElementById('btn_r')
    var btnS = document.getElementById('btn_s')
    var btnT = document.getElementById('btn_t')
    var btnU = document.getElementById('btn_u')
    var btnV = document.getElementById('btn_v')
    var btnW = document.getElementById('btn_w')
    var btnX = document.getElementById('btn_x')
    var btnY = document.getElementById('btn_y')
    var btnZ = document.getElementById('btn_z')
    var btnJugar = document.getElementById('aJugar')
    var volverAJugar = document.getElementById('volverAJugar')
    var botones = document.getElementById('botonesLetras')

/* DIVS */
    var divImg = document.getElementById('imagen')
    var divPalabra = document.getElementById('palabraHTML')

/* ASIGNAR FUNCIONES A LOS BOTONES */
    btnA.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnA)) })
    btnB.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnB)) })
    btnC.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnC)) })
    btnD.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnD)) })
    btnE.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnE)) })
    btnF.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnF)) })
    btnG.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnG)) })
    btnH.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnH)) })
    btnI.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnI)) })
    btnJ.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnJ)) })
    btnK.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnK)) })
    btnL.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnL)) })
    btnN.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnN)) })
    btnM.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnM)) })
    btnÑ.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnÑ)) })
    btnO.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnO)) })
    btnP.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnP)) })
    btnQ.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnQ)) })
    btnR.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnR)) })
    btnS.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnS)) })
    btnT.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnT)) })
    btnU.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnU)) })
    btnV.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnV)) })
    btnW.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnW)) })
    btnX.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnX)) })
    btnY.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnY)) })
    btnZ.addEventListener('click', function () { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnZ)) })
    btnJugar.addEventListener('click', function () { divPalabra.innerHTML = escribirPalabra(arrayDelJugador,palabraJugador) })
    volverAJugar.addEventListener('click', function () {window.location.reload() })
/* FUNCIONES */

//Seleccionar una número aleatoria:
    const numAleatorio = () =>{
        numero = Math.floor(Math.random() * arrayPalabras.length)
        return numero
    }

//devuelve el valor de la letra y deshabilita la tecla:
    const pulsarLetra = (letra) => {
        letra.disabled = true
        return letra.value
    }

//Obtener la palabra del jugador, para que el array no se me pinte con "," en el documento
    const escribirPalabra = (jugArray,jugPalabra) => {
        for(let i = 0; i<jugArray.length;i++){
            jugPalabra+=`${jugArray[i]} `;
        }
        return jugPalabra
    }

//busco la letra pulsada dentro de la palabra. Para ello necesitaré el valor de la letra, la palabra aleatoria y la palabra del jugador.
    const buscarLetra = (arrayPalabra, arrayJugador, valorLetra) => {
        //oculto el boton de mostrar palabra:
        btnJugar.style.display = 'none'

        //creo un boolean para controlar el numero de fallos
        var boolEncontrado = false
        
        //recorro el array con la palabra
        for(let i = 0; i<arrayPalabra.length; i++){
            //si encuntro la letra en el array
            if(arrayPalabra[i] == valorLetra){
                //cambio este avisador a true, para no sumar un fallo luego
                boolEncontrado = true;
                //y sustituyo el guion por el valor de la letra
                arrayJugador[i] = valorLetra
            }
        }

        //si el boolean es falso...
        if(!boolEncontrado){
            //sumo uno al contador de fallos
            contadorFallos++
        }

        //imprimo la palabra actualizada
        divPalabra.innerHTML = escribirPalabra(arrayJugador,palabraJugador)

        //pinto la imagen:
        pintarImagen(contadorFallos)

        //Por último, si el array del jugador es igual al array de la palabra mostramos que ha ganado:
        if (compararArrays(PALABRA_ALEATORIA,arrayDelJugador)){
            divImg.innerHTML = `<img src="gui/victoria.jpg" alt="7fallos">`
        }
        console.log(arrayDelJugador)

}

    //funcion para pintar la imagen
    const pintarImagen = (numfallos) =>{
        switch (numfallos){
            case 0:
                divImg.innerHTML = `<img src="gui/fallos${numfallos}.jpg" alt="0fallos">`
                break
            case 1:
                divImg.innerHTML = `<img src="gui/fallos${numfallos}.jpg" alt="1fallo">`
                break
            case 2:
                divImg.innerHTML = `<img src="gui/fallos${numfallos}.jpg" alt="2fallos">`
                break
            case 3:
                divImg.innerHTML = `<img src="gui/fallos${numfallos}.jpg" alt="3fallos">`
                break
            case 4:
                divImg.innerHTML = `<img src="gui/fallos${numfallos}.jpg" alt="4fallos">`
                break
            case 5:
                divImg.innerHTML = `<img src="gui/fallos${numfallos}.jpg" alt="5fallos">`
                break
            case 6:
                divImg.innerHTML = `<img src="gui/fallos${numfallos}.jpg" alt="6fallos">`
                break
            case 7:
                divImg.innerHTML = `<img src="gui/fallos${numfallos}.jpg" alt="7fallos">`
                botones.innerHTML = "Has perdido :( <br> Vuelve a intentarlo"
                break
            default: 
                botones.innerHTML = "Has perdido :( <br> Vuelve a intentarlo"
        }
    }

    

//Funcion que compara si los arrays son iguales, puesto que array1 == array2 siempre dará false a no se que apunten a la misma direccion
    const compararArrays = (array1, array2) => {
        boolFlag = true
        for(let i = 0; i<array1.length && boolFlag; i++){
            if(array1[i] != array2[i]){
                boolFlag = false
            }
        }
        if(boolFlag)
            botones.innerHTML = "Enhorabuena, ¡has ganado!"
        return boolFlag
    }

//Creo un array relleno con "_" de la misma longitud que el array de la palabra a adivinar
    const copiarArray = (arrayPalabra) =>{
        var arrayCopia = []
        for(let i = 0; i<arrayPalabra.length;i++){
            arrayCopia[i] = "_"
        }
        return arrayCopia
    }


/* FUNCIONALIDAD */

    //Selecciono una palabra aleatoria
    const PALABRA_ALEATORIA = arrayPalabras[numAleatorio()]

    //Convierto la palabra original en un array separando las letras:
    const ARRAY_PALABRA_ALEATORIA = PALABRA_ALEATORIA.split("")

    //Hago un array relleno con "_" de la misma longitud que el array de la palabra para adivinar:
    var arrayDelJugador = copiarArray(ARRAY_PALABRA_ALEATORIA);
    console.log(ARRAY_PALABRA_ALEATORIA)
    console.log(arrayDelJugador)

   