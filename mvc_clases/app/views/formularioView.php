<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Persona</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <h2 class="text-center mb-4">Registro de Persona</h2>
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form action="enviar" method="post">
                <div class="mb-3">
                    <label for="nombrePersona" class="form-label">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="nombrePersona" placeholder="Ingrese el nombre">
                </div>

                <div class="mb-3">
                    <label for="apellidoPersona" class="form-label">Apellido</label>
                    <input name="apellido" type="text" class="form-control" id="apellidoPersona" placeholder="Ingrese el apellido">
                </div>

                <div class="mb-3">
                    <label for="edadPersona" class="form-label">Edad</label>
                    <input name="edad" type="number" class="form-control" id="edadPersona" placeholder="Ingrese la edad">
                </div>

                <button type="submit" class="btn btn-primary w-100">Guardar</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
