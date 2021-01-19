var pDiasFestivos = document.getElementById('parrafoDate')
var enero = 31
var febrero = 28
var marzo = 31
var abril = 30
var mayo = 31
var junio = 30
var  julio = 31
var agosto = 31
var septiembre = 30
var octubre = 31
var noviembre = 30 
var diciembre = 31
var todasFechas = ''


var meses = [enero,febrero, marzo, abril,mayo,junio,julio,agosto,septiembre,octubre,noviembre,diciembre]
var fecha = new Date(2021,0,1)
//console.log(fecha.toDateString())
//console.log(fecha.getDay())

//cambio de meses:
for(let i = 0; i<meses.length; i++){
    if(i%2===0){
        //para los días:
        for(let k = 1; k<=meses[i];k++){
            var fechaString =''
            //se crea una nueva fecha:
            var fecha = new Date(2021,i,k)
            if(fecha.getDay() === 0){
                fechaString += 'D-'
                fechaString += fecha.getDate()+'/'
                fechaString += fecha.getMonth()+1 +'/'
                fechaString += fecha.getFullYear()
                console.log(fechaString)
                todasFechas += fechaString+'<br/>'
            }
            if(fecha.getDay() === 6){
                fechaString += 'S-'
                fechaString += fecha.getDate()+'/'
                fechaString += fecha.getMonth()+1 +'/'
                fechaString += fecha.getFullYear()
                console.log(fechaString)
                todasFechas += fechaString+'<br/>'
            }
        }    
    }
}

pDiasFestivos.innerHTML = todasFechas