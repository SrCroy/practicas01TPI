<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Sacar la suma de la serie ∑(1+(n∗√n)^{(1/3)}) des de n=2 hasta n=5.</h1>
    <?php
        $iteracion = 1;
        $sumatoria = 0;
        for ($i=2; $i <= 5; $i++) { 
            $sumatoria = $sumatoria + (1 + ($i*sqrt($i))**(1/3));
            echo "Iteracion: => ". $iteracion ." Sumatoria: ". round($sumatoria,4) ."<br>";
            $iteracion ++;
        }
        echo "<hr>";
        echo "Resultado final: ". round($sumatoria,4);
    ?>
</body>
</html>