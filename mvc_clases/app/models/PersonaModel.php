<?php
namespace app\models;

use lib\database;
class PersonaModel extends database{
    public function getPersona(){
        $conexion = $this->getConnection();
        $sql = $conexion->query("SELECT * FROM tbl_persona");
        return $sql->fetchAll();
    }

    public function guardarPersona($data){
        $conexion = $this->getConnection();
        $stmt = $conexion->prepare("INSERT INTO tbl_persona(nombrePersona, apellidoPersona, edadPersona) VALUES(?,?,?)");
        $stmt ->bindParam(1,$data['nombre']);
        $stmt ->bindParam(2,$data['apellido']);
        $stmt ->bindParam(3,$data['edad']);

        if ($stmt->execute()) {
            return true;
        }else {
            return false;
        }
    }

    public function getIdPersona($idPersona){
        $conexion = $this->getConnection();
        $sql = $conexion->prepare("SELECT * FROM tbl_persona WHERE idPersona=?");
        $sql->execute([$idPersona]);
        return $sql->fetchAll();
    }
}
?>