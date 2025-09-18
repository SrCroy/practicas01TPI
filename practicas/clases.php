<?php
use personas; //se deb de usar / en la clase+
require_once("Personas.php");
class Alumno extends Persona{
    private $DUE;
    private $carreraAlumo;
    public $materia = [];
    public function __construct($nombre, $apellido, $edad, $DUE, $carreraAlumo){
        parent::__construct($nombre, $apellido, $edad);
        $this -> DUE = $DUE;
        $this -> carreraAlumo = $carreraAlumo;
    }

    //funciones get
    public function getDUEAlumno(){
        return $this -> DUE;
    }

    public function getCarreraAlumno(){
        return $this -> carreraAlumo;
    }

    //funcion set
    public function setDUEAlumno($values){
        $this -> DUE = $values;
    }

    public function setCarreraAlumno($values){
        $this -> carreraAlumo = $values;
    }

    public function mostrarInformacionAlumno(){
        parent::mostarInformacionPersona();
        echo "<br>DUE: $this->DUE<br>Carrera: $this->carreraAlumo";
    }

}

$persona = new Persona("Cristian", "Rubio", 24);

$persona -> mostarInformacionPersona(); 

echo $persona -> getNombrePersona();

echo Persona::calcularEdad($persona->getEdadPersona());

$alumno = new Alumno("Geovanny", "Rubio", 25, "RG22016", "Ing Sistema");

$alumno -> mostrarInformacionAlumno();
?>