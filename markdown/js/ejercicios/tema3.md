---
Ejercicios del primer trimestre: Tema 3.
Autor: Laura Martín Vicente
---
# Ejercicios del tema 3

## Ejercicio 1

Array = ["Real Madrid", "Unicaja", "Juventud", "Gran Canaria"];
Mostrar por consola aquel valor del array que contenga un espacio Resultado: "Real Madrid, Gran Canaria"


```js
array0 = ["Real Madrid", "Unicaja", "Juventud", "Gran Canaria"];
     //creo un bucle para recorrer el array
     for(let i=0;i<array0.length;i++){
          //si encuentro el elemento " " en la posicion i, lo muestro por consola
          if(array0[i].search(" ") != -1)
               console.log(array0[i]);
     }
```

## Ejercicio 2

Array = [34,12,122,123,231,121]
Mostrar por consola la suma de todos aquellos que sean menores de 100 Resultado= 46

```js
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
```

## Ejercicio 3

Array = ["IBM", "ASUS", "TOSHIBA", "APPLE"]
Mostrar por consola aquellas marcas que contengan la letra A
Resultado = "ASUS, TOSHIBA, APPLE";

```js
array3= ["IBM","ASUS", "TOSHIBA","APPLE"];
     //creo un bucle para recorrer el array
     for(let i=0;i<array3.length;i++){
          //si encuentro el elemento "A" en la posicion i, lo muestro por consola
          if(array3[i].search("A") != -1)
               console.log(array3[i]);
     }
```

## Ejercicio 4

Leer una cadena de texto en un formulario y generar un array con la función split(). Posteriormente, mostrarla siguiente información: Número de palabras, primera palabra, última palabra, las palabras colocadas en orden inverso, las palabras ordenadas de la a la z y las palabras ordenadas de la z a la a.
Sacartoda esta información por consola.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        //pido la cadena de texto
        var cadena = prompt("Escribe una cadena de texto");
        //con el método split() lo que consigo es guardar en un array todos los elementos que estén separados por un espacio (" ").
        var array = cadena.split(" ");
        //primera palabra (posicion 0)
        console.log(`La primera palabra es: ${array[0]}`);
        //última posicion, la longitud del array menos 1
        console.log(`La última palabra es: ${array[array.length-1]}`);
        //palabras en orden inverso:
        //bucle para recorrer el array al revés
        console.log(`Orden inverso del array:`)
        for(let i = array.length-1; i>=0; i--){
            console.log(`${array[i]} `);
        }
        console.log(`Palabras ordenadas de la A a la Z: ${array.sort()}`);
        console.log(`Palabras ordenadas de la Z a la A ${array.reverse()}`);
    </script>
</body>
</html>
```

## Ejercicio 5

Escribe una función iterativa que dado un número entero n,retorne un array con todos los números enteros en orden decreciente desde n a 1.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        //preguntamos pro el numero para comenzar a hacer la funcion iterativa decreciente
        var num = parseInt(prompt("Escribe un número:"));
        //creo array vacio
        var array = [];
        //copio el numero a un indice para q no me lo modifique
        var indiceNum = num;

        //creo un bucle para rellarlo
        for(let i =0;i<num;i++){
            array[i]=indiceNum;
            //y decremento el indice para que me lo guarde en el proximo hueco del array
            indiceNum--;
        }
        console.log(array);
    </script>
</body>
</html>
```

## Ejercicio 6

Teniendo en cuenta el siguiente array, array = ["A", "B", "C", "A"]
. Contar el número de veces que aparece cada letra.
. Quitarlos elementos repetidos de un array

```js
var array = [ "B", "C","A", "A"];

// Contar el número de veces que aparece cada letra

for(let i = 0; i<array.length;i++){
    let cont = 0;
    for( let k=0; k<array.length;k++){
        if(array[i]===array[k]){
            cont++;
        }
    }
    console.log(`La letra ${array[i]} aparece ${cont} vez/veces.`);
}

//Quitarlos elementos repetidos de un array.
var copiaArray = Array.from(new Set(array))
console.log(copiaArray)
```

## Ejercicio 7

Teniendo en cuenta el siguiente array, array = ["A", "B", "C", "A"].
Quitarlos elementos "No" repetidos del array.

```js
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
```

## Ejercicio 8

Teniendo en cuenta el siguiente array, array = ["Hala", "Morcilla", "Tablet", "Papelera"]
Crear un array nuevo con el número de caracteres que tiene cada índice del array anteriormente indicado.

