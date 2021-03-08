let btnArrancar = document.getElementById('btnArrancar')
let btnFrenar = document.getElementById('btnFrenar')
let btnAcelerar = document.getElementById('btnAcelerar')
let btnParar = document.getElementById('btnParar')

miCoche = new Coche()
traerDatos();


async function traerDatos(){
    debugger
    let response = await fetch("mijson.json")
    let datos = await response.json()

    btnArrancar.addEventListener('click', () => {miCoche.arrancar()})
    btnFrenar.addEventListener('click', () => {miCoche.frenar(datos)})
    btnAcelerar.addEventListener('click', () => {miCoche.acelerar(datos)})
    btnParar.addEventListener('click', () => {miCoche.parar(datos)})
}