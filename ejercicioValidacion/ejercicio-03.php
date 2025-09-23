<?php
//Escribe una script que devuelva un mensaje en caso de que el usuario escriba letras en el campo de entrada de teléfono o en el de código postal.
//Modifica la anterior para que devuelva un mensaje en caso de que el usuario escriba más de 9 números en el teléfono.
//Modifica la anterior para que devuelva un mensaje en caso de que el usuario no escriba exactamente 5 números en el código postal.

$respuesta = "";
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['numeroTelefonico'], $_POST['codigoPostal'])) {
    $numeroTelefonico = $_POST['numeroTelefonico'];
    $codigoPostal = $_POST['codigoPostal'];
    $pattern = '/^[0-9]+$/i';

    if (preg_match($pattern,$numeroTelefonico) && preg_match($pattern,$codigoPostal)) {
        $listaNumeros = str_split(str_replace(" ", "", $numeroTelefonico));
        if (count($listaNumeros) > 8) {
            $respuesta = "El numero telefonico supera los 8 digitos!!!!!";
        }
        else{
            $respuesta ="Los datos ingresado cumplen las condiciones de 0 a 9 y '+' '-'";
        }
    }
    else {
        $respuesta = "No pueden ingresar valores diferentes de 0 a 9 y '+' '-'";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Ingrese su numero de telefono: </label>
        <input type="text" name="numeroTelefonico" id="">
        <br>
        <label for="">Ingrese su codigo postal: </label>
        <input type="text" name="codigoPostal" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <hr>
    <h1>Respuesta: <?= $respuesta?></h1>
</body>
</html>