```js
var array = ["Hala", "Morcilla", "Tablet", "Papelera"];
//creo un nuevo array
var newArray = [];
//recorro el array
for(let i = 0; i < array.length; i++){
    //guardo el largo de la palabra en la posicion i del nuevo array
    newArray[i] = array[i].length;
}
console.log(newArray);
```

## Ejercicio 9

Desarrollar un programa en el que se pida al usuario un array de números enteros e indicar por consola si los elementos de dicho array están ordenados de menor a mayor o no.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        //pedimos el número de indices:
        var num = parseInt(prompt("¿De cuántos elementos va a ser el array?"));
        //creamos el array
        var array = [];
        //rellenamos el array
        for (let i = 0; i < num; i++){
            let numtemp = prompt(`Inserta el elemento ${i+1} del array:`);
            array[i] = numtemp;
        }

        //creamos un booleano y lo inicializamos a verdadero
        var bool = true;
        //recorremos el array y si salimos del bucle si bool es falso
        for(let i = 0; i<array.length && bool; i++){
            //si array i es mayor que array i+ ponemos el bool a false,
            //por lo que ya no vuelve a iterar
            if(array[i] > array[i+1])
                bool = false;
        }

        //por último, si el bool es true, significa que el array está ordenado de menor a mayor
        if(bool)
            document.write("El array está ordenado de menor a mayor");
            //si el bool es false, significa que el array está ordenado de mayor a menor
        else
        document.write("El array no está ordenado de menor a mayor");
    </script>
</body>
</html>
```

## Ejercicio 10

Desarrollar un programa en el que se pide un array de 10 números enteros. A continuación, se indicará por consola si dicho array es capicúa, es decir, la secuencia de sus elementos es igual vista de delante hacia atrás y de detrás hacia delante.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        var array = [];
        var bool = true;

        //rellenar el array con 10 posiciones
        for(let i = 0; i<10; i++){
            array[i] = parseInt(prompt(`Rellena la posicion ${i+1} del array:`));
        }
        //guardo la longitud del array-1 (total de elementos) en una variable
        var k = array.length-1;
        //itero el array siempre y cuando bool sea true
        for(let j = 0; j<array.length && bool; j++){
            //si la posicion i es diferente a la k cambio a false, por lo que ya no vuelve a iterar
            if(array[j] !== array[k])
                bool = false;
            k--;
        }

        //por último, si el bool es true, significa que el array es capicúa
        if(bool)
            document.write(`El array es capicúa`);
        ////si el bool es false, significa que el array NO es capicúa
        else
            document.write(`El array no es capicúa`);
    </script>
</body>
</html>
```

## Ejercicio 11

Desarrollar un programa en el que se pida al usuario un array de números enteros. A continuación, indicar por consola, cuantos de dichos elementos son números impares y cuántos son números pares.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        //incializo las variables que voy a usar
        var pares = 0;
        var impares = 0;
        var array = [];
        var longArray = parseInt(prompt(`¿De cuántos números va a constar el array?`));

        //rellenamos el array
        for(let i = 0 ; i<longArray; i++){
            array[i] = parseInt(prompt(`Introduzca el elemento: ${i+1}`));
        }

        //recorremos el array
        for(let i = 0; i<array.length;i++){
            //si el resto de dividir entre 2 es 0, significa que es par, por lo que
            //sumamos 1 a los pares.
            if(array[i]%2===0)
                pares++;
            //si no es 0, significa que es impar, por lo que sumamos 1 a los impares
            else
                impares ++;
        }

        document.write(`Has introducido ${pares} números pares.`);
        document.write(`Has introducido ${impares} números impares.`);
    </script>
</body>
</html>
```

## Ejercicio 12

Desarrollar un programa en el que se pida al usuario un array de números enteros. A continuación, indicar por consola, el número de ocurrencias de elementos repetidos. Por ejemplo el vector [1, 2, 3, 1, 2, 1] tiene tres ocurrencias de elementos repetidos (dos 1 y un 2).

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        var longArray = parseInt(prompt(`Introduce el número de elementos a guardar en el array:`));
        var array = [];

        //se rellena el array
        for(let i = 0; i<longArray;i++){
            array[i]=parseInt(prompt(`Introduce el elemento ${i+1}`));
        }
        //se hace una copia idéntica del array pero que no apunte al array primario
        var copiaArray = array.slice();

        //recorro el array principal
        for(let i = 0; i<array.length;i++){
            //creo una variable para contar el número de repeticiones
            let cont = 0;
            //recorro la copia
            for(let k = 0; k<copiaArray.length;k++){
                //si el elemento del array i coincide con el elemento k de la copia
                if(array[i] === copiaArray[k]){
                    //sumo uno al contador
                    cont++;
                    //y elimino el elemento que ya he contado de la copia del array
                    copiaArray.splice(k,1);
                }
                //si se repite más de una vez, saco la información de cuánas veces se ha repetido el elemento.
                if(cont>1)
                    console.log(`El elemento ${array[i]} se repite ${cont} veces`);
            }
        }
    </script>
</body>
</html>
```

