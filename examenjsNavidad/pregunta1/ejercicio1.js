var botonRellenar = document.getElementById("rellenar")
var divTabla = document.getElementById("tabla")

botonRellenar.addEventListener("click", () =>{divTabla.innerHTML = pintarTabla()})


const pintarTabla = () =>{
    botonRellenar.style.display = `none`
    let contadorNumeros = 0
    let contadorCasillas = 1
    let tabla = `<table border="1">`
    let pares = 0
    let impares = 0

    for(k=0;k<5;k++){    
        tabla +=`<tr>`
        for(let i = 0; i<5;i++){
            if(contadorCasillas%2 === 0){
                tabla += `<td align="center">-</td>`
            } else {
                tabla += `<td align="center">${++contadorNumeros}</td>`
                debugger
                if(contadorNumeros%2 === 0){
                    pares += contadorNumeros
                }else{
                    impares += contadorNumeros
                }
            }
            contadorCasillas++
        }
        tabla += `</tr>`
    }
    tabla += `</table>` 
    console.log(`El resultado de los números pares es: ${pares}`)
    console.log(`El resultado de los números impares es: ${impares}`)
    return tabla
}