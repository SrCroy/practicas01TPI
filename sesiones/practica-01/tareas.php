<?php
session_start();

// Cambiar el estado de la tarea
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['key'], $_POST['nuevo_estado'])) {
    $key = $_POST['key'];
    $nuevo_estado = $_POST['nuevo_estado'];
    
    if (isset($_SESSION['tareas'][$key])) {
        $_SESSION['tareas'][$key]['estado'] = $nuevo_estado;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Tareas</h1>

        <?php if (!empty($_SESSION['tareas'])): ?>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Prioridad</th>
                        <th>Estado</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['tareas'] as $key => $tarea): ?>
                        <tr>
                            <td><?= htmlspecialchars($tarea['nombre']) ?></td>
                            <td><?= htmlspecialchars($tarea['prioridad']) ?></td>
                            <td><?= htmlspecialchars($tarea['estado']) ?></td>
                            <td>
                                <!-- Botón para cambiar estado -->
                                <form method="post" style="display:inline;">
                                    <input type="hidden" name="key" value="<?= $key ?>">
                                    <input type="hidden" name="nuevo_estado" value="<?= $tarea['estado'] == 'pendiente' ? 'completada' : 'pendiente' ?>">
                                    <button type="submit" class="btn btn-sm btn-success">
                                        <?= $tarea['estado'] == 'pendiente' ? 'Marcar completada' : 'Marcar pendiente' ?>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="alert alert-info">No hay tareas asignadas.</div>
        <?php endif; ?>

        <a href="index.php" class="btn btn-primary mt-3">Agregar Tareas</a>
        <a href="vaciar.php" class="btn btn-danger mt-3">Vaciar todas las tareas</a>
    </div>
</body>
</html>
