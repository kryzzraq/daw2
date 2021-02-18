const tratarDatos = (misDatos) => {
    return new Promise ((resolve, reject) => {
        debugger
        if (misDatos.nombre != "Carlos")
            resolve (misDatos)
        else    
            reject ("No es Carlos y por tanto devuelve error")
    });
 }

 async function getJSON(){
    try {
        //Carga
        let response = await fetch('cv.json')
        debugger
        //let response = await fetch('carlos.php?')
        //Tratamiento
        let DatosJSON = await response.json();
        let datos = await tratarDatos (DatosJSON);
        
        console.log (`Mis datos devueltos ${datos.nombre}`);
    }
    catch(err) {
        console.log ("Error al cargar datos")
    }
    
 }
 
 getJSON();