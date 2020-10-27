var array = [1, 3, 5, 6, 7, 8, 10];
var impares=0;
var pares=0;
//a. Mostrar por consola, elresultado de sumarlos valores que ocupan posiciones impares
for(let i=1;i<array.length;i+=2){
    impares+=array[i];
}
console.log(`La suma de los números impares es: ${impares}`);
//b. Mostrar por consola, elresultado de sumarlos valores que ocupan posiciones pares
for(let i=0;i<array.length;i+=2){
    pares+=array[i];
}
console.log(`La suma de los números pares es: ${pares}`);
//c. Mostrar por consola, la suma del valor obtenido en el punto a y en el punto b
console.log(`La suma de los pares y los impares es: ${pares+impares}`);