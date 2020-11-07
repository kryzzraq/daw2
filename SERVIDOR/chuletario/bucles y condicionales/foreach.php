Pare recoger sólo los valores del array:

    $array = [1,2,3,4];
    foreach($array as $valor){
        echo $valor;        
    }

--> Esto imprimiría: 1 2 3 4   


Para recoger los valores y las claves del array: 

    $array = [1,2,3,4];
    foreach($array as $indice => $valor){
        echo "{$clave} => {$valor}";
        print_r{$array};
    }
