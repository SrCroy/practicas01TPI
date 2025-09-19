<?
//Sacar la suma de la sucesión (1/2)-(2/3)+(3/4)-(4/5).
$s = 0;
for ($i=1; $i < 6; $i++) { 
    $s += pow(-1,$i+1)*($i/($i+1));
    echo $s."<br>";
}
echo "Respuesta: $s";
?>