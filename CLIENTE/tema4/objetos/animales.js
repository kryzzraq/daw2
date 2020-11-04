/*
Clase Perro
Atributo: raza
Métodos:
Correr: consola (Estoy corriendo)
Ladrar: consola (Estoy ladrando)

Clase Animal
Atributo: Tipo
Clase Perro, subclase de Animal
*/
class Animal{
    constructor(tipo){
        this.tipo = tipo
    }
}

class Perro extends Animal{
    
    constructor(tipo, raza){
        super(tipo)
        this.raza = raza
    }
    
    correr(){
        console.log(`${this.raza} está corriendo.`)
    }
    ladrar(){
        console.log(`${this.raza} ladra muy poco, es muy ${this.tipo}`)
    }
}

//Creación de objetos:
var manchitas = new Perro('casero','dalmata');
manchitas.ladrar();
manchitas.correr();