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

for(let cont=0; cont<alturas.length;cont++){
    if(maxima<alturas[cont]){
        maxima = alturas[cont];
    }
    if(minima>alturas[cont]){
        minima = alturas[cont];
    }
    media = media+alturas[cont];
}

console.log(`altura mínima:`,minima);
console.log(`altura máxima:`,maxima);
console.log(`altura media:`, media/alturas.length);
console.log(`Contador de alturas:${alturas.length}`);
```

## Ejercicio 2

Teniendo el siguiente array de equipos de futbol ["Real Madrid"-89,"Betis-78","Atlético de Madrid"-79,"Barcelona"-4], ordenarlos según los puntos obtenidos y mostrar por consola elresultado, de la siguiente forma:

```js
console.log(`Ejercicio 2:`);
var equipos =[ "Betis-78", "Real Madrid-89","Atletico de Madrid-79","Barcelona-4"];
var equipos2=[];
for(let cont =0; cont <equipos.length;cont++){
    equipos2[cont] = equipos[cont].split("-");
    //console.log(equipos2[cont]);
}

var maxPunt = 0;
var minPunt = 100;

for (let i = 0; i<equipos2.length; i++){
    for (let k =0; k<equipos2[i].length;k++){
        if(maxPunt < equipos2[i][1]){
            maxPunt = equipos2[i][1];
        }
        if(minPunt > equipos2[i][1]){
            minPunt = equipos2[i][1];
        }
    }
}

console.log(maxPunt);
console.log(minPunt);
```

## Ejercicio 3

Teniendo el siguiente objeto {nombre:"Juan", edad:84, profesion:"Ministro"},recorrerlos distintos elementos utilizando los distintos bucles vistos en clase

```js

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
        for(let i =0; i<n1;){
            console.log(i+=2);
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
        var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X',
            'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

        var dni = parseInt(prompt("Intruduce el DNI del que quieres saber la letra:"));
        var letra = dni%23;

        prompt(`La letra de el dni introducido es: `,letras[letra],);
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
        n1= parseInt(prompt(`Elige el número del que quieres saber el factorial:`));
        var factorial =1;

        if(typeof(n1)!=='number'){
            document.write(`Por favor, introduzca un número.`);
        } else {
            for(;n1!=0; n1--){
                factorial*=n1;
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
for(let i=1;i<array.length;i+=2){
    impares+=array[i];
}
console.log(`La suma de los números impares es: ${impares}`);
//b. Mostrar por consola, elresultado de sumarlos valores que ocupan posiciones pares
for(let i=0;i<array.length;i+=2){
    pares+=array[i];
}
console.log(`La suma de los números pares es: ${pares}`);
//c. Mostrar por consola, la suma del valor obtenido en el punto a y en el punto b
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
    for(let i = 0; i<miArray.length;i++){
        concat +=miArray[i];
    }
    console.log(concat);
//b. Mostrar por consola, el número de literales tipo texto, excluyendo portanto los espacios en blanco.
for(let i = 0; i<miArray.length;i++){
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
        ['Alava', 'Albacete', 'Alicante', 'Almería', 'Asturias', 'Avila', 'Badajoz', 'Barcelona',
        'Burgos', 'Cáceres','Cádiz', 'Cantabria', 'Castellón', 'Ciudad Real', 'Córdoba', 'La Coruña',
        'Cuenca', 'Gerona', 'Granada', 'Guadalajara','Guipúzcoa', 'Huelva', 'Huesca', 'Islas Baleares',
        'Jaén', 'León', 'Lérida', 'Lugo', 'Madrid', 'Málaga', 'Murcia', 'Navarra', 'Orense',
        'Palencia', 'Las Palmas', 'Pontevedra', 'La Rioja', 'Salamanca', 'Segovia', 'Sevilla', 'Soria',
        'Tarragona', 'Santa Cruz de Tenerife', 'Teruel', 'Toledo', 'Valencia', 'Valladolid',            'Vizcaya', 'Zamora',
        'Zaragoza'];

        var teclProvincia = prompt(`Introduzca la provincia ha buscar:`);
        var boolPosicion = false;
        var numPosicion = 0;

        for (let i=0; i<provincias.length;i++){
            if(provincias[i]===teclProvincia){
                boolPosicion = true;
                numPosicion = i;
            }
        }

        if(boolPosicion)
            console.log(`La provincia está en la posición ${numPosicion}`)
        else
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
        var usuario = prompt(`Escriba el usuario correcto:`);
        while (usuario != 'Admin'){
            usuario = prompt(`Usuario inválido. Vuelva a introducir el nombre de usuario:`);
        }
        console.log(`Hola administrador`);
    </script>
</body>
</html>
```

## Ejercicio 12

Rellenar de forma automática una tabla dependiendo del número de filas y de columnas introducidas por
el usuario (las cuales deben coincidir en número)
