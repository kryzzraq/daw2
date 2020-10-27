function fRecorrer(array){
    madrid.forEach(element =>{
        console.log(`${element}`);
    });
}

var nombres = ['Pique', 'Ramos', 'Modric', 'Benzema', 'Kross'];
//indica el numero de elementos a decolver
//si fueses -1 coeria el ultimo elemento solo
var madrid = nombres.slice(1,5);

fRecorrer();