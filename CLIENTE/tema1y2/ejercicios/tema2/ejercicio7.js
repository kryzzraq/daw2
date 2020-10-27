var array = [1, 3, 5, 6, 7, 8, 10];
var impares=0;
var pares=0;
//a. Mostrar por consola, elresultado de sumarlos valores que ocupan posiciones impares
//recorremos el array comenzando en la posicion 1 -- incrementamos en dos
for(let i=1;i<array.length;i+=2){
    //sumamos a impares la posicion i mientras que i sea menor que la dimension del array
    impares+=array[i];
}
console.log(`La suma de los números impares es: ${impares}`);
//b. Mostrar por consola, elresultado de sumarlos valores que ocupan posiciones pares
//recorremos el array comenzando en la posicion 0 -- incrementamos en dos
for(let i=0;i<array.length;i+=2){
    //sumamos a pares la posicion i mientras que i sea menor que la dimension del array
    pares+=array[i];
}
console.log(`La suma de los números pares es: ${pares}`);
//c. Mostrar por consola, la suma del valor obtenido en el punto a y en el punto b
//sumamos todo
console.log(`La suma de los pares y los impares es: ${pares+impares}`);