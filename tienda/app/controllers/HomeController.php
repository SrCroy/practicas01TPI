<?php
namespace app\controllers;
use lib\CargarVista;
class HomeController extends CargarVista{
    public function index(){
        return $this->views("HomeView");
    }
}
?>