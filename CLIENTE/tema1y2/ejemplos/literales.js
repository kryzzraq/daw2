var alumnos = ["alumno1",1, true, {1:1}];

for (var i=0; i<alumnos.length;i++){
    console.log(alumnos[i]);
}

//booleanos:
    var blnPasa = true;
    var intDato = 3;
    var floatDato= 3.3;

//objetos
    const obj ={
    strNombre: "Laura",
    strApellido: "Martin",
    intEdad: 26
    }

    console.log("Mi nombre es: ",obj.strNombre);
    console.log("Mi apellido es: ",obj.strApellido);
    console.log(`Mi edad es ${obj.intEdad}`);

//asignaciones:
    //Se asigna con el símbolo =
    //recorrer un array
    var misDatos = ["María","Arrabal", 46]

    for (let i=0; i<misDatos.length;i++){
        //instrucciones a realizar...
    }
    //desestructurar un array para guardarlo en variables:
    var [nombre, apellidos, edad] = misDatos;
    console.log(`Mi nombre es ${nombre}`);
    console.log(`Mi apellido es ${apellidos}`);
    console.log(`Mi edad es ${edad}`);

    var equipo = ["Ramos", "Marcelo", "Bencema"];
    var [jug1, jug2, jug3] = equipo;

    console.log(`El jugador 1 es: ${jug1}`);
    console.log(`El jugador 2 es: ${jug2}`);
    console.log(`El jugador 3 es: ${jug3}`);