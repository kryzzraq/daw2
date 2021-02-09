var botonRellenar = document.getElementById('rellenar')
var divTabla = document.getElementById('tabla')

botonRellenar.addEventListener('click',()=>{pintarTabla()})

//funcion para rellenar la variable que contiene la estructura de la tabla
const rellenarTabla = () =>{
    //creo la variable que contendrá la tabla
    var tablaConNumeros = ''

    //dos contadores, uno para avanzar por las casillas y otro para pintar los números
    var contador = 1
    var contadorPintar = 1;
    var pares = 0
    var impares = 0

    //inicializo la tabla
    tablaConNumeros += "<table border='1'><tr>"

    //primer bucle para pintar la tabla
    for(let k= 0; k<5;k++){
        
        debugger
        //segundo bcle para pintar las filas
        for(let i = 0; i<5;i++){

            //si el resto de dividir el contador entre 2 es 0, siginifica que está en una celda par, por lo que deberá 
            //pintar un guión (-)
            if(contador%2===0){
                tablaConNumeros +="<td>-</td>"
                //añado 1 al contador de celdas
                contador++
            }else{                
                //funcion para sumar numero a pares o impares
                if(contadorPintar%2===0){
                    pares++
                }else {
                    impares++
                }

                //si no es par, pinto el número correspondiente
                tablaConNumeros += `<td>${contadorPintar++}</td>`
                contador++                
            } 
        }
        //cierro la fila
            tablaConNumeros += '</tr>'
    }
    //cierro la tabla
    tablaConNumeros += "</table>"
    console.log(`El número de pares es: ${pares}`)
    console.log(`El número de impares es: ${impares}` )
    //retorno la estructura
    return tablaConNumeros
}

//funcion para pintar la tabla en el documento
const pintarTabla = () =>{
    divTabla.innerHTML = rellenarTabla() 
}