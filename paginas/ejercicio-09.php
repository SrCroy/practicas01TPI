<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Calcular la factorial de cualquier número con el ciclo do while.</h1>
    <hr>
    <form action="" method="POST">
        <label for="">Ingrese el numero: </label>
        <input type="text" name="numero" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <hr>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['numero'])) {
            $numero = $_POST['numero'];
            $iterador = 1;
            $respuesta = 1;
            do {
                $respuesta = $respuesta * $iterador;
                if ($iterador < $numero) {
                    echo $iterador. " x ";
                }
                else{
                    echo $iterador;
                }
                $iterador ++;
            } while ($iterador <= $numero);
            echo "<hr>Respuesta final: ". $respuesta;
        }
    ?>
</body>
</html>