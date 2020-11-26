//Creando mi clase Calculadora
class Calculadora{
    constructor(){
        this.operando1 = ''
        this.operando2 = ''
        this.operador = ''
        this.resultado = ''
        this.boolCientifica = false;
    }

    pintarEnDisplay = (boton) => {
        if(display.value.length < 10)
            display.value+=boton.value;
    }
    
    borrarUltimoValor = () => {
        display.value=''
    }

    borrarTodo = () => {
        this.borrarUltimoValor()
        this.operando1 = ''
        this.operando2 = ''
        this.operador = ''
        this.resultado=''
    }

    operar = (valorBoton) => {
        this.operando1 = display.value
        this.operador = valorBoton
        display.value = ''     
    }

    igualar= ()=>{
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

    MasMenos = () =>{
        if(display.value.search('-')){
            display.value = "-"+display.value;
        }else{
            display.value = display.value.replace("-","")
        }
    }
    
}

//Creo mi calculadora
miCalcu = new Calculadora()
