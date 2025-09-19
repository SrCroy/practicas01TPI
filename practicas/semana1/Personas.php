<?php 
class Persona{
    private $nombrePersona;
    private $apellidoPersona;
    private $edadPersona;

    public function __construct($nombre,$apellido, $edad){
        $this -> nombrePersona = $nombre;
        $this -> apellidoPersona = $apellido;
        $this -> edadPersona = $edad;
    }

    //Funciones get
    public function getNombrePersona(){
        return $this -> nombrePersona;
    }

    public function getApellidoPersona(){
        return $this -> apellidoPersona;
    }

    public function getEdadPersona(){
        return $this -> edadPersona;
    }

    //funciones set
    public function setNombrePersona($values){
        $this -> nombrePersona = $values;
    }

    public function setApellidoPersona($values){
        $this -> apellidoPersona = $values;
    }

    public function setEdadPersona($values){
        $this -> edadPersona = $values;
    }

    public function mostarInformacionPersona(){
        echo "Nombre: $this->nombrePersona<br>Apellido: $this->apellidoPersona<br>Edad: $this->edadPersona";
    }

    public static function calcularEdad($edad){
        return date("Y") - $edad;
    }
}