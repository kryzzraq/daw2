---
Ejercicios del primer trimestre: Tema 2.
Autor: Laura Martín Vicente
---
# Ejercicios del tema 2

## Ejercicio 1

Teniendo el array de alturas [1.63, 1.50, 1.35, 1.90, 1.75], sacar por consola la altura mínima, la alturamáxima, la altura media, asi como el número de alturas existentes en el array

```js
var alturas = [1.63, 1.50, 1.35,1.90, 1.75];
var maxima=0;
var minima=100;
var media = 0;

//recorro el array
for(let cont=0; cont<alturas.length;cont++){
    //si la altura máxima es menor que la altura de la posicion cont array
    if(maxima<alturas[cont]){
        //sobreescribimos maxima
        maxima = alturas[cont];
    }
    //si la altura mínima es mayor que la altura de la posicion cont del array
    if(minima>alturas[cont]){
        //sobreescribimos la altura minima
        minima = alturas[cont];
    }
    //media es igual a media mas alturas[cont]
    media = media+alturas[cont];
}
console.log(`Altura mínima:`,minima);
console.log(`Altura máxima:`,maxima);
console.log(`Altura media:`, media/alturas.length);
console.log(`Contador de alturas: ${alturas.length}`);
```

## Ejercicio 2

Teniendo el siguiente array de equipos de futbol ["Real Madrid"-89,"Betis-78","Atlético de Madrid"-79,"Barcelona"-4], ordenarlos según los puntos obtenidos y mostrar por consola elresultado, de la siguiente forma:

```js
var equipos =[ "Betis-78", "Real Madrid-89","Atletico de Madrid-79","Barcelona-4"];
//cre un nuevo array donde ir guardando los datos
var equipos2=[];
for(let cont =0; cont <equipos.length;cont++){
    //con la funcion split lo convierto en un array
     equipos2[cont] = equipos[cont].split("-");
}
var maxPunt = 0;
var minPunt = 100;

//recorro el array
for (let i = 0; i<equipos2.length; i++){
    for (let k =0; k<equipos2[i].length;k++){
        //si la puntuacion maxima es menor que la del array equipos2, la sobreescribo
        if(maxPunt < equipos2[i][1])
            maxPunt = equipos2[i][1];

        //si la puntuacion minima es mayor que la del array equipos2, la sobreescribo
        if(minPunt > equipos2[i][1])
            minPunt = equipos2[i][1];
    }
}

console.log(maxPunt);
console.log(minPunt);
```

## Ejercicio 3

Teniendo el siguiente objeto {nombre:"Juan", edad:84, profesion:"Ministro"},recorrerlos distintos elementos utilizando los distintos bucles vistos en clase

```js
var objeto =  {nombre:"Juan", edad:84, profesion:"Ministro"};

for( const prop in objeto){
    console.log(`${prop} = ${objeto[prop]}`)
}
```

### Ejercicio4

Mostrar por consola los numeros pares e impares desde el número 1 hasta el número introducido por el usuario. Tener en cuenta que si el valorintroducido no es un número, se indicará por consola que no es correcto

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
        var n1 = parseInt(prompt("Ingrese un número:"));
        if(!Number.isInteger(n1)){
            console.log("Por favor, ingrese un número");
        }else{
            var suma = 2;
            //mientras que la variable suma sea menor que el numero introducido, se muestran los pares.
            while(suma < n1){
               console.log(suma)
               //se incrementa en 2
               suma +=2;
           }
        }
    </script>
</body>
</html>
```

### Ejercicio 5

Realizar el cálculo de la letra del DNI. Este cálculo consiste en obtener elresto de la división entera del número del DNI y el número 23. Según elresto de la división obtenido, se obtiene la letra dentro de un array de letras

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
        //array:
        var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X',
            'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

        //pedimos el dni
        var dni = parseInt(prompt("Intruduce el DNI del que quieres saber la letra:"));
        //calculamos el resto de dividir el DNI entre 23
        var resto = dni%23;

        //mostramos el indice 'resto' del array letras
        document.write(`La letra de el dni introducido es: `,letras[resto],);
    </script>
</body>
</html>
```

