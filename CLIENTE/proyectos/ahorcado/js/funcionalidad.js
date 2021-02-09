/* ARRAY DE PALABRAS */
    const arrayPalabras = ['ALICIA', 'CHESIRE','ARIEL','TRITON','RAFIKI','MUFASA','DAMA','ALADDIN',
    'PONGO', 'BAMBI', 'BELLA', 'BESTIA', 'BLANCANIEVES', 'CAMPANILLA', 'PEGASO',
    'CHIP', 'DAYSI', 'DUMBO', 'ELSA', 'FORKY', 'CHESIRE', 'GOOFY', 'HERCULES', 'IGOR', 'ESMERALDA',
    'JASMINE', 'JESSIE', 'CENICIENTA', 'MICKEY', 'MINNIE', 'MULAN', 'MERIDA', 'OLAF', 'PIGLET',
    'PINOCHO', 'PLUTO', 'POCAHONTAS', 'RAPUNZEL', 'SIMBA', 'STITCH', 'TIANA', 'TIGGER', 'WOODY','URSULA' ]

/* VARIABLES NECESARIAS */
    let contadorFallos = 0
    let palabraJugador = ""
    let palabraCorrecta = ""

/* BOTONES */
    let btnA = document.getElementById('btn_a')
    let btnB = document.getElementById('btn_b')
    let btnC = document.getElementById('btn_c')
    let btnD = document.getElementById('btn_d')
    let btnE = document.getElementById('btn_e')
    let btnF = document.getElementById('btn_f')
    let btnG = document.getElementById('btn_g')
    let btnH = document.getElementById('btn_h')
    let btnI = document.getElementById('btn_i')
    let btnJ = document.getElementById('btn_j')
    let btnK = document.getElementById('btn_k')
    let btnL = document.getElementById('btn_l')
    let btnM = document.getElementById('btn_m')
    let btnN = document.getElementById('btn_n')
    let btnÑ = document.getElementById('btn_ñ')
    let btnO = document.getElementById('btn_o')
    let btnP = document.getElementById('btn_p')
    let btnQ = document.getElementById('btn_q')
    let btnR = document.getElementById('btn_r')
    let btnS = document.getElementById('btn_s')
    let btnT = document.getElementById('btn_t')
    let btnU = document.getElementById('btn_u')
    let btnV = document.getElementById('btn_v')
    let btnW = document.getElementById('btn_w')
    let btnX = document.getElementById('btn_x')
    let btnY = document.getElementById('btn_y')
    let btnZ = document.getElementById('btn_z')
    let btnJugar = document.getElementById('aJugar')
    let volverAJugar = document.getElementById('volverAJugar')
    

/* DIVS */
    let divImg = document.getElementById('imagen')
    let divPalabra = document.getElementById('palabraHTML')
    let oportunidad = document.getElementById('oportunidad')
    let botones = document.getElementById('botonesLetras')
    let cajaTexto = document.getElementById('cajaTextoOportunidad')
    let btnEnviar = document.getElementById('enviarRespuesta')
    

/* ASIGNAR FUNCIONES A LOS BOTONES */
    btnA.addEventListener('click',  () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnA)) })
    btnB.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnB)) })
    btnC.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnC)) })
    btnD.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnD)) })
    btnE.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnE)) })
    btnF.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnF)) })
    btnG.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnG)) })
    btnH.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnH)) })
    btnI.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnI)) })
    btnJ.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnJ)) })
    btnK.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnK)) })
    btnL.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnL)) })
    btnN.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnN)) })
    btnM.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnM)) })
    btnÑ.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnÑ)) })
    btnO.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnO)) })
    btnP.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnP)) })
    btnQ.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnQ)) })
    btnR.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnR)) })
    btnS.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnS)) })
    btnT.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnT)) })
    btnU.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnU)) })
    btnV.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnV)) })
    btnW.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnW)) })
    btnX.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnX)) })
    btnY.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnY)) })
    btnZ.addEventListener('click', () => { buscarLetra(ARRAY_PALABRA_ALEATORIA,arrayDelJugador,pulsarLetra(btnZ)) })
btnJugar.addEventListener('click', () => {botones.style.display='block' //muestro los botones de las letras
                                                            btnJugar.style.display ='none' //oculto el boton de jugar
                                                            oportunidad.style.display='flex' //muestro el formulario de enviar respuesta
                                                            divPalabra.innerHTML = escribirPalabra(arrayDelJugador,palabraJugador) //escribo los guiones                                                                
                                                            })
    volverAJugar.addEventListener('click',  () => {window.location.reload() }) //refresco la página
    btnEnviar.addEventListener('click', () => {  funcEnviar()    })

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
        let boolEncontrado = false      //creo un boolean para controlar el numero de fallos
        
        for(let i = 0; i<arrayPalabra.length; i++){
            if(arrayPalabra[i] == valorLetra){   //si encuntro la letra en el array
                boolEncontrado = true;            //cambio este avisador a true, para no sumar un fallo luego
                arrayJugador[i] = valorLetra   //y sustituyo el guion por el valor de la letra
            }
        }

        if(!boolEncontrado){    //si el boolean es falso...sumo uno al contador de fallos
            contadorFallos++
        }

        divPalabra.innerHTML = escribirPalabra(arrayJugador,palabraJugador)     //imprimo la palabra actualizada

        pintarImagen(contadorFallos)     //pinto la imagen:

        //Por último, si el array del jugador es igual al array de la palabra mostramos que ha ganado:
        if (compararArrays(PALABRA_ALEATORIA,arrayDelJugador)){
            divImg.innerHTML = `<img src="gui/victoria.jpg" alt="7fallos">`
            volverAJugar.style.display ='block'
            botones.style.fontSize = "30px"
            botones.style.textAlign ="center"
        }

}

    //funcion para pintar la imagen según el número de fallos que tenga
    const pintarImagen = (numfallos) =>{
        if (numfallos < 7){
            divImg.innerHTML = `<img src="gui/fallos${numfallos}.jpg">`
        } else {
            divImg.innerHTML = `<img src="gui/fallos${numfallos}.jpg">`
            botones.style.fontSize = "30px"
            botones.style.textAlign ="center"
            volverAJugar.style.display ='block'
            oportunidad.style.display = 'none'
            divPalabra.innerHTML = escribirPalabra(ARRAY_PALABRA_ALEATORIA,palabraCorrecta)
            botones.innerHTML = `Has perdido :( <br/>Vuelve a intentarlo`
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
        if(boolFlag){
            botones.innerHTML = "Enhorabuena, ¡has ganado!"
            oportunidad.style.display ='none'
        }
        return boolFlag
    }

//Creo un array relleno con "_" de la misma longitud que el array de la palabra a adivinar
    const copiarArray = (arrayPalabra) =>{
        let arrayCopia = []
        for(let i = 0; i<arrayPalabra.length;i++){
            arrayCopia[i] = "_"
        }
        return arrayCopia
    }

//funcion enviar texto
const funcEnviar = () =>{
    let respuestaUsuario = cajaTexto.value.toUpperCase() //formateo a todo mayusculas para que sea correcto tanto en mayusculas como en minusculas
    let arrayRespuestaUsuario = respuestaUsuario.split("") //separo a un array
    //tanto si me da directamente al boton, como si me mete una palabra evalúo
    //(está puesto así porque si me daba directamente al "enviar respuesta" contabilizaba como victoria)
    if(arrayRespuestaUsuario.length === 0 || !compararArrays(arrayRespuestaUsuario,ARRAY_PALABRA_ALEATORIA)){
        //victoria. formateo la pagina con los nuevos datos
        divImg.innerHTML = `<img src="gui/fallos7.jpg" alt="7fallos" >`
        botones.style.fontSize = "30px"
        botones.style.textAlign ="center"
        volverAJugar.style.display ='block'
        oportunidad.style.display = 'none'
        divPalabra.innerHTML = escribirPalabra(ARRAY_PALABRA_ALEATORIA,palabraCorrecta)
        botones.innerHTML = `Has perdido :( <br/>Vuelve a intentarlo`
    } else {
        //derrota. formateo la página con los nuevos datos
        divImg.innerHTML = `<img src="gui/victoria.jpg" alt="7fallos">`
        divPalabra.innerHTML = respuestaUsuario.toUpperCase()
        volverAJugar.style.display ='block'
        botones.style.fontSize = "30px"
        botones.style.textAlign ="center"
        oportunidad.style.display ='none'                                                                            
    }
}


/* FUNCIONALIDAD */

    //Selecciono una palabra aleatoria
    const PALABRA_ALEATORIA = arrayPalabras[numAleatorio()]

    //Convierto la palabra original en un array separando las letras:
    const ARRAY_PALABRA_ALEATORIA = PALABRA_ALEATORIA.split("")

    //Hago un array relleno con "_" de la misma longitud que el array de la palabra para adivinar:
    let arrayDelJugador = copiarArray(ARRAY_PALABRA_ALEATORIA);