var alturas = [1.63, 1.50, 1.35,1.90, 1.75];
var maxima=0;
var minima=100;
var media = 0;

//recorro el array
for(let cont=0; cont<alturas.length;cont++){
    //si la altura máxima es menor que la altura de la posicion cont array
    if(maxima<alturas[cont]){
        //sobreescribimos maxima
        maxima = alturas[cont];
    }
    //si la altura mínima es mayor que la altura de la posicion cont del array
    if(minima>alturas[cont]){
        //sobreescribimos la altura minima
        minima = alturas[cont];
    }
    //media es igual a media mas alturas[cont]
    media = media+alturas[cont];
}
console.log(`Altura mínima:`,minima);
console.log(`Altura máxima:`,maxima);
console.log(`Altura media:`, media/alturas.length);
console.log(`Contador de alturas: ${alturas.length}`);