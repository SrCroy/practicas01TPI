<?php
$radio = 3;
$altura = 17.45;
$porcentaje = 0.37;
$volumenTotal = M_PI * ($radio)**2 * $altura;
$volumenReal = $volumenTotal * $porcentaje;

echo "Volumen de agua: ". round($volumenReal, 2);
?>