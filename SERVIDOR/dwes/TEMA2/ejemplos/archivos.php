<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //No se deben poner rutas absolutas porque en Linux ya no funcionaría.
            //a -> solo lectura
        $file=fopen("f.txt","a+");
        if(!$file){
            echo "No se puede realizar la operacion";
            exit;
        }

        //para escribir en un fichero se pueden usar las funciones fwrite() o fputs()
        fwrite($file, "Hola Mundo\n");
        fclose($file);

        //leer archivos: r-> lectura y escritura
        $file=fopen("f.txt","r");

            //Línea a línea: fgets()
            while(!feof($file)){ // -> mientras no haya acabado el fichero
                $char = fgets($file);
                echo $char;
            }

            //caracter a caracter: fgetc()
            /*while(!feof($file)){
                $char = fgetc($file);
                echo $char;
            }*/
        fclose($file);

        //función para abrir, escribir y cerrar un archivo: file_put_contents() 
                                        //-> para escribir al final del archivo.
        //funciones para leer un archivo completo: readfile()
        //file_get_contents() devuelve string
        //file() devuelve un array

        //Leer archivos línea a línea:
            // fgetcsv($file[,int longitud[,string "separador"].............])

            //fread($file, int longitud) -> decuelve un string.
    ?>
</body>
</html>