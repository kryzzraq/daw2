<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio26</title>
    <style>
        table, tr, td, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form action="e.php" method="post">
    Nombre: <input type="text" name="nombre">
    Apellidos: <input type="text" name="apellidos">
    Edad: <input type="number" name="edad">
    <input type="submit" name="submit">
</form>
<?php
if (isset($_POST['submit'])) {
    echo "<br><table>";
    echo "<tr><th>Nombre</th><th>Valor</th></tr>";
    foreach ($_POST as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";

}
?>
</body>
</html>