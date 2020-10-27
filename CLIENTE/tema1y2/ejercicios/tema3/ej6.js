var array = [ "B", "C","A", "A"];

// Contar el número de veces que aparece cada letra

for(let i = 0; i<array.length;i++){
    let cont = 0;
    for( let k=0; k<array.length;k++){
        if(array[i]===array[k]){
            cont++;
        }
    }
    console.log(`La letra ${array[i]} aparece ${cont} vez/veces.`);
}

//Quitarlos elementos repetidos de un array.
var copiaArray = Array.from(new Set(array))
console.log(copiaArray)