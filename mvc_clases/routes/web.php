<?php

use lib\Route;
use app\controllers\HomeController;

Route::get("/", function(){
    echo "RUTA RAIZ";
});

Route::get("/inicio/:flag", function($flag){
    return  array('nombre'=>"javier");
});

Route::get("/home", [HomeController::class,"index"]);
Route::get("/formulario", [HomeController::class, "mostrarFormulario"]);
Route::post("/enviar", [HomeController::class, "enviarPersona"]);
Route::get("/id/:id", [HomeController::class, "buscarId"]);
Route::dispatch();

?>
