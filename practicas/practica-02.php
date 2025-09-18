<?php
$nombre = "Cristian";
function saludar(&$nombre){
    $nombre = "Pedro";
}

saludar($nombre);

echo $nombre;


?>