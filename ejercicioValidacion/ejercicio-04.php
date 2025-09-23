<?php
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['nombre'], $_POST['precio'])) {
    $arregloEnviado = [
        'nombre' => $_POST['nombre'], 
        'precio' => floatval($_POST['precio'])
    ];

    $_SESSION['carrito'][] = $arregloEnviado;

    header("location: carrito.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregando carrito</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Ingrese el nombre: </label>
        <input type="text" name="nombre" id="">
        <br>
        <label for="">Precio: $</label>
        <input type="text" name="precio" id="">
        <br>
        <input type="submit" value="ENVIAR">
        <br>
    </form>
    <hr>

    <p><a href="carrito.php">Ir a carrito</a></p>
</body>
</html>