const fRecorrer = () =>{
    array3.forEach(element =>{
        console.log(element);
    })
}

const array1 = ['1','2','3'];

const array2 = ['4','5','6'];

//primero pone los elementos del array1 y luego los del array2
const array3 = array1.concat(array2);

fRecorrer();