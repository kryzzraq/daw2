class Coche{
    velocidad_actual
    arrancado
    construct(){
        velocidad_actual
        arrancado = false
    }

    arrancar() {
        if(!this.arrancado){
            this.arrancado = true
            this.velocidad_actual = 0
            console.log("Arrancando el coche")
        }else{
            console.log(`El coche ya está arrancado`)
        }
    }

    acelerar(json){
        if(this.arrancado){
            this.velocidad_actual+= json.intervalo
            console.log(`La velocidad actual es de ${this.velocidad_actual}`)
            if(this.velocidad_actual>100){
                console.log(`Hay multa por exceso de velocidad, la multa es de ${json.multa}€`)
                this.parar()
            }
        }else{
            console.log(`El coche no está arrancado`)
        }
    }
    
    frenar(json){
        if(this.arrancado){
            this.velocidad_actual -=json.intervalo
            console.log(`La velocidad actual es de ${this.velocidad_actual}`)
            if(this.velocidad_actual <= 0){
                this.parar()
            }
        }
    }

    parar(json){
        if(this.arrancado){
            this.arrancado = false
            console.log("Parando coche")
        }else{
            console.log("El coche ya está parado")
            console.log(`Hay que llamar a la grúa, son ${json.grua}€.`)
        }
    }
}