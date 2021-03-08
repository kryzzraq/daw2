class Coche{
    velocidad
    arrancado

    constructor(){
        this.velocidad = 0
        this.arrancado = false
    }

    arrancar(){
        if(!this.arrancado){
            this.arrancado = true
            this.velocidad = 0
            console.log("Arrancando coche...")
        }else{
            console.log("El coche ya está arrancado");
        }
    }

    parar(){
        if(this.arrancado){
            this.arrancado = false
            this.velocidad = 0
            console.log("Parando coche...")
        }else{
            console.log("El coche ya está parado")
        }
    }

    acelerar(json){
        if(this.arrancado){
            this.velocidad += json.intervalo
            if(this.velocidad > json.velocidad_max){
                console.log(`Has superado la velocidad máxima permitida, te han multado con ${json.multa}€.`)
                this.parar()
            }else{
                console.log(`Tu velocidad actual es de ${this.velocidad}km/h.`)
            }
        }else{
            console.log("El coche no está arrancado.")
        }
    }

    frenar(json){
        if(this.arrancado){
            this.velocidad -= json.intervalo
            if(this.velocidad<0){                
                console.log(`Se ha calado el coche, hay que llamar a la grúa, cuesta ${json.grua}€.`)
                this.parar()
            }else{
                console.log(`Tu velocidad es de ${this.velocidad}km/h.`)
            }
        }else{
            console.log("El coche no está arrancado")
        }
    }

}