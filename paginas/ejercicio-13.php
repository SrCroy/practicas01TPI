<?php
//Sacar los ángulos de un triángulo rectángulo conociendo 2 de sus lados.
$catetoAbyacente = 0;
$catetoOpuesto = 0;
$hipotenusa = 0;
$respuesta = "";
$grado = 0;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['catetoAdyacente'], $_POST['hipotenusa'])) {
        
        $catetoAbyacente = $_POST['catetoAdyacente'];
        $hipotenusa = $_POST['hipotenusa'];

        $grado = rad2deg(acos($catetoOpuesto/$hipotenusa));
        $respuesta = "El grado entre el cateto adyacente y la hipotenusa es de: ". $grado;
    }
    elseif (isset($_POST['catetoOpuesto'], $_POST['hipotenusa'])) {

        $catetoOpuesto = $_POST['catetoOpuesto'];
        $hipotenusa = $_POST['hipotenusa'];

        $grado = rad2deg(asin($catetoOpuesto/$hipotenusa));
        $respuesta = "El grado entre el cateto opuesto y la hipotenusa es de: ". $grado;
    }
    elseif (isset($_POST['catetoOpuesto'], $_POST['catetoAdyacente'])) {

        $catetoOpuesto = $_POST['catetoOpuesto'];
        $catetoAbyacente = $_POST['catetoAdyacente'];

        $grado = rad2deg(atan($catetoOpuesto/$catetoAbyacente));
        $respuesta = "El grado entre el cateto opuesto y el cateto abyacente es de: ". $grado;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <h1>Sacar los ángulos de un triángulo rectángulo conociendo 2 de sus lados.</h1>
    <hr>
    <form action="" method="POST">
        <label for="">Ingrese el cateto adyacente: </label>
        <input type="text" name="catetoAdyacente" id="">
        <br>
        <label for="">Ingrese el cateto opuesto: </label>
        <input type="text" name="catetoOpuesto" id="">
        <br>
        <label for="">Ingrese la hipotenusa</label>
        <input type="text" name="hipotenusa" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <hr>
    <h2>Respuesta: <?= $respuesta?></h2>
</body>
</html>