var array = [ "B", "C","A", "A"];
//recorro el array
for(let i = 0; i<array.length;i++){
    for( let k=0; k<array.length;k++){
        //si la posicion i es diferente de la k, lo borro
        if(array[i]!=array[k]){
            //desde la posicion i, borro 1. Es decir, borro i.
            array.splice(i,1);
        }
    }
}
console.log(array);