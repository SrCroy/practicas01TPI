<?php
session_start();

if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [];
}
class Producto {
    private $nombreProducto;
    private $precioProducto;
    private $stockProducto;

    public function __construct($nombreProducto, $precioProducto, $stockProducto) {
        $this->nombreProducto = $nombreProducto;
        $this->precioProducto = $precioProducto;
        $this->stockProducto = $stockProducto;
    }

    //Metodo get
    public function getNombreProducto(){
        return $this->nombreProducto;
    }
    public function getPrecioProducto(){
        return $this->precioProducto;
    }

    public function getStockProducto(){
        return $this->stockProducto;
    }

    //metodo set
    public function setNombreProducto($values){
        $this->nombreProducto = $values;
    }

    public function setPrecioProducto($values){
        $this->precioProducto = $values;
    }

    public function setStockProducto($values){
        $this->stockProducto = $values;
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['nombre'], $_POST['precio'], $_POST['stock'])) {
    $nuevo = new Producto($_POST['nombre'], $_POST['precio'], $_POST['stock']);
    $_SESSION['productos'][] = $nuevo;
    header('Location: tabla.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<body>
    <hr>
    <form action="" method="post">
        <label for="">Ingrese el nombre</label>
        <input type="text" name="nombre" id="">
        <br>
        <label for="">Ingrese el precio</label>
        <input type="text" name="precio">
        <br>
        <label for="">Ingrese el stock</label>
        <input type="text" name="stock" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <hr>
</body>
</html>