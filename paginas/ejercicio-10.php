<?php
$deposito = 1200;
$interesAnual = 0.13;
$meses = 18;

$interesMensual = $interesAnual / 12;
$monto = $deposito * pow(1 + $interesMensual, $meses);

echo "Monto final: $" . round($monto, 2);
?>