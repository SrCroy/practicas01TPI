<?php

use app\controllers\HomeController;
use lib\Route;

Route::get("/", [HomeController::class, "index"]);

Route::dispatch();

?>