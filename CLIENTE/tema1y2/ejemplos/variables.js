var nombre = "Laura";
edad = 3;

console.log(nombre);
console.log(`contenido variable nombre ${nombre}`);

console.log("tipo de nombre",typeof(nombre));
console.log("tipo de edad:", typeof(edad));

function fNombre (){
    let nombre = "Zidane";
    console.log(`El nombre es ${nombre}`);
}

console.log(`El nombre es ${nombre}`);
//el nombre solo cambia dentro de la funcion, fuera de la funcion no lo guarda 
fNombre();
console.log(`El nombre es ${nombre}`);

//tipos de variable
var dato1 = "fedf";
var dato2 = 343;
var dato3 = true;
var dato4 = null;
var dato5 = undefined;
var dato6 = [1,2];

console.log("tipo de dato1:", typeof(dato1));
console.log("tipo de dato2:", typeof(dato2));
console.log("tipo de dato3:", typeof(dato3));
console.log("tipo de dato4:", typeof(dato4));
console.log("tipo de dato5:", typeof(dato5));
console.log("tipo de dato6:", typeof(dato6));