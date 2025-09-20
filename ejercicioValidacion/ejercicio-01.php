<?php
$respuesta = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nombre = $_POST['nombre'] ?? "";
    $apellido = $_POST['apellido'] ?? "";
    $cuidad = $_POST['cuidad'] ?? "";
    $pattern = '/[0-9]/';

    if (preg_match($pattern,$nombre) || preg_match($pattern,$apellido) || preg_match($pattern,$cuidad)) {
        $respuesta = "Se detectaron numeros en los datos solo puede escribir letras!!!!!!!<br>";
    }
    else {
        $respuesta = "Datos correctos!!!!<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Ingrese el nombre: </label>
        <input type="text" name="nombre" id="">
        <br>
        <label for="">Ingrese apellidos: </label>
        <input type="text" name="apellidos" id="">
        <br>
        <label for="">Ingrese la cuidad: </label>
        <input type="text" name="cuidad" id="">
        <br>
        <input type="submit" value="Enviar datos">
    </form>
    <hr>
    <h1>Respuesta <?= $respuesta?></h1>
</body>
</html>