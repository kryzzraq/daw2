async function obtenerDatos(){
    try{
        let response = await fetch ("json2.json");
        let datosJson = await response.json();

        arrancar.addEventListener("click",()=>{coche.arrancar(datosJson)})
        acelerar.addEventListener("click",()=>{coche.acelerar(datosJson)})
        frenar.addEventListener("click",()=>{coche.frenar(datosJson)})
        parar.addEventListener("click",()=>{coche.parar(datosJson)})  
    }catch(err){
        console.error(err)
    }  
}

let coche = new Coche()

let arrancar = document.querySelector("#arrancar");
let acelerar = document.querySelector("#acelerar");
let frenar = document.querySelector("#frenar");
let parar = document.querySelector("#parar");

obtenerDatos();

