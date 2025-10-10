<?php


namespace app\controllers;
use app\models\PersonaModel;
use lib\controller;
use Persona;
class HomeController extends controller{

    public function index(){
        $persona = new PersonaModel();
        $data = $persona->getPersona();

        return $this->view('HomeView',[
            'title'=>'Home',
            'dataPersona' => $data]);
    }

    public function mostrarFormulario(){
        return $this->view("formularioView");
    }

    public function enviarPersona(){
        if ($_POST) {
            $persona = new PersonaModel();
            if ($persona->guardarPersona($_POST)) {
                header("Location: home");
                exit; // 🔥 ¡Clave para que la redirección funcione!
            } else {
                echo "Error al guardar la persona.";
            }
        }
    }
    
    public function buscarId($id){
        $persona = new PersonaModel();
        $datos = $persona->getIdPersona($id);
        
        $datosLimpios = [];
        foreach($datos as $fila) {
            $datosLimpios[] = [
                'idPersona' => $fila['idPersona'],
                'nombrePersona' => $fila['nombrePersona'], 
                'apellidoPersona' => $fila['apellidoPersona'],
                'edadPersona' => $fila['edadPersona']
            ];
        }
        
        return json_encode($datosLimpios);
    }

}

?>
