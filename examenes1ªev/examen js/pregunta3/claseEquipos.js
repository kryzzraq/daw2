class EquiposLaura{
    static contadorEquipos = 0
    nombreEquipo=''
    nombreEstadio=''    
    nombreJugadores = []
    static instanciasCreadas = []

    setNombreEquipo = () =>{
        var nombre = window.prompt('Ingresa el nombre del equipo:')
        this.nombreEquipo = nombre
        console.log('Se ha actualizado el nombre del equipo')
    }
    setNombreEstadio = () =>{
        var nombre = window.prompt('Ingresa el nombre del estadio:')
        this.nombreEstadio = nombre
        console.log('Se ha actualizado el nombre del estadio')
    }

     setNombreJugadores = () =>{
        for(let i = 0; i<3;i++){
            var nombre = window.prompt(`Ingresa el nombre del jugador ${i+1}:`)
            this.nombreJugadores[i] = nombre
            console.log(`Se ha insertado el jugador ${i+1}`)
        }        
    }
    insertarDatos = () =>{        
        this.setNombreEquipo()
        this.setNombreEstadio()
        this.setNombreJugadores()
    }

   static consultarDatosTodosEquipos = () =>{
        for(let i = 0; i<EquiposLaura.instanciasCreadas.length;i++){
            console.log(EquiposLaura.instanciasCreadas[i].toString())
        }
    }

    static consultarDatosDeUnEquipo = () =>{
        var nombreEquipo = window.prompt('Ingresa el nombre del equipo que quieres consultar')
        for(let i = 0; i<EquiposLaura.instanciasCreadas[i];i++){
            if(EquiposLaura.instanciasCreadas[i].nombreEquipo === nombreEquipo){
                console.log(EquiposLaura.instanciasCreadas[i].toString())
            }
        }
    }
}

var equipoLaura = new EquiposLaura()