var miArray = [1,2,3,4,5,6,7];

function fRecorrer(array){
    array.forEach(element =>{
        console.log(`El elemento es: ${element}`);
    });
}

miArray.reverse();

fRecorrer(miArray);