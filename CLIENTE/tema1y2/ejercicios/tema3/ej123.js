//Mostrar por consola el valor del array que contenga un espacio.
//El resultado obtenido tiene que ser Real Madrid y Gran Canaria.
array0 = ["Real Madrid", "Unicaja", "Juventud", "Gran Canaria"];
array01 = [];
var k=0;
     for(let i=0;i<array0.length;i++){
          if(array0[i].search(" ") != -1){
               array01[k]=array0[i];
               console.log(array01[k]);
               k++;               
          }
     }
    
//Mostrar por consola la suma de todos aquellos que sean menores de 100
//El resultado esperado es 46
array2 = [34,12,122,123,231,121];
suma =0;

     for(let i=0;i<array2.length;i++){
          if(array2[i]<100)
               suma +=array2[i]
     }

     console.log(suma);

//Mostrar por consola todas las ocurrencias que contengan la letra A
//Resultado esperado ASUS, TOSHIBA, APPLE
array3= ["IBM","ASUS", "TOSHIBA","APPLE"];
array03=[];
var k=0;
     for(let i=0;i<array3.length;i++){
          if(array3[i].search("A") != -1){
               array03[k]=array3[i];
               k++;               
          }
     }

     console.log(array03.toString());

