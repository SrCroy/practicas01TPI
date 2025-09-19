<?php
//Sacar la suma de la serie ∑(2^n)/(n+1) desde n=1 hasta n=3.
$sumatoria = 0;
for ($i=1; $i <= 3; $i++) { 
    $sumatoria += pow(2,$i) / ($i + 1);
    echo $sumatoria ."<br>";
}
echo "Respuesta: ". round($sumatoria, 4);
?>