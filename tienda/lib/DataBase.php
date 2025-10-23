<?php
namespace lib;
use PDO;
use PDOException;
class DataBase{
    private $host = "db";
    private $db_name = "appdb";
    private $username = "appuser";
    private $password = "apppass";
    public $conn;

    public function getConnection(){
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}",
            $this->username,
            $this->password);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
?>