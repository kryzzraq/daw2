var botonInsertar = document.getElementById('insertar')
var botonConsultar = document.getElementById('consultar')
var botonConsultarEquipos = document.getElementById('consultarTodos')

//funcionalidad
botonInsertar.addEventListener('click',()=>{crearObjeto()})
botonConsultarEquipos.addEventListener('click',()=>{consultarEquipos()})
botonConsultar.addEventListener('click',()=>{consultarUnEquipo()})

const crearObjeto = () =>{
    EquiposLaura.instanciasCreadas[EquiposLaura.contadorEquipos] = new EquiposLaura()
    EquiposLaura.instanciasCreadas[EquiposLaura.contadorEquipos].insertarDatos()    
    EquiposLaura.contadorEquipos++
}

const consultarEquipos = () =>{
    EquiposLaura.consultarDatosTodosEquipos()
}
const consultarUnEquipo = () =>{
    EquiposLaura.consultarDatosDeUnEquipo()
}


