class EquiposLaura {
    nombreEquipo
    nombreEstadio
    jugadores = []
    static equipos = []

    constructor(equipo, estadio, jug1,jug2,jug3){
        this.nombreEquipo = equipo
        this.nombreEstadio = estadio
        this.jugadores[0] = jug1
        this.jugadores[1] = jug2
        this.jugadores[2] = jug3
    }

    setNombreEquipo = (nombre) =>{
        this.nombreEquipo = nombre
    }

    setNombreEstadio = (estadio) =>{
        this.nombreEstadio = estadio
    }

    setJugadores = () =>{
        for(let i = 0; i < 3; i++){
            this.jugadores[i] = window.prompt(`Escribe el nombre del jugador ${i+1}`)
        }

    }

    guardarEquipo = () =>{
        EquiposLaura.equipos.push(this)
    }

    rellenarDatos = () =>{
        this.setNombreEquipo(window.prompt(`Escribe el nombre del equipo`))
        this.setNombreEstadio(window.prompt(`Escribe el nombre del estadio`))
        this.setJugadores()
    }

    obtenerDatos = () => {}

}

equipo1 = new EquiposLaura()
equipo1.guardarEquipo()