 async function getJSON(){
    try {
        //Carga
        let response = await fetch('cv.json')
        let DatosJSON = await response.json();
        //Parte izquierda
        document.getElementById('textPerfil').innerHTML = DatosJSON.datos_basicos.descripcion
            //idiomas
            for(let i=0;i<DatosJSON.datos_basicos.idiomas.lenght;i++){
                
            }
        //parte derecha
        document.getElementById('titNombre').innerHTML = DatosJSON.datos_basicos.nombre + " " + DatosJSON.datos_basicos.apellidos
        document.getElementById('titConcepto').innerHTML = DatosJSON.datos_basicos.concepto
        document.getElementById('descripcion').innerHTML = DatosJSON.datos_basicos.trabajo
        document.getElementById('emailText').innerHTML = DatosJSON.datos_basicos.email
        document.getElementById('telText').innerHTML = DatosJSON.datos_basicos.telefono
        document.getElementById('infoEstudios').innerHTML = mostrar()
    }
    catch(err) {
        console.log ("Error al cargar datos")
    }
    
 }
 
 getJSON();

 const mostrar = () =>{
    let 
 }