<?php
// Datos iniciales
$capital = 93504;
$porcentaje = 0.323;

$gananciasAnuales = $capital * $porcentaje;

$ganancia7Meses = $gananciasAnuales * (7/12);

$tiempo = 8 + (2/12) + (7/365);  
$ganancia8Anios = $gananciasAnuales * $tiempo;

echo "Ganancia a 7 meses: $" . round($ganancia7Meses, 2) . "<br>";
echo "Ganancia en 8 años, 2 meses y 7 días: $" . round($ganancia8Anios, 2) . "<br>";
?>
