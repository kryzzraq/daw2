var array = [ "B", "C","A", "A"];

for(let i = 0; i<array.length;i++){
    for( let k=0; k<array.length;k++){
        if(array[i]!=array[k]){
            array.splice(array[i],1);
        }
    }
}
console.log(array);