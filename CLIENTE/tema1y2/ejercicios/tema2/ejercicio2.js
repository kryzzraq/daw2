console.log(`Ejercicio 2:`);
var equipos =[ "Betis-78", "Real Madrid-89","Atletico de Madrid-79","Barcelona-4"];
var equipos2=[];
for(let cont =0; cont <equipos.length;cont++){
     equipos2[cont] = equipos[cont].split("-");
     //console.log(equipos2[cont]);
}


var maxPunt = 0;
var minPunt = 100;

for (let i = 0; i<equipos2.length; i++){
    for (let k =0; k<equipos2[i].length;k++){
        if(maxPunt < equipos2[i][1]){
            maxPunt = equipos2[i][1];
        }
        if(minPunt > equipos2[i][1]){
            minPunt = equipos2[i][1];
        }
    }
}

console.log(maxPunt);
console.log(minPunt);