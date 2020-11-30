//Creando mi clase Calculadora
class Calculadora{
    constructor(){
        this.operando1 = ''
        this.operando2 = ''
        this.operador = ''
        this.resultado = ''
        this.boolCientifica = false
        this.boolPunto = false
        this.boolOperado = false
    }

    pintarEnDisplay = (boton) => {
       
        if(display.value.length < 10){
            if(this.operador == ''){
                display.value+=boton.value;
                this.operando1 = display.value
            } else{
                if(this.boolOperado){
                    display.value = ''
                    this.boolOperado = false
                }
                display.value+=boton.value;
                this.operando2 = display.value
            }
        }
    }
    
    borrarUltimoValor = () => {
        display.value=''
        this.boolPunto = false
        this.boolOperado = false
    }

    borrarTodo = () => {
        this.borrarUltimoValor()
        this.operando1 = ''
        this.operando2 = ''
        this.operador = ''
        this.resultado=''
        this.boolPunto = false
        this.boolOperado = false
    }

    operar = (valorBoton) => {
        this.borrarUltimoValor()
        if(this.operador == ''){
            this.operador = valorBoton
        }else{
            this.igualar()
            this.boolOperado = true         
        }
        this.operador = valorBoton
    }

    igualar= ()=>{
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
                this.resultado = parseFloat(this.operando1) / parseFloat(this.operando2)               
                break;
        }
            display.value = this.resultado
            this.operando1 = this.resultado
            this.operando2 = ''
            this.operador = ''
            this.boolOperado = true
    }

    cientifica = () => {        
        if(!this.boolCientifica){
            BotonesCientifica.style.display = "block"
            divCalcu.style.height="550px"            
            this.boolCientifica = true
        } else {
            BotonesCientifica.style.display = "none"
            divCalcu.style.height="490px"
            this.boolCientifica = false
        }
    }

    masMenos = () =>{
        if(display.value.search('-')){
            display.value = "-"+display.value;
        }else{
            display.value = display.value.replace("-","")
        }
    }

    pintarPunto = () =>{
        if(!this.boolPunto){
            display.value = display.value + '.'
            this.boolPunto = true
        }
    }    
}

//Creo mi calculadora
miCalcu = new Calculadora()