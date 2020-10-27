//Días transcurridos desde el 01/01/2020 hasta hoy:

fecha1 = new Date("2020-01-01");
fecha2 =new Date();
fecha3 = new Date(fecha2.getFullYear(), fecha2.getMonth(), (fecha2.getDate()+1));
f4 = new Date(2020,0,1);

miliTranscurridos = fecha3 - fecha1;
diasTrans = miliTranscurridos / 24 / 60 / 60 / 1000;
console.log(Math.round(diasTrans));



