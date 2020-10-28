/* MÉTODOS */

    //funcion eval: ejecuta lo que tiene dentro de los parentesis
    console.log(eval(5+3));

    //isNaN: devuelve un boolean si es un número o no:
    console.log(isNaN(8));
    console.log(isNaN("Hola Mundo"));


/* FUNCIONES */

    //Funcion 1: 
        function miFuncionSinParametros(){
            console.log("Estoy en la funcion sin parámetros");
        }
        //Llamo a la funcion:
        miFuncionSinParametros();

    //Funcion 2:
        function miFuncionConParametros(param){
            console.log(`Estoy en la funcion con parámetros ${param}`)
        }
        miFuncionConParametros("Hola Mundo");

    //Funcion 3 => Arrow sin parámetros:
        const miFuncionArrowSinParametros = () => {
            console.log("Estoy en la funcion arrow sin parámetros")
        }
        miFuncionArrowSinParametros();

    //Funcion 4 => Arrow con parámetros:
        const miFuncionArrowConParametros = (param) => {
            console.log(`Estoy en la funcion arrow con parametros ${param}`)
        }
        miFuncionArrowConParametros("Esto es un parámetro");
