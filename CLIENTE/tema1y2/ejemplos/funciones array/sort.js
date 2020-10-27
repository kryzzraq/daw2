var miArray = ["b", "g", "a"];

function fRecorrer(array){
    array.forEach(element =>{
        console.log(`El elemento es: ${element}`);
    });
}

miArray.sort();

fRecorrer(miArray);