## Ejercicio 13

Desarrollar un programa en el que se pidan al usuario dos arrays de números enteros. A continuación, indicar por consola, el producto escalar de los mismos. Si los arrays indicados no tienen la misma longitud se indicará por consola.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        //creamos los dos arrays, aunque de momento están vacíos.
        array1=[];
        array2=[];
        var posiciones1 = parseInt(prompt(`¿Cuántas posiciones tendrá el primer array?`));
        //se rellena el primer array
        for(let i = 0;i<posiciones1;i++){
            array1[i] = parseInt(prompt(`Estamos rellenando el primer array. Indique el contenido de la posicion ${i+1}`));
        }
        var posiciones2 = parseInt(prompt(`¿Cuántas posiciones tendrá el segundo array?`));
        //se rellena el segundo array
        for(let i = 0;i<posiciones2;i++){
            array2[i] = parseInt(prompt(`Estamos rellenando el segundo array. Indique el contenido de la posicion ${i+1}`));
        }

        //si el array1 tiene la misma longitud que el array2 entonces ejecutamos el producto escalar
        if(array1.length === array2.length){
            //inicializamos la variable a 0
            var productoEscalar = 0;
            //hacemos un for para realizar el producto escalar.
            for(let i = 0; i<array1.length && i<array2.length;i++){
                productoEscalar += array1[i]*array2[i];
            }
            console.log(`El producto escalar de los dos arrays es: ${productoEscalar}`);
        //si no tienen la misma longitud no podemos realizar el producto escalar y lo indicamos.
        }else{
            document.write(`Le recordamos que los arrays tienen que tener la misma longitud, por favor refresque la página.`)
        }
    </script>
</body>
</html>
```

## Ejercicio 14

Desarrollar un programa en el que se pida al usuario dos arrays de números enteros. A continuación se deberá crear un nuevo array almacene la suma de ambos vectores y, finalmente, se escriban por consola los valores del numero array. En el nuevo arrat se ha de ajustar al array más largo proporcionado por el usuario, completando el más corto con ceros

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        //creamos los dos arrays, aunque de momento están vacíos.
        array1=[];
        array2=[];
        array3=[];
        var posiciones1 = parseInt(prompt(`¿Cuántas posiciones tendrá el primer array?`));
        //se rellena el primer array
        for(let i = 0;i<posiciones1;i++){
            array1[i] = parseInt(prompt(`Estamos rellenando el primer array. Indique el contenido de la posicion ${i+1}`));
        }
        var posiciones2 = parseInt(prompt(`¿Cuántas posiciones tendrá el segundo array?`));
        //se rellena el segundo array
        for(let i = 0;i<posiciones2;i++){
            array2[i] = parseInt(prompt(`Estamos rellenando el segundo array. Indique el contenido de la posicion ${i+1}`));
        }

        //si la dimension del array1 es mayor que la del array2 se establece como dimension del array3
        //la dimension del array1; si no la del array2
        if(array1.length > array2.length){
            //miramos cual es la diferencia entre los dos arrays
            let difetencia = array1.length-array2.length;
            //rellenamos con 0s todos los elementos "vacíos" del array más pequeño
            for(let i = 0; i < difetencia; i++){
                array2.push(0);
            }
            //sumamos los valores y lo guardamos en un tercer array
            for(let i=0; i<array1.length;i++){
                array3[i] = array1[i]+array2[i]
            }
        }else{
            //miramos cual es la diferencia entre los dos arrays
            let difetencia = array2.length-array1.length;
            //rellenamos con 0s todos los elementos "vacíos" del array más pequeño
            for(let i = 0; i < difetencia; i++){
                array1.push(0);
            }
            //sumamos los valores y lo guardamos en un tercer array
            for(let i=0; i<array2.length;i++){
                array3[i]=array1[i]+array2[i]
            }
        }

        //mostramos el resultado de la suma de los arrays
        console.log(`La suma de los dos arrays es: ${array3}`);
    </script>
</body>
</html>
```