## Ejercicio 6

Obtener el factorial de un número entero solicitado por pantalla. Importante tenéis que comprobar que el número introducido sea realmente un número y no una letra o un símbolo. En el caso de que el valor introducido no sea un número mostrar en pantalla un mensaje que indique que debe introducir obligatoriamente un número.

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
        //pedimos el numero del que queremos saber el factorial
        n1=parseInt(prompt(`Elige el número del que quieres saber el factorial:`));
        //establecemos en 1 la variable, porque si la establecemos en 0 siempre dará 0
        var factorial =1;

        if (!Number.isInteger(n1)){
            document.write(`Por favor, introduzca un número.`);
        } else {
            //mientras que n1 sea diferente de 0
            while(n1!=0){
                //factorial = factorial*n1
                factorial*=n1;
                //decrementamos n1
                n1--
            }
            document.write(factorial);
        }
    </script>
</body>
</html>
```

## Ejercicio 7

Teniendo el siguiente array...
var array = [1, 3, 5, 6, 7, 8, 10];
a. Mostrar por consola, elresultado de sumarlos valores que ocupan posiciones impares
b. Mostrar por consola, elresultado de sumarlos valores que ocupan posiciones pares
c. Mostrar por consola, la suma del valor obtenido en el punto a y en el punto b

```js
var array = [1, 3, 5, 6, 7, 8, 10];
var impares=0;
var pares=0;
//a. Mostrar por consola, elresultado de sumarlos valores que ocupan posiciones impares
//recorremos el array comenzando en la posicion 1 -- incrementamos en dos
for(let i=1;i<array.length;i+=2){
    //sumamos a impares la posicion i mientras que i sea menor que la dimension del array
    impares+=array[i];
}
console.log(`La suma de los números impares es: ${impares}`);
//b. Mostrar por consola, elresultado de sumarlos valores que ocupan posiciones pares
//recorremos el array comenzando en la posicion 0 -- incrementamos en dos
for(let i=0;i<array.length;i+=2){
    //sumamos a pares la posicion i mientras que i sea menor que la dimension del array
    pares+=array[i];
}
console.log(`La suma de los números pares es: ${pares}`);
//c. Mostrar por consola, la suma del valor obtenido en el punto a y en el punto b
//sumamos todo
console.log(`La suma de los pares y los impares es: ${pares+impares}`);
```

## Ejercicio 8

Realizar un función llamada Mensaje que reciba como parámetro una cadena de texto, y que devuelva el número de letras que contiene el texto introducido. Sólo se puede aplicar la sintaxis vista en la UT2, no pudiendo aplicar ningún metodo del objeto String, ya que estos no han sido explicados en clase

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <script>
        var msg = prompt("Intruduce una cadena:");

        function contarLetras(cadena){
            var contar = cadena.length;
            return contar
        }
        console.log(contarLetras(msg));
    </script>
</body>
</html>
```

## Ejercicio 9

Teniendo en cuenta el siguiete Array...
var miArray = ["H", "o", "l", "a", " ", "m", "u", "n", "d", "o"];
a. Mostrar por consola, el texto incluido en el array.
b. Mostrar por consola, el número de literales tipo texto, excluyendo portanto los espacios en blanco.

```js
var miArray = ["H", "o", "l", "a", " ", "m", "u", "n", "d", "o"];
var concat ="";
var concat2 ="";
//a. Mostrar por consola, el texto incluido en el array.
//recorremos el array
    for(let i = 0; i<miArray.length;i++){
        //concatenamos todas las posiciones
        concat +=miArray[i];
    }
    console.log(concat);
//b. Mostrar por consola, el número de literales tipo texto, excluyendo portanto los espacios en blanco.
//recorremos el array
for(let i = 0; i<miArray.length;i++){
    //si la posicion i es difetente de un espacio, concatenamos
    if(miArray[i] != " ")
    concat2 +=miArray[i];
}
console.log(concat2);
```

