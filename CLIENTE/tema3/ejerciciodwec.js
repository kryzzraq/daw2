var cadena = "Clase DWEC";
var array = [];
posicion = -1;

/*for (let i =0; i<cadena.length; i++){
    if (cadena.charAt(i) === "C"){
        array[i] = cadena.indexOf("C",i);
        console.log(`La C se encuentra en posición: ${array[i]}`);
    }
}*/
for (let i = 0; i<cadena.length; i++){
    posicion = cadena.indexOf("C",i);

    if (posicion != -1){
        console.log(`La C se encuentra en posición `, posicion);
    }
    
}