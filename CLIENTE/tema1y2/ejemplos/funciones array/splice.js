const fRecorrer = () =>{
    miArray.forEach(element =>{
        console.log(element);
    })
}

var miArray = [1,2,3,4,5,6,7];

var miElemento = miArray.splice(1,3);

console.log(`El tipo de mi Elemento es ${typeof(miElemento)}`);
console.log(`Mi primer elemento es ${miElemento}`);