## Ejercicio 10

Teniendo en cuenta el siguiente array de provincias...
 var provincias = ['Alava','Albacete','Alicante','Almería','Asturias','Avila','Badajoz','Barcelona','Burgos''Cáceres','Cádiz','Cantabria','Castellón','Ciudad Real','Córdoba','LaCoruña','Cuenca','Gerona''Granada','Guadalajara','Guipúzcoa','Huelva','Huesca','Islas Baleares','Jaén','León','Lérida','Lugo''Madrid','Málaga','Murcia','Navarra','Orense','Palencia','Las Palmas','Pontevedra','La Rioja','Salamanca','Segovia','Sevilla','Soria','Tarragona', 'Santa Cruz de Tenerife','Teruel','Toledo','Valencia','Valladolid','Vizcaya','Zamora','Zaragoza'];
a. Solicitarla introducción de una provincia, mostrando por consola la posición que ocupa dicha provincia dentro del array.
Si la provincia introducida no existe, indicarlo por consola.
Si la provincia introducida existe pero está escrita de otra forma... indicarlo por consola.

Sólo se puede aplicar la sintaxis vista en la UT2, no pudiendo aplicar ningún metodo del objeto String, ya que estos no han sido explicados en clase

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
        var provincias =
        ['Alava', 'Albacete', 'Alicante', 'Almería', 'Asturias', 'Avila', 'Badajoz', 'Barcelona','Burgos', 'Cáceres','Cádiz', 'Cantabria', 'Castellón', 'Ciudad Real', 'Córdoba', 'La Coruña','Cuenca', 'Gerona', 'Granada', 'Guadalajara','Guipúzcoa', 'Huelva', 'Huesca', 'Islas Baleares','Jaén', 'León', 'Lérida', 'Lugo', 'Madrid', 'Málaga', 'Murcia', 'Navarra', 'Orense','Palencia', 'Las Palmas', 'Pontevedra', 'La Rioja', 'Salamanca', 'Segovia', 'Sevilla', 'Soria','Tarragona', 'Santa Cruz de Tenerife', 'Teruel', 'Toledo', 'Valencia', 'Valladolid', 'Vizcaya', 'Zamora', 'Zaragoza'];

        var teclProvincia = prompt(`Introduzca la provincia ha buscar:`);
        //inicializamos un bool a falso
        var boolPosicion = false;
        var numPosicion;

        //recorremos el array
        for (let i=0; i<provincias.length;i++){
            //si la posicion i de provincias es igual a la cadena introducida por teclado
            if(provincias[i]===teclProvincia){
                //ponemos el booleano a true y guardamos la posicion
                boolPosicion = true;
                numPosicion = i;
            }
        }

        //si boolPosicion es true sacamos la info de la posición del array
        if(boolPosicion)
            console.log(`La provincia está en la posición ${numPosicion}`)
        else
        //si es false, indicamos que la provincia no está
            console.log(`La provincia no ha sido encontrada.`)
    </script>
</body>
</html>
```

## Ejercicio 11

Relizar un programa que pida el nombre del usuario, si es "Admin", mostrar por consola el mensaje "Hola Administrador/a". En el caso de no se introduzca nada o se introduzcan espacios en blanco, deberá volver a pedir el nombre del usuario

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
        //se pide el usuario
        var usuario = prompt(`Escriba el usuario correcto:`);
        //mientras que el usuario sea diferente de Admin se volverá a pedir
        while (usuario != 'Admin'){
           usuario = prompt(`Usuario inválido. Vuelva a introducir el nombre de usuario:`);
        }
        //se saluda al admin
        console.log(`Hola administrador`);
    </script>
</body>
</html>
```

## Ejercicio 12

