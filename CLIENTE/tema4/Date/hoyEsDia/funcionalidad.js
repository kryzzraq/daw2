let div = document.getElementById("fecha")
        let fecha = new Date(); 

        const DIASEMANA = ['lunes','martes','miercoles','jueves','viernes','sabado','domingo']
        const MES = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre']
               
        const obtenerDiaSemana = () =>{
            let diaNumero = fecha.getDay()
            let diaLetra = DIASEMANA[diaNumero-1]
            return diaLetra
        }

        const obtenerMes = () => {
            return MES[fecha.getMonth()]
        }

        const obtenerMinutos = () =>{
            let minutos = fecha.getMinutes()
            if(minutos.lenght<2){
                minutos = `0`+minutos
            }
            return minutos
        }

        let cadena = `Hoy es ${obtenerDiaSemana()}, ${fecha.getDate()} de ${obtenerMes()} de ${fecha.getFullYear()} y 
        son las ${fecha.getHours()}:${obtenerMinutos()} horas.`
        div.innerHTML = cadena