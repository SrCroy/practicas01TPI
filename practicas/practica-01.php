<?php
function mensaje(){
    echo "hola mundo <br>";
}
function retonarNombre($values):string{
    return "Hola como estas". $values;
}

mensaje();
echo retonarNombre("Cristian");

function dobleNumero($numero = null){
    if ($numero == null) {
        return -1;
    }
    echo $numero * 2;
}

echo dobleNumero(4) == -1 ? "El parametro es nulo": dobleNumero(4);
?>