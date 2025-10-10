<?php
namespace lib;
use PDO;
use PDOException;

class Database {
    private $host = "db"; // 👈 nombre del servicio en docker-compose
    private $db_name = "appdb"; // 👈 usa el nombre real de tu base de datos
    private $username = "appuser";
    private $password = "apppass";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name}",
                $this->username,
                $this->password
            );
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Conectado correctamente";
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
