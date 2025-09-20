<?php
//Multiplicar la suma de los números pares del 1 al 25 por la suma de los
//números impares del 3 al 18.
$sumaPares = 0;
$sumaImpares = 0;
for ($i=0; $i < 26; $i++) { 
    if ($i % 2 == 0) {
        $sumaPares += $i;
    }
    elseif ($i >= 3 && $i <= 18 ) {
        $sumaImpares += $i;
    }

}

echo "Suma de numeros pares de 1 al 25: ". $sumaPares ."<br>";
echo "Suma de numeros impares del 3 al 18: ". $sumaImpares ."<br>";
echo "Resultado final: ". $sumaImpares * $sumaPares;
?>