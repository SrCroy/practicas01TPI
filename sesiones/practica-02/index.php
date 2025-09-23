<?php
session_start();

if (!isset($_SESSION['colores'])) {
    $_SESSION['colores'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['nombre'])) {
    $arregloDatos = ['nombre' => $_POST['nombre']];
    $_SESSION['colores'][] = $arregloDatos;
}

if (isset($_POST['eliminar'])) {
    $key = $_POST['eliminar'];
    unset($_SESSION['colores'][$key]);
    $_SESSION['colores'] = array_values($_SESSION['colores']);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Colores</title>
</head>
<body>
    <div class="container">
        <form method = "post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ingrese el color</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        <hr>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre de los colores</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($_SESSION['colores'])): ?>
                    <?php foreach($_SESSION['colores'] as $key => $values):?>
                    <tr> 
                        <td><?= $values['nombre']?></td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="eliminar" value="<?= $key?>">
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <?endforeach;?>
                <?php else:?>
                <tr>
                    <td>No hay datos ingresados!!!!!</td>
                </tr>   
                <?php endif;?>
            </tbody>
        </table>
    </div>
</body>
</html>