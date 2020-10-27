var miArray = ["H", "o", "l", "a", " ", "m", "u", "n", "d", "o"];
var concat ="";
var concat2 ="";
//a. Mostrar por consola, el texto incluido en el array.
//recorremos el array
    for(let i = 0; i<miArray.length;i++){
        //concatenamos todas las posiciones
        concat +=miArray[i];
    }
    console.log(concat);
//b. Mostrar por consola, el número de literales tipo texto, excluyendo portanto los espacios en blanco.
//recorremos el array
for(let i = 0; i<miArray.length;i++){
    //si la posicion i es difetente de un espacio, concatenamos
    if(miArray[i] != " ")
    concat2 +=miArray[i];
}
console.log(concat2);