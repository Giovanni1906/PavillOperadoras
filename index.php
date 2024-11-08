<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atender Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="assets/css/styles.css" rel="stylesheet">
    <!-- iconos boostrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <!-- Botón que abre el modal -->
        <button type="button" class="btn btn-pvPrimary" data-bs-toggle="modal" data-bs-target="#enviarPedidoModal">
            Atender Clientes
        </button>


        <div class="btn-group">
            <button type="button" class="btn btn-pvPrimary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                pedidos
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pedidos.php?pc=todosPC">Todos</a></li>
                <li><a class="dropdown-item" href="pedidos.php?pc=pc1">PC1</a></li>
                <li><a class="dropdown-item" href="pedidos.php?pc=pc2">PC2</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="pedidos.php?pc=todosSectores">Todos</a></li>
                <li><a class="dropdown-item" href="pedidos.php?pc=centro">Centro</a></li>
            </ul>
        </div>


        <!-- <a href="pedidos.php" class="btn btn-primary">Ir a Pedidos</a> -->
        <!-- Incluir el archivo del modal -->
        <?php include 'components/enviarPedidoModal.php'; ?>

        <!-- Mini modal para notificaciones -->
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="actionToast" class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body" id="toastMessage">
                        Acción realizada.
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
<script src="/assets/js/scripts.js"></script>
</body>

</html>