<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="css/diseno.css">
    </head>
    <body>
        <?php
        //si la sesión no está iniciada, la inicio.
            if(session_status() === 1){
                session_start();
            }

            //si la no existe el array alumno1 inicio el contador
            if(!isset($_SESSION['alumno1'])){
                $contadorAlumnos = 1;
            }

        ?>
        <h1>Guardar Alumnos</h1>
        <div id="contenedor">
            <div class="row">
                <div class="col">
                    <form name="datos" method="post" action="php1.php">
                        <label for="nombre">Nombre: </label>
                            <input type="text" name="nombre" id="datos" required="required"><br/>
                        <label for="apellido">Apellidos:</label>
                            <input type="text" name="apellido" id="datos"required="required"> <br/>
                        <label for="tlfn">Telefono:</label>
                            <input type="tel" name="tlfn" id="datos"required="required"><br/>
                        <label for="email">Correo:</label>
                            <input type="email" name="email" id="datos"required="required"> <br/>
                        <label for="curso" id="curso">Curso:</label>
                            <select name="curso" id="curso" required="required">
                                <option name="primero">1º</option>
                                <option name="segundo">2º</option>
                            </select>
                        <br/>
                        <input type="submit" value="Guardar" id="guardar">
                        <?php
                        echo "<input type='hidden' name='contadorAlumnos' value=".$contadorAlumnos.">";
                        ?>
                    </form>
                </div>
                <div class="col">
                    <form name="datos" method="post" action="php1.php">
                        <select id="select" multiple="multiple" onchange="submit()" name="alumnos">
                            <?php
                            echo $contadorAlumnos;
                                for($i=1; $i<$contadorAlumnos; $i++){
                                    echo "<option value=".$i.">".$_SESSION['alumno'.$i]['nombre']."</option>";
                                }
                            ?>
                        </select>
                        <?php echo "<input type='hidden' name='contadorAlumnos' value=".$contadorAlumnos.">"; ?>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="colAbajo">
                    <textarea readonly="readonly"><?php
                        if(isset($_SESSION['seleccionado'])){
                            foreach ($_SESSION['alumno'.$_SESSION['seleccionado']] as $valor){
                                echo $valor."\n";
                            }
                        }?>
                    </textarea>
                </div>
            </div>
        </div>
    </body>
</html>