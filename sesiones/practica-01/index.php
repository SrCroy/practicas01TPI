<?php
session_start();
$respuesta = "";
if (!isset($_SESSION['tareas'])) {
    $_SESSION['tareas'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['nombre'], $_POST['prioridad'])) {
    $arregloDatos = ['nombre' => $_POST['nombre'], 'prioridad' => $_POST['prioridad'], 'estado' => 'pendiente'];
    $_SESSION['tareas'][] = $arregloDatos;
    $respuesta = "Los dados han sido mandados correctamente!!!!";
    header('Location: tareas.php');
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form method = "POST">
                <fieldset>
                    <legend>Agregue su tarea</legend>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Nombre de la tarea</label>
                        <input type="text" id="disabledTextInput" class="form-control" name = "nombre">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Prioridad de la tarea</label>
                        <select id="disabledSelect" class="form-select" name="prioridad">
                            <option>Alta</option>
                            <option>Media</option>
                            <option>Baja</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar los datos</button>
                </fieldset>
            </form>
            <hr>
            <h1><?=$respuesta?></h1>
        </div>
    </body>
</html>