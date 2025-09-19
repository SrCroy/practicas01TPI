<?php
use lib\Route;

Route::get("/", function(){
    echo "Ruta Raiz";
});

Route::get("/inicio", function(){
    echo "Inicio";
});

Route::dispath();
?>