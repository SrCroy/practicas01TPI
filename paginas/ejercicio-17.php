<?php
$factorial = 1;
$sumatoria = 0;
for ($i=7; $i <= 57; $i++) { 
    if ($i % 7 == 0) {
        $sumatoria += $i;
    }
}

echo "Sumatoria del 7 al 57: ". $sumatoria ."<br>";

if ($sumatoria % 2 == 0) {
    echo "Factorial par: ";
    for ($i=1; $i <= $sumatoria; $i++) { 
        $factorial *= $i;
    }

    echo $factorial;
}
else {
    echo "Factorial impar: ";
    for ($i=1; $i <= $sumatoria; $i++) { 
        $factorial *= $i;
    }
    echo $factorial;
}
?>