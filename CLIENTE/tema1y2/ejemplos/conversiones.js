var intEdad=18;
var strEdad = "";

//conversion explicita
strEdad = String(intEdad);
console.log(intEdad,strEdad);

//conversion con toString
strEdad = intEdad.toString();
console.log(intEdad,strEdad);

//conversion de un String a un número:
var strPi = "3.14";
console.log("conversion de un String a un float", parseFloat(strPi));
console.log("conversion de un String a un int", parseInt(strPi));

