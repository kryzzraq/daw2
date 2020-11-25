//Creando mi clase Calculadora
class Calculadora{
    constructor(){
        this.operando1 = ''
        this.operando2 = ''
        this.operador = ''
        this.resultado = ''
    }

    pintarEnDisplay(boton){
        if(display.value.length < 10)
            display.value+=boton.value;
    }
    
    borrarUltimoValor(){
        display.value=''
    }

    borrarTodo(){
        this.borrarUltimoValor()
        this.operando1 = ''
        this.operando2 = ''
        this.operador = ''
        this.resultado=''
    }

    operar(valorBoton){        
        if(this.operador !== ''){
            this.operar()
        }
        this.operando1 = display.value
        this.operador = valorBoton
        display.value = ''     
    }

    igualar(){
        this.operando2 = display.value
        switch (this.operador){
            case '+':                
                this.resultado = parseFloat(this.operando1) + parseFloat(this.operando2)
                break;
            case '-':
                this.resultado = parseFloat(this.operando1) - parseFloat(this.operando2)               
                break;
            case 'x':
                this.resultado = parseFloat(this.operando1) * parseFloat(this.operando2)               
                break;
            case '/':
                this.resultado = parseFloat(this.operando1) * parseFloat(this.operando2)               
                break;
        }
            this.operador=''
            display.value = this.resultado
    }

    cientifica(){}
    
}

//Creo mi calculadora
miCalcu = new Calculadora()
