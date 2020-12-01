let tdMes = document.getElementById("mes")
const MES = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre']
let fecha = new Date()

const obtenerMesLetra = () => {
    let mesActual = MES[fecha.getMonth()]
    return mesActual
}

const pintarTabla = () => {
    debugger
    let tabla = `<table border='1'><tr><td colspan='7'>octubre</td></tr></table>` 
    return tabla    
}
tdMes.innerHTML = obtenerMesLetra()

const obtenerDiaSemana = () =>{
    let diaSemana = fecha.getDay()
}