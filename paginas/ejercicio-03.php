<?php
$_catetoAbyacente = 0;
$catetoOpuesto = 0;
$hipotenusa = 0;
$respuesta = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['catetoAbyacente'], $_POST['catetoOpuesto']) && empty($_POST['hipotenusa'])) {
        $_catetoAbyacente = floatval($_POST['catetoAbyacente']);
        $catetoOpuesto = floatval($_POST['catetoOpuesto']);
        $hipotenusa = sqrt($_catetoAbyacente**2 + $catetoOpuesto**2);
        $respuesta = "La hipotenusa tiene un valor de: " . $hipotenusa;
    }

    elseif (isset($_POST['catetoAbyacente'], $_POST['hipotenusa']) && empty($_POST['catetoOpuesto'])) {
        $_catetoAbyacente = floatval($_POST['catetoAbyacente']);
        $hipotenusa = floatval($_POST['hipotenusa']);
        if ($hipotenusa > $_catetoAbyacente) {
            $catetoOpuesto = sqrt($hipotenusa**2 - $_catetoAbyacente**2);
            $respuesta = "El cateto opuesto tiene un valor de: " . $catetoOpuesto;
        } else {
            $respuesta = "La hipotenusa debe ser mayor que el cateto adyacente";
        }
    }

    elseif (isset($_POST['catetoOpuesto'], $_POST['hipotenusa']) && empty($_POST['catetoAbyacente'])) {
        $catetoOpuesto = floatval($_POST['catetoOpuesto']);
        $hipotenusa = floatval($_POST['hipotenusa']);
        if ($hipotenusa > $catetoOpuesto) {
            $_catetoAbyacente = sqrt($hipotenusa**2 - $catetoOpuesto**2);
            $respuesta = "El cateto adyacente tiene un valor de: " . $_catetoAbyacente;
        } else {
            $respuesta = "La hipotenusa debe ser mayor que el cateto opuesto";
        }
    } else {
        $respuesta = "Por favor, ingrese exactamente dos lados para calcular el tercero.";
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
    <h1>Conociendo dos lados de un triángulo rectangular sacar el tercer lado.</h1>
    <hr>
    <form action="" method="POST">
        <label for="">Ingrese el cateto abyasente</label>
        <input type="text" name="catetoAbyacente" id="">
        <br>
        <label for="">Ingrese el cateto opuesto</label>
        <input type="text" name="catetoOpuesto" id="">
        <br>
        <label for="">Ingrese la hipotenusa</label>
        <input type="text" name="hipotenusa" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <hr>
    <h3>Respuesta: <?php echo $respuesta;?></h3>
</body>
</html>