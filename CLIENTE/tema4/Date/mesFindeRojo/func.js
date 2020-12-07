
let divCal = document.getElementById('calendario')
const MES = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']
let fecha = new Date()
let tabla = ''
let primerDiaSemanaMesActual = new Date(2020,11,01)

const obtenerMesLetra = () => {
    let mesActual = MES[fecha.getMonth()]
    return mesActual
}

let contadorDia = 0
let contadorDiaTabla = 1
let flag = false
let diaSemana = primerDiaSemanaMesActual.getDay()

tabla += `<table border="1"><th colspan="7">${obtenerMesLetra()}</th>`
    for(let i = 0; i<6;i++){
        tabla += '<tr>'
               
            debugger
            for(let k = 0; k<7;k++){
                if(!flag){
                    if(contadorDiaTabla<diaSemana){
                    tabla+=`<td>&nbsp;</td>`
                    }else{
                        tabla +=`<td>${++contadorDia}</td>`
                        if(contadorDia===31) flag = true
                    }
                contadorDiaTabla++
                }
        }
        
        tabla += '</tr>'
    }
tabla += '</table>'

divCal.innerHTML = tabla




//Return value: "<table border="1"><th colspan="7">diciembre</th><tr><td id="celda0">Holi</td><td id="celda1">Holi</td><td id="celda2">Holi</td><td id="celda3">Holi</td><td id="celda4">Holi</td><td id="celda5">Holi</td><td id="celda6">Holi</td></tr><tr><td id="celda7">Holi</td><td id="celda8">Holi</td><td id="celda9">Holi</td><td id="celda10">Holi</td><td id="celda11">Holi</td><td id="celda12">Holi</td><td id="celda13">Holi</td></tr><tr><td id="celda14">Holi</td><td id="celda15">Holi</td><td id="celda16">Holi</td><td id="celda17">Holi</td><td id="celda18">Holi</td><td id="celda19">Holi</td><td id="celda20">Holi</td></tr><tr><td id="celda21">Holi</td><td id="celda22">Holi</td><td id="celda23">Holi</td><td id="celda24">Holi</td><td id="celda25">Holi</td><td id="celda26">Holi</td><td id="celda27">Holi</td></tr><tr><td id="celda28">Holi</td><td id="celda29">Holi</td><td id="celda30">Holi</td><td id="celda31">Holi</td><td id="celda32">Holi</td><td id="celda33">Holi</td><td id="celda34">Holi</td></tr><tr><td id="celda35">Holi</td><td id="celda36">Holi</td><td id="celda37">Holi</td><td id="celda38">Holi</td><td id="celda39">Holi</td><td id="celda40">Holi</td><td id="celda41">Holi</td></tr><tr><td id="celda42">Holi</td><td id="celda43">Holi</td><td id="celda44">Holi</td><td id="celda45">Holi</td><td id="celda46">Holi</td><td id="celda47">Holi</td><td id="celda48">Holi</td></tr></table>"
 