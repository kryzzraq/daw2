//Creando mi clase Calculadora
const LONG_DISPLAY = 10;
class Calculadora{
    constructor(){
        this.operando1 = ''
        this.operando2 = ''
        this.operador = ''
        this.resultado = ''
        this.operadorCient = ''
        this.boolCientifica = false
        this.boolPunto = false
        this.boolOperado = false
        
    }

    //Función para pintar en el display
    pintarEnDisplay = (boton) => {
            if(display.value.length < LONG_DISPLAY){
                //si el operador está vacío lo asigno
                if(this.operador === '' && this.operadorCient ===''){
                    display.value+=boton.value;
                    this.operando1 = display.value
                } else{
                    //si está asignado, cambio el display al operador 2
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
        this.operadorCient = ''
    }

    //resolver operación 
    operar = (valorBoton) => {
        this.borrarUltimoValor()
        //si el operador está vacío, asignamos
        if(this.operador === ''){
            this.operador = valorBoton
        }else{
            //si no está vacío, opero
            this.igualar()
            this.boolOperado = true         
        }
        this.operador = valorBoton
    }

    


    cientifica = () => {        
        if(!this.boolCientifica){
            BotonesCientifica.style.display = "block"
            divCalcu.style.height="580px"            
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
        if(this.operador === '' && this.operadorCient === ''){
            this.operando1 = display.value
        }else this.operando2 = display.value
        
    }

    pintarPunto = () =>{
        if(!this.boolPunto){
            if(display.value.length<1){
                display.value = display.value + '0.'
            } else {
                display.value = display.value + '.'               
            }
            this.boolPunto = true
        }
    }

    pintarPI_E = (valor) =>{   
        if(this.operando1 ===''){
            switch (valor){
                case 'PI':
                    this.operando1 = Math.PI
                    display.value = Math.PI
                    break;
                case 'e':
                    this.operando1 = Math.E
                    display.value = Math.E
                    break
            }  
        }else{
            switch (valor){
                case 'PI':
                    this.operando2 = Math.PI
                    display.value = Math.PI
                    break;
                case 'e':
                    this.operando2 = Math.E
                    display.value = Math.E
                    break
            }
        } 
    }

    operacionCientifica = (value) =>{
        this.borrarUltimoValor()
        this.operadorCient = value
        switch (this.operadorCient){
            case 'raiz':
                if(parseFloat(this.operando1)>0)  this.resultado = Math.sqrt(parseFloat(this.operando1))
                else {
                    display.value = "Syntax error"
                }
                break
            case 'tan':
                this.resultado = Math.tan(parseFloat(this.operando1))
                break
            case 'cos':
                this.resultado = Math.cos(parseFloat(this.operando1))
                break;
            case 'log':
                this.resultado = Math.log(parseFloat(this.operando1))
                break
            case 'sin':
                this.resultado = Math.sin(parseFloat(this.operando1))
                break
            case 'atan':
                this.resultado = 1 / Math.atan(parseFloat(this.operando1))
                break
            case 'acosh':
                this.resultado = 1 / Math.acosh(parseFloat(this.operando1))
                break
            case 'asinh':
                this.resultado = 1 / Math.asinh(parseFloat(this.operando1))
                break
        }
        display.value = this.resultado
        this.operando1 = this.resultado
        this.operadorCient = ''
    }

    igualar= ()=>{
        if(this.operando1 !=='' && this.operando2 !== '' && this.operador!==''){
            switch (this.operador){            
                case '+':                
                    this.resultado = parseFloat(this.operando1) + parseFloat(this.operando2)
                    break
                case '-':
                    this.resultado = parseFloat(this.operando1) - parseFloat(this.operando2)               
                    break
                case 'x':
                    this.resultado = parseFloat(this.operando1) * parseFloat(this.operando2)               
                    break
                case '/':
                    this.resultado = parseFloat(this.operando1) / parseFloat(this.operando2)               
                    break
                case 'elevado':
                    this.resultado = Math.pow(parseFloat(this.operando1),parseFloat(this.operando2))
                    break
                case 'modulo':
                    this.resultado = this.operando1%this.operando2
                    break
                case 'hyp':
                    this.resultado = Math.hypot(parseFloat(this.operando1), parseFloat(this.operando2))
                    break        
            }
                display.value = this.resultado
                this.operando1 = this.resultado
                this.operando2 = ''
                this.operador = ''
                this.boolOperado = true
        }
    }

}

//Creo mi calculadora
miCalcu = new Calculadora()