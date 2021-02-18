 async function getJSON(){
    try {
        //Carga
        let response = await fetch('cv.json')
        let DatosJSON = await response.json();
        document.getElementById('titNombre').innerHTML = DatosJSON.datos_basicos.nombre + " " + DatosJSON.datos_basicos.apellidos
        document.getElementById('titConcepto').innerHTML = DatosJSON.datos_basicos.concepto
        document.getElementById('descripcion').innerHTML = DatosJSON.datos_basicos.descripcion
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