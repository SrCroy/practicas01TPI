<?php
session_start();
$total = 0;
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carrito de compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="container mt-5">
    <h1>Carrito de compras</h1>
    <table class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Precio</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($_SESSION['carrito'])): ?>
            <?php foreach ($_SESSION['carrito'] as $producto): ?>
                <tr>
                    <td><?php echo $producto['nombre']; ?></td>
                    <td><?php echo "$". floatval($producto['precio']); ?></td>
                </tr>
                <?php $total += $producto['precio']; ?>
            <?php endforeach; ?>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong><?php echo "$". floatval($total); ?></strong></td>
            </tr>
        <?php else: ?>
            <tr><td colspan="2">El carrito está vacío</td></tr>
        <?php endif; ?>
      </tbody>
    </table>

    <a href="ejercicio-04.php" class="btn btn-primary">Volver</a>
    <a href="vaciar.php" class="btn btn-danger">Vaciar carrito</a>
  </body>
</html>
