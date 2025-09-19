<?php
// Sacar la suma de la tabla del 7 y dividirla entre el factorial del 7. Con el ciclo for.
$tabla7 = 0;
$factorail = 1;
for ($i=1; $i <= 10; $i++) {
    $tabla7 += 7 * $i;
    echo $tabla7 ."<br>";
}
for ($i=1; $i <= 7; $i++) { 
    $factorail *= $i;
    echo $factorail ."<br>";
}
echo "Respuesta: ". $tabla7/$factorail;
?>