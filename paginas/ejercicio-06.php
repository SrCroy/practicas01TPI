<?php
$respuesta = "";
$distancia = 0;
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['x1'], $_POST['y1'], $_POST['z1'], $_POST['x2'], $_POST['y2'], $_POST['z2'])) {
    $p1 = array(
        'x' => floatval($_POST['x1']),
        'y' => floatval($_POST['y1']),
        'z' => floatval($_POST['z1'])
    );
    $p2 = array(
        'x' => floatval($_POST['x2']),
        'y' => floatval($_POST['y2']),
        'z' => floatval($_POST['z2'])
    );

    foreach ($p1 as $coord => $valor) {
        $distancia += ($p2[$coord] - $valor) ** 2;
    }
    $distancia = sqrt($distancia);

    $respuesta = "La distancia es de: ". round($distancia, 2);

}
else{
    $respuesta = "llene los capos por favor";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Sacar la distancia de dos puntos en R3</h1>
    <hr>
    <form action="" method="POST">
        <label for="">Ingrese x1: </label>
        <input type="text" name="x1">
        <br>
        <label for="">Ingrese y2: </label>
        <input type="text" name="y1" id="">
        <br>
        <label for="">Ingrese z3: </label>
        <input type="text" name="z1" id="">
        <br>
        <label for="">Ingrese x1: </label>
        <input type="text" name="x2" id="">
        <br>
        <label for="">Ingrese y2: </label>
        <input type="text" name="y2">
        <br>
        <label for="">Ingrese z3: </label>
        <input type="text" name="z2" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <hr>
    <h2>Respuesta: <?= $respuesta?></h2>
</body>
</html>