Rellenar de forma automática una tabla dependiendo del número de filas y de columnas introducidas por el usuario (las cuales deben coincidir en número)

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
        //pedimos el numero de filas y columnas
        var filas = parseInt(prompt("Indica el número de filas:"));
        var columnas = parseInt(prompt("Indica el número de columnas:"));
        //numero desde el que empiezo a pintar
        var indiceNum = 1;
        var totalBlancos = (filas-2)*(columnas-2);
        var totalNumeros = filas*columnas;
        //el último número que aparece en la segunda fila
        var numFinal = totalNumeros - totalBlancos;

        //escribimos la primera entera
        for(let i = 1; i<=columnas;i++){
            document.write(indiceNum)
            indiceNum++;
        }

        for(let i = 0; i<filas-2;i++){
            //cambio de linea
            document.write('<br/>')
            //escribo el siguiente numero
            document.write(indiceNum);
            //pinto los puntos correspondientes (con los espacios en blanco solo pinta 1)
                for(let i = 0; i<columnas-2;i++){
                    document.write(".");
                }
                //pinto el ultimo numero
                document.write(numFinal);
                //decremento e incremento los numeros de manera correspondiente
                numFinal--
                indiceNum++;  
        }
        //salto de linea
        document.write('<br/>')
        //pinto la última fila entera
        for(let i = 0; i<columnas;i++){
            document.write(indiceNum);
            indiceNum++
        }
    </script>
</body>
</html>
```

## Ejercicio 13

Realiza un script que escriba una pirámide del 1 al 30 de la siguiente forma :

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
        //mientras que i sea menor de 30
        for(let i=0;i<=30;i++){
            //mientras que k sea menor o igual a i
            for(let k =1; k<=i;k++){
                //escribimos i
                document.write(i);
            }
            //introducimos un br
            document.write(`<br/>`);
        }
    </script>
</body>
</html>
```

## Ejercicio 14

Crea script para generar pirámide siguiente con los números del 1 al número que indique el usuario (no
mayor de 50)

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
        //preguntamos hasta qué número vamos a hacer la pirámide
        numUsu = prompt("¿Hasta qué número hacemos la pirámide?")
        if(numUsu <50) {
            //mientras que i sea menor que el numero introducido por teclado
            for(let i=0;i<=numUsu;i++){
                //mientras que k sea menor o igual que i
                for(let k =1; k<=i;k++){
                    //escribimos en el documento k
                    document.write(k);
                }
                //insertamos un retorno de carro
                document.write(`<br/>`);
            }
        } else document.write(`Por favor, introduzca un número menor de 50.`);
    </script>
</body>
</html>
```

## Ejercicio 15

Un script que escriba los números del 1 al 500, que indique cuales son múltiplos de 4 y de 9 y que cada 5 líneas muestre una línea horizontal.

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
        //bucle para recorrer los 500 números
        for(let i = 1; i<=500;i++){
            //escribimos i y además
            document.write(i);
            //si i es divisible entre 4, lo mostramos
            if(i%4===0){
                document.write(" (Múltiplo de 4)");
            }
            //si i es divisible entre 9, lo mostramos
            if(i%9===0){
                document.write(" (Múltiplo de 9)");
            }
            //si i es divisible entre 5, pintamos una línea horinzontal
            if(i%5===0){
                document.write("<hr/>");
            }
            document.write("<br/>");
        }
    </script>
</body>
</html>
```

## Ejercicio 16

Realiza un script que pida número de filas y columnas y escriba una tabla. Dentro cada una de las celdas deberá escribirse un número consecutivo en orden descendente.

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
        //pedimos el número de columnas y filas
        var col = parseInt(prompt("Elige el número de columnas:"));
        var fil = parseInt(prompt("Elige el número de filas:"));
        //sacamos el total
        var total = fil*col;
        //pintamos la tabla
        document.write('<table border="1">');
        //recorremos las columnas y escribimos los tr
        for(let i = 0; i<col; i++){
            document.write("<tr>");
            //recorremos las filas y escribimos los td con el valor 'total'
            for(let k = 0; k<fil; k++){
                document.write(`<td>${total}</td>`);
                //ademas decrementamos el total
                total--;
            }
            //cerramos los tr
            document.write("</tr>")
        }
        //cerramos la tabla
        document.write("</table>");
    </script>
</body>
</html>
```
