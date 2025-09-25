<?php
session_start();
require_once __DIR__.'/index.php/';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($_SESSION['productos'])):?>
            <?php foreach($_SESSION['productos'] as $key => $values):?>
                <tr>
                    <td><?= $values->getNombreProducto()?></td>
                    <td><?= $values->getPrecioProducto()?></td>
                    <td><?= $values->getStockProducto()?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="eliminar" value="<?= $key?>">
                            <input type="submit" value="ELIMINAR">
                        </form>
                    </td>
                </tr>
            <?php endforeach;?>
            <?else: ?>
            <tr>
                <td>No hay datos!!!!!!!</td>
            </tr>
            <?php endif;?>
        </tbody>
    </table>
</body>
</html>