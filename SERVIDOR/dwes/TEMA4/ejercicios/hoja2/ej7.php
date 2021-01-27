<?php
class Tabla{
    private $columnas;
    private $filas;
    private $contenido;
    private $borde;

    public function __construct(){
        $arrayAtributos = func_get_args();
        switch (count($arrayAtributos)){
            case 1:
                $this->columnas = $arrayAtributos[0];
                $this->filas = 1;
                $this->contenido = "";
                $this->borde = 1;
                break;
            case 2:
                $this->columnas = $arrayAtributos[0];
                $this->filas = $arrayAtributos[1];
                $this->contenido = "";
                $this->borde = 1;
                break;
            case 3:
                $this->columnas = $arrayAtributos[0];
                $this->filas = $arrayAtributos[1];
                $this->contenido = "";
                $this->borde =  $arrayAtributos[2];
                break;
            default:
                $this->columnas = 1;
                $this->filas = 1;
                $this->contenido = "";
                $this->borde = 1;
                break;
        }

    }

    public function insertar($valorCelda,$fila,$columna,$colorTexto,$colorFondo){

        if($fila <= $this->filas && $columna <= $this->columnas){
            $contadorColumnas = 1;
            $contadorFilas = 1;

            $this->contenido = $this->contenido . "<table border='$this->borde'>";
            for($i = 0; $i<$this->columnas; $i++){
                $this->contenido = $this->contenido . "<tr>";
                for($k = 0; $k<$this->filas; $k++){
                    $this->contenido = $this->contenido . "<td>";

                    if($fila === $contadorFilas && $columna === $contadorColumnas){
                        $this->contenido = $this->contenido . "<span style='background-color:$colorFondo; color:$colorTexto;'>$valorCelda</span>";
                    }

                    $this->contenido = $this->contenido . "</td>";
                    $contadorFilas++;
                }
                $contadorFilas = 1;
                $contadorColumnas++;
                $this->contenido = $this->contenido . "</tr>";
            }
            $this->contenido = $this->contenido . "</table>";
        } else {
            echo "La celda no existe, está en una posición incorrecta.";
        }
    }

    public function  mostrar(){
        echo $this->contenido;
    }

}

$tabla = new Tabla(4,4,1);
$tabla->insertar("Laura",2,2,"white","black");
$tabla->mostrar();