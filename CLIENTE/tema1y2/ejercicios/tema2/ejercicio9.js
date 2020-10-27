var miArray = ["H", "o", "l", "a", " ", "m", "u", "n", "d", "o"];
var concat ="";
var concat2 ="";
//a. Mostrar por consola, el texto incluido en el array.
    for(let i = 0; i<miArray.length;i++){
        concat +=miArray[i];
    }
    console.log(concat);
//b. Mostrar por consola, el número de literales tipo texto, excluyendo portanto los espacios en blanco.
for(let i = 0; i<miArray.length;i++){
    if(miArray[i] != " ")
    concat2 +=miArray[i];
}
console.log(concat2);