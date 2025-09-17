<?php
$respuesta = '';

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['volumen'], $_POST['radio'])) {
    $volumen = floatval($_POST['volumen']);
    $radio = floatval($_POST['radio']);

    $altura = $volumen / (3.1416 * ($radio - 0.025)**2);

    $respuesta = "La altura es de: " . round($altura, 2) . " m";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h2>Conociendo el volumen de una piscina circular y conociendo el radio de la
    base sacar la altura de la piscina, sabiendo que el grosor de la piscina es de
    2.5 centímetros.</h2>
    <hr>
    <form action="" method="POST">
        <label for="">Volumen de la piscina: </label>
        <input type="text" name="volumen" id="">
        <br>
        <label for="">Radio de la piscina: </label>
        <input type="text" name="radio" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <hr>
    <h2>Respuesta: <?= $respuesta?></h2>
</body>
</html>