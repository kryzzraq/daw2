function fRepetir (cadena, veces){
    var concatenar = cadena;
    for (let i = 0; i<veces; i++){
        concatenar = concatenar.concat(" DWEC");
    }
    console.log(concatenar)
}

fRepetir("DWEC", 7);