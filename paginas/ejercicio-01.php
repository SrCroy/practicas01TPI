<?php
    $base = 4;
    $alturaTriangulo = 7;
    $alturaPrisma = 7;
    $volumen = (($base * $alturaTriangulo)/2) * $alturaPrisma;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Sacar el volumen de un prisma triangular con 
        unas de sus caras rectangulares con medidas de 
        4 de ancho y 7 de largo.</h1>
    <hr>
    <h3>Respuesta: <?= $volumen?></h3>
</body>
</html>