<?php
$volumenConoTruncado = "";

// Verificamos que el formulario se haya enviado y que los campos existan
if ($_SERVER["REQUEST_METHOD"] == "POST" &&
    isset($_POST['radioMayor'], $_POST['radioMenor'], $_POST['alturaCono'])) {

    // Convertimos los valores a float (0 si está vacío)
    $radioMayor = floatval($_POST['radioMayor']);
    $radioMenor = floatval($_POST['radioMenor']);
    $alturaCono = floatval($_POST['alturaCono']);

    // Calculamos solo si todos son mayores que 0
    if ($radioMayor && $radioMenor && $alturaCono) {
        $volumenConoTruncado = (1/3) * 3.1416 * $alturaCono * 
                               ($radioMayor**2 + $radioMayor*$radioMenor + $radioMenor**2);
    } else {
        $volumenConoTruncado = "Por favor, ingresa valores mayores que 0 en todos los campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>2. Sacar el volumen de un cono truncado con cualquier tipo de medidas.</h1>
    <form action="" method="POST">
        <label for="">Radio de la base mayor: </label>
        <input type="text" name="radioMayor" id="radioMayor">
        <br>
        <label for="">Radio de la base menor: </label>
        <input type="text" name="radioMenor" id="radioMenor">
        <br>
        <label for="">Altura del cono truncado: </label>
        <input type="text" name="alturaCono" id="alturaCono">
        <br>
        <input type="submit" value="ENVIAR">
    </form>
    <hr>
    <h3>Respuesta: <?= $volumenConoTruncado?></h3>
</body>
</html>
