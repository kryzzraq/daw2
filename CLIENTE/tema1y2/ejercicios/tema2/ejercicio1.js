var alturas = [1.63, 1.50, 1.35,1.90, 1.75];
var maxima=0;
var minima=100;
var media = 0;

for(let cont=0; cont<alturas.length;cont++){
    if(maxima<alturas[cont]){
        maxima = alturas[cont];
    }
    if(minima>alturas[cont]){
        minima = alturas[cont];
    }
    media = media+alturas[cont];
}


console.log(`altura mínima:`,minima);
console.log(`altura máxima:`,maxima);
console.log(`altura media:`, media/alturas.length);
console.log(`Contador de alturas:${alturas.length}`);