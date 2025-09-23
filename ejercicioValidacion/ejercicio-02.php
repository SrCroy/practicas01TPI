<?php
$respuesta = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nombre = $_POST['nombre'] ?? "";
    $apellido = $_POST['apellidos'] ?? "";
    $ciudad = $_POST['ciudad'] ?? "";

    // Expresión regular para validar enteros y decimales (positivos o negativos)
    $pattern = '/^-?\d+(\.\d+)?$/';

    if (preg_match($pattern, $nombre) && preg_match($pattern, $apellido) && preg_match($pattern, $ciudad)) {
        $respuesta = "Datos correctos todos son números válidos.<br>";
    } else {
        $respuesta = "Error solo se permiten números (enteros o decimales, positivos o negativos).<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Ingrese el nombre (número): </label>
        <input type="text" name="nombre">
        <br>
        <label for="">Ingrese apellidos (número): </label>
        <input type="text" name="apellidos">
        <br>
        <label for="">Ingrese la ciudad (número): </label>
        <input type="text" name="ciudad">
        <br>
        <input type="submit" value="Enviar datos">
    </form>
    <hr>
    <h1>Respuesta: <?= $respuesta ?></h1>
</body>
</html>
