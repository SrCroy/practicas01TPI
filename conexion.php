<?php


class Database
{
    private $host = "db";
    private $db_name = "db_ejemplo";
    private $username = "root";
    private $password = "rootpass";
    public $conn;



    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "conectado";
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}


$dataBase = new Database();

$com_temp = $dataBase->getConnection();
/* 
$stmt = $com_temp->prepare("INSERT INTO `tbl_persona`(`nombre`, `direccion`, `edad`) VALUES (?,?,?);");

$nombre = "pe";
$direccion = "SM";
$edad = 30;

$stmt-> bindParam(1, $nombre);
$stmt-> bindParam(2, $direccion);
$stmt-> bindParam(3, $edad);

$stmt-> execute(); */

/* $stmt = $com_temp->prepare("INSERT INTO `tbl_persona`(nombre,direccion, edad) VALUES (:nombre, :direccion, :edad);");
$nombre = "pe";
$direccion = "SM";
$edad = 30;
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':direccion', $direccion);
$stmt->bindParam(':edad', $edad);
// Excecute
$stmt->execute();
 */
/* 
$stmt = $com_temp->prepare("INSERT INTO `tbl_persona`(nombre,direccion, edad) VALUES (:nombre, :direccion, :edad);");
$nombre = "pe";
$direccion = "SM";
$edad = 30;
// Excecute
$stmt->execute(array(":nombre"=>$nombre,":direccion"=>$direccion, ":edad" => $edad ) );
 *//* 
$stmt = $com_temp->prepare("INSERT INTO `tbl_persona`(nombre,direccion, edad) VALUES (:nombre, :direccion, :edad);");

class Persona
{
    public $nombre;
    public $direccion;
    public $edad;

    public function __construct($nombre = "pe",$direccion = "SM", $edad = 30){
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->edad = $edad;
        
    }
}

$Persona_obj = new Persona();
if ($stmt ->execute((array)$Persona_obj)) {
    echo "insert";
} */

/* 
$stmt = $com_temp->prepare("SELECT * FROM `tbl_persona`;");
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();


while ($row = $stmt->fetch()) {
    echo $row['nombre'] . "<br>";
} */


$stmt = $com_temp->query("SELECT * FROM `tbl_persona`;");
$data = $stmt->fetchAll();

foreach ($data as  $value) {
    echo json_encode($value ). "<br>";
}
