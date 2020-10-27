var miArray = [1,2,3,4,5,6,7];

//array.foreach:
//1ª forma de declarar funciones:
function fRecorrer(array){
    array.forEach(element =>{
        console.log(`El elemento es: ${element}`);
    });
}

//2ª forma de declarar funciones:
//funciones anónimas.
const fRecorrer2 = function (/*parametros*/){

}


//3ª forma de declarar funciones:
const fRecorrer3 = (/*parametros*/) => {

}

//POP-PUSH
array1 = ["1", "2", "3"];
var A = array1.pop();
console.log(`El valor de A es: ${A}`);

fRecorrer(array1);

array1.push("L");

fRecorrer(array1);