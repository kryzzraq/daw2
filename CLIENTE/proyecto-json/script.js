 async function getJSON(){
     
    try {
        //Carga
        let response = await fetch('cv.json')
        let DatosJSON = await response.json();
        
        //Parte izquierda
            document.getElementById('textPerfil').innerHTML = DatosJSON.datos_basicos.descripcion
                
            //idiomas                
                fraseIdiomas = ""
                for(let i=0;i<DatosJSON.datos_basicos.idiomas.length;i++){
                    fraseIdiomas += `<p class="info"><span class="infoIdioma">${DatosJSON.datos_basicos.idiomas[i].idioma}:</span> ${DatosJSON.datos_basicos.idiomas[i].nivel}</p>`
                }
                document.getElementById("textIdiomas").innerHTML = fraseIdiomas
                
            //lenguajes
            fraseLenguajes = ""
            for(let i = 0; i<DatosJSON.datos_basicos.lenguajes.length;i++){
                fraseLenguajes += `<p class="info"><span class="leng">${DatosJSON.datos_basicos.lenguajes[i].lenguaje}:</span>`
                for(let k = 0; k<5; k++){
                    if(k < DatosJSON.datos_basicos.lenguajes[i].nivel){
                    fraseLenguajes += `<i class="fas fa-star"></i>&nbsp;`
                    } else{
                    fraseLenguajes += `<i class="far fa-star"></i>&nbsp;` 
                    }
                }
                fraseLenguajes += "</p>"
            }
            document.getElementById("textLenguajes").innerHTML = fraseLenguajes

            //carnets
            fraseCarnets = ""
                for(let i=0;i<DatosJSON.datos_basicos.carnets.length;i++){
                    fraseCarnets += `<p class="info"><span class="leng">Tipo: </span>${DatosJSON.datos_basicos.carnets[i].tipo}</p>`
                }
                document.getElementById("textCarnets").innerHTML = fraseCarnets

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
            fraseEstudios = ""
            for(let i = 0; i < DatosJSON.datos_basicos.estudios.length; i++){
                fraseEstudios += `
                <div class="estudios">
                    <div class="tituloEstudios">${DatosJSON.datos_basicos.estudios[i].instituto}</div>
                    <div class="fechas">${DatosJSON.datos_basicos.estudios[i].fechaInicio} - ${DatosJSON.datos_basicos.estudios[i].fechaFin}</div>
                    <div class="datos">
                        <div class="area">${DatosJSON.datos_basicos.estudios[i].area}</div>
                        <div class="nivel">${DatosJSON.datos_basicos.estudios[i].nivelEstudios}</div>
                    </div>                
                </div>`
            }
            document.getElementById('infoEstudios').innerHTML = fraseEstudios
            //experiencia laboral
            
            fraseLaboral = ""
            for(let i = 0; i < DatosJSON.datos_basicos.trabajos.length; i++){
                fraseLaboral += `
                <div class="trabajos">
                    <div class="tituloTrabajos">${DatosJSON.datos_basicos.trabajos[i].empresa}</div>
                    <div class="fechas">${DatosJSON.datos_basicos.trabajos[i].fechaInicio} - ${DatosJSON.datos_basicos.trabajos[i].fechaFin}</div>
                    <div class="datos">
                        <div class="area">${DatosJSON.datos_basicos.trabajos[i].area}</div>
                        <div class="ocupacion">${DatosJSON.datos_basicos.trabajos[i].ocupacion}</div>
                    </div>                
                </div>`
            }
            document.getElementById('infoLaboral').innerHTML = fraseLaboral
           
    }
    catch(err) {
        console.log ("Error al cargar datos")
    }    
 }
 
 getJSON();

 