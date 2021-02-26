 async function getJSON(){     
    try {
        //Carga
        let response = await fetch('cv.json')
        let DatosJSON = await response.json();
        
        //Parte izquierda
        //descripción
            document.getElementById('textPerfil').innerHTML = DatosJSON.datos_basicos.descripcion
            //idiomas 
                document.getElementById("textIdiomas").innerHTML = cargarIdiomas(DatosJSON)
            //lenguajes
            document.getElementById("textLenguajes").innerHTML = cargarLenguajes(DatosJSON)
            //carnets
            document.getElementById("textCarnets").innerHTML = cargarCarnets(DatosJSON)

        //parte derecha
            //nombre y apellidos
            document.getElementById('titNombre').innerHTML = DatosJSON.datos_basicos.nombre + " " + DatosJSON.datos_basicos.apellidos
            //concepto
            document.getElementById('titConcepto').innerHTML = DatosJSON.datos_basicos.concepto
            //buscar trabajo
            document.getElementById('descripcion').innerHTML = DatosJSON.datos_basicos.trabajo
            //correo electronico
            document.getElementById('emailText').innerHTML = DatosJSON.datos_basicos.email
            //telefono
            document.getElementById('telText').innerHTML = DatosJSON.datos_basicos.telefono            
            //educación:
            document.getElementById('infoEstudios').innerHTML = cargarEstudios(DatosJSON)
            //experiencia laboral         
            document.getElementById('infoLaboral').innerHTML = cargarTrabajos(DatosJSON)           
    }
    catch(err) {
        console.log ("Error al cargar datos")
    }    
 }


 const cargarIdiomas = (json) => {
     debugger
    fraseIdiomas = ""
    for(let i = 0; i<json.datos_basicos.idiomas.length;i++){
        fraseIdiomas += `<div class="leng">${json.datos_basicos.idiomas[i].idioma}:</div>`
        fraseIdiomas += `<div class="infoIdiomas"><div class="infoIdi"><div class="idiom">Escrito:</div><div class="circulitos">`
        for(let k = 0; k<5; k++){
            if(k < json.datos_basicos.idiomas[i].escrito){
                fraseIdiomas += `<i class="fas fa-circle"></i>&nbsp;`
            } else{
                fraseIdiomas += `<i class="far fa-circle"></i>&nbsp;` 
            }
        }
        fraseIdiomas += `</div></div><div class="infoIdi"><div class="idiom">Oral:</div><div class="circulitos">`
        for(let k = 0; k<5; k++){
            if(k < json.datos_basicos.idiomas[i].hablado){
                fraseIdiomas += `<i class="fas fa-circle"></i>&nbsp;`
            } else{
                fraseIdiomas += `<i class="far fa-circle"></i>&nbsp;` 
            }
        }
        fraseIdiomas += `</div></div><div class="infoIdi"><div class="idiom">Leído:</div><div class="circulitos">`
        for(let k = 0; k<5; k++){
            if(k < json.datos_basicos.idiomas[i].leido){
                fraseIdiomas += `<i class="fas fa-circle"></i>&nbsp;`
            } else{
                fraseIdiomas += `<i class="far fa-circle"></i>&nbsp;` 
            }
        }
        fraseIdiomas += `</div></div></div>`
    }
    return fraseIdiomas
 }

 const cargarLenguajes = (json) => {     
    fraseLenguajes = ""
    for(let i = 0; i<json.datos_basicos.lenguajes.length;i++){
        fraseLenguajes += `<p class="info"><span class="leng">${json.datos_basicos.lenguajes[i].lenguaje}:</span>`
        for(let k = 0; k<5; k++){
            if(k < json.datos_basicos.lenguajes[i].nivel){
            fraseLenguajes += `<i class="fas fa-star"></i>&nbsp;`
            } else{
            fraseLenguajes += `<i class="far fa-star"></i>&nbsp;` 
            }
        }
        fraseLenguajes += "</p>"
    }
    return fraseLenguajes;
 }

 const cargarCarnets = (json) => {
    fraseCarnets = ""
    for(let i=0;i<json.datos_basicos.carnets.length;i++){
        fraseCarnets += `<p class="info"><span class="leng">Tipo: </span>${json.datos_basicos.carnets[i].tipo}</p>`
    }
    return fraseCarnets
 }
 
 const cargarEstudios = (json) => {
    fraseLaboral = ""
            for(let i = 0; i < json.datos_basicos.trabajos.length; i++){
                fraseLaboral += `
                <div class="trabajos">
                    <div class="tituloTrabajos">${json.datos_basicos.trabajos[i].empresa}</div>
                    <div class="fechas">${json.datos_basicos.trabajos[i].fechaInicio} - ${json.datos_basicos.trabajos[i].fechaFin}</div>
                    <div class="datos">
                        <div class="area">${json.datos_basicos.trabajos[i].area}</div>
                        <div class="ocupacion">${json.datos_basicos.trabajos[i].ocupacion}</div>
                    </div>                
                </div>`
            }
            return fraseLaboral;
 }

 const cargarTrabajos = (json) => {
    fraseLaboral = ""
    for(let i = 0; i < json.datos_basicos.trabajos.length; i++){
        fraseLaboral += `
        <div class="trabajos">
            <div class="tituloTrabajos">${json.datos_basicos.trabajos[i].empresa}</div>
            <div class="fechas">${json.datos_basicos.trabajos[i].fechaInicio} - ${json.datos_basicos.trabajos[i].fechaFin}</div>
            <div class="datos">
                <div class="area">${json.datos_basicos.trabajos[i].area}</div>
                <div class="ocupacion">${json.datos_basicos.trabajos[i].ocupacion}</div>
            </div>                
        </div>`
    }
    return fraseLaboral
}

 getJSON();