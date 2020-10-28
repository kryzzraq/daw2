var array = ["Hala", "Morcilla", "Tablet", "Papelera"];
//creo un nuevo array
var newArray = [];
//recorro el array
for(let i = 0; i < array.length; i++){
    //guardo el largo de la palabra en la posicion i del nuevo array
    newArray[i] = array[i].length;
}
console.log(newArray);