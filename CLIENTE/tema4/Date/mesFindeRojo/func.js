let tdMes = document.getElementById("mes")
let divjs = document.getElementById("divjstabla")
const MES = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre']
let fecha = new Date()

const obtenerMesLetra = () => {
    let mesActual = MES[fecha.getMonth()]
    return mesActual
}

const pintarTabla = () => {
    let tabla = ''
    let contadorID = 0

    tabla += `<table border="1"><th colspan="7">${obtenerMesLetra()}</th>`
    for(let i = 0; i<7;i++){
        tabla += '<tr>'
        for(let k = 0; k<7;k++){
            tabla +=`<td id="celda${contadorID}">Holi</td>`
            contadorID++
        }
    tabla += '</tr>'
    }
    tabla += '</table>'
    
    return tabla
}
tdMes.innerHTML = obtenerMesLetra()
divjs.innerHTML = pintarTabla()

const obtenerDiaSemana = () =>{
    let diaSemana = fecha.getDay()
}