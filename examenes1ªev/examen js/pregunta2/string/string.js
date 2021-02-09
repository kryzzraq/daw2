//capturo el parrafo
var parrafo = document.getElementById('idEtiquetaP')

//funcion para contar vocales y consonantes
const contarLetras = (frase) =>{
    var vocales = 0
    var consonantes = 0
 
    //recorro la frase, si la posicion i coincide con aeiouAEIUO sumo 1 a vocales, si no a consonantes
    for( let i = 0; i<frase.length; i++){
        if(frase.charAt(i) == "a"||frase.charAt(i) == "e"||frase.charAt(i) == "i"||frase.charAt(i) == "o"||frase.charAt(i) == "u" ||
            frase.charAt(i) == "A"||frase.charAt(i) == "E"||frase.charAt(i) == "I"||frase.charAt(i) == "O"||frase.charAt(i) == "U"){
            vocales++
        }else{
            consonantes++
        }
    }
        console.log(`El número de vocales es: ${vocales}`)
        console.log(`El número de consonantes es: ${consonantes}`)
    }

    contarLetras(parrafo.textContent)