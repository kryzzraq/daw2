var divHoras = document.getElementById('horas')
var divMinutos = document.getElementById('minutos')
var divSegundos = document.getElementById('segundos')
var divFecha = document.getElementById('fecha')
var meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septeimbre', 'octubre', 'noviembre','diciembre']

obtenerHora = () =>{
    var fecha = new Date()
    if(fecha.getHours() < 10){
        var hora = '0'+fecha.getHours()
    }else{
        var hora = fecha.getHours()
    }
    if(fecha.getMinutes() < 10){
        var minutos = '0'+fecha.getMinutes()
    }else{
        var minutos = fecha.getMinutes()
    }
    if(fecha.getSeconds()< 10){
        var segundos = '0'+fecha.getSeconds()
    }else{
        var segundos = fecha.getSeconds()
    }
    
    divHoras.innerHTML = hora
    divMinutos.innerHTML=minutos
    divSegundos.innerHTML=segundos

    divFecha.innerHTML = `${fecha.getDate()} de ${meses[fecha.getMonth()]} de ${fecha.getFullYear()}`
   
}

window.onload = function (){
    setInterval(obtenerHora, 1000)
}

