var parrafo = document.getElementById('idEtiquetaP')

var texto = parrafo.textContent.toLowerCase()
var vocales = 0
var consonantes = 0
var encontrado
ARRAYVOCALES = ['a','e','i','o','u','á','é','í','ó','ú','ü']
ARRAYCONSONANTES = ['b','c','d','f','g','h','j','k','l','m','ñ','n','p','q','r','s','t','v','w','x','y','z']

//recorro la frase
for(let i = 0; i<texto.length; i++){
    encontrado = false
    //recorro el array de vocales
    for(let k = 0; k<ARRAYVOCALES.length; k++){
        //compruebo si la letra (i) es una vocal
        if(!encontrado){
           if(texto.charAt(i) === ARRAYVOCALES[k]){
                vocales++
                encontrado = true
            } 
        }
        if(encontrado) break
        
    }
    if(!encontrado){
        for( let j = 0; j<ARRAYCONSONANTES.length; j++){
            if(!encontrado){
               if(texto.charAt(i) === ARRAYCONSONANTES[j]){
                  consonantes++
                encontrado = true  
               }
            } 
            if(encontrado) break           
        }      
    }  
}

console.log(`El número de vocales es: ${vocales}`)
console.log(`El número de consonantes es: ${consonantes}`)