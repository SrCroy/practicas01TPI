<?php
$respuesta = "";
$x = 0;
$y = 0;
$z = 0;
$r = 0;
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['x'], $_POST['y'], $_POST['z'])) {
    $x = floatval($_POST['x']);
    $y = floatval($_POST['y']);
    $z = floatval($_POST['z']);

    $r = sqrt($x**2 + $y**2 + $z**2);

    $respuesta =  "El vector R3 es de". round($r);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Ingrese x: </label>
        <input type="text" name="x" id="">
        <br>
        <label for="">Ingrese y: </label>
        <input type="text" name="y" id="">
        <br>
        <label for="">Ingrese z: </label>
        <input type="text" name="z" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <hr>
    <h1>Respuesta: <?= $respuesta?></h1>
</body>
</html>