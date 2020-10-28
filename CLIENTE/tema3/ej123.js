//Mostrar por consola el valor del array que contenga un espacio.
//El resultado obtenido tiene que ser Real Madrid y Gran Canaria.
array0 = ["Real Madrid", "Unicaja", "Juventud", "Gran Canaria"];
     //creo un bucle para recorrer el array
     for(let i=0;i<array0.length;i++){
          //si encuentro el elemento " " en la posicion i, lo muestro por consola
          if(array0[i].search(" ") != -1)
               console.log(array0[i]);
     }
    
//Mostrar por consola la suma de todos aquellos que sean menores de 100
//El resultado esperado es 46
array2 = [34,12,122,123,231,121];
//establezco la suma en 0
suma =0;
     //creo un bucle para recorrer el array
     for(let i=0;i<array2.length;i++){
          //si la posicion i del array es menor de 100, la sumo.
          //si no, no hago nada y hago una nueva iteración
          if(array2[i]<100)
               suma +=array2[i]
     }
     //muestro el resultado de suma.
     console.log(suma);

//Mostrar por consola todas las ocurrencias que contengan la letra A
//Resultado esperado ASUS, TOSHIBA, APPLE
array3= ["IBM","ASUS", "TOSHIBA","APPLE"];
     //creo un bucle para recorrer el array
     for(let i=0;i<array3.length;i++){
          //si encuentro el elemento "A" en la posicion i, lo muestro por consola
          if(array3[i].search("A") != -1)
               console.log(array3[i]);     
     }