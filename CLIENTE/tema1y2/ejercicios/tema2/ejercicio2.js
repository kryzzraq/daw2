var equipos =[ "Betis-78", "Real Madrid-89","Atletico de Madrid-79","Barcelona-4"];
//cre un nuevo array donde ir guardando los datos
var equipos2=[];
for(let cont =0; cont <equipos.length;cont++){
    //con la funcion split lo convierto en un array
     equipos2[cont] = equipos[cont].split("-");
}
var maxPunt = 0;
var minPunt = 100;

//recorro el array
for (let i = 0; i<equipos2.length; i++){
    for (let k =0; k<equipos2[i].length;k++){
        //si la puntuacion maxima es menor que la del array equipos2, la sobreescribo
        if(maxPunt < equipos2[i][1])
            maxPunt = equipos2[i][1];
        
        //si la puntuacion minima es mayor que la del array equipos2, la sobreescribo
        if(minPunt > equipos2[i][1])
            minPunt = equipos2[i][1];
    }
}

console.log(maxPunt);
console.log(minPunt);