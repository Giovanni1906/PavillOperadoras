<?php
$message = "";
$showInput = false;

// Verifica si se ha recibido una solicitud POST
if (isset($_GET['pc'])) {
    $pc = $_GET['pc'];

    switch ($pc) {
        case 'pc1':
            $message = "PC 1 : Libres / Celulares";
            break;
        case 'pc2':
            $message = "PC 2 : Libres / Celulares";
            break;
        case 'pc3':
            $message = "PC 3 : Libres / Celulares";
            break;
        case 'todosPC':
            $message = "Todos : Libres / Celulares";
            break;
        case 'centro':
            $message = "Centro : Aplicativos/Fijos";
            break;
        case 'norte':
            $message = "Norte : Aplicativos/Fijos";
            break;
        case 'sur':
            $message = "Sur : Aplicativos/Fijos";
            break;
        case 'todosSectores':
            $message = "Todos : Aplicativos/Fijos";
            break;
        default:
            $message = "General";
    }
} else {
    $message = "Método no permitido.";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pedidos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- iconos boostrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Archivo CSS personalizado -->
    <link rel="stylesheet" href="assets/css/pedidos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- fuente -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">



</head>

<body>

    <div class="">
        <div class="fondo">
            <div class="content pedidos-container" style="padding-top: 30px;">
                <div class="circle-corner"></div>
                <h3 class="title-pedido pb-3 text-start">Monitoreo - <?php echo $message; ?></h3>
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-2 ">
                        <h5 class="text-start subtitle-pedido fw-bold "> Pendientes </h5>
                    </div>

                    <div class="col-6 d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" id="btn1" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#enviarPedidoModal">
                            Compra (1)
                        </button>
                        <button type="button" id="btn2" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#enviarPedidoModal">
                            Carrera (2)
                        </button>
                        <button type="button" id="btn3" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#enviarPedidoModal">
                            Carrera simple (3)
                        </button>
                        <button type="button" id="btn4" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#enviarPedidoModal">
                            T. mujer (4)
                        </button>
                    </div>

                    <div class="col-4 d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" id="btn5" class="btn btn-pvPrimary btn-sm" data-bs-toggle="modal" data-bs-target="#enviarPedidoModal">
                            Leyenda (5)
                        </button>
                        <button type="button" id="btn6" class="btn btn-pvPrimary btn-sm" data-bs-toggle="modal" data-bs-target="#enviarPedidoModal">
                            Mapa (6)
                        </button>
                        <button type="button" id="btn7" class="btn btn-pvPrimary btn-sm " data-bs-toggle="modal" data-bs-target="#enviarPedidoModal">
                            Conductores (7)
                        </button>
                    </div>
                </div>

                <table id="tablaPedidosPendientes" class="tablaPedidos display" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>acciones</th>
                            <th>servicio</th>
                            <th>cliente</th>
                            <th>direccion</th>
                            <th>trans</th>
                            <th>registro</th>
                            <th>origen</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <h5 class="text-start subtitle-pedido fw-bold fs-6"> Atendidos </h5>
                <table id="tablaPedidosAtendidos" class="tablaPedidos display" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>acciones</th>
                            <th>servicio</th>
                            <th>cliente</th>
                            <th>direccion</th>
                            <th>precio</th>
                            <th>conductor</th>
                            <th>atencion</th>
                            <th>trans</th>
                            <th>anexo</th>
                            <th>registro</th>
                            <th>origen</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>


        </div>
    </div>

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

    <script>
        // Asignar eventos a los botones (sin acciones)
        document.getElementById('btn1').addEventListener('click', function() {
            // Aquí puedes agregar la acción que deseas que haga el botón 1
            console.log("Botón 1 presionado");
        });
        document.getElementById('btn2').addEventListener('click', function() {
            // Aquí puedes agregar la acción que deseas que haga el botón 2
            console.log("Botón 2 presionado");
        });
        document.getElementById('btn3').addEventListener('click', function() {
            // Aquí puedes agregar la acción que deseas que haga el botón 3
            console.log("Botón 3 presionado");
        });
        document.getElementById('btn4').addEventListener('click', function() {
            // Aquí puedes agregar la acción que deseas que haga el botón 3
            console.log("Botón 4 presionado");
        });
        document.getElementById('btn5').addEventListener('click', function() {
            // Aquí puedes agregar la acción que deseas que haga el botón 3
            console.log("Botón 5 presionado");
        });
        document.getElementById('btn6').addEventListener('click', function() {
            // Aquí puedes agregar la acción que deseas que haga el botón 3
            console.log("Botón 6 presionado");
        });
        document.getElementById('btn7').addEventListener('click', function() {
            // Aquí puedes agregar la acción que deseas que haga el botón 3
            console.log("Botón 7 presionado");
        });

        // Detectar atajos de teclado sin Ctrl
        document.addEventListener('keydown', function(event) {
            switch (event.key) {
                case '1':
                    document.getElementById('btn1').click(); // "Presiona" el botón 1
                    break;
                case '2':
                    document.getElementById('btn2').click(); // "Presiona" el botón 2
                    break;
                case '3':
                    document.getElementById('btn3').click(); // "Presiona" el botón 3
                    break;
                case '4':
                    document.getElementById('btn4').click(); // "Presiona" el botón 3
                    break;
                case '5':
                    document.getElementById('btn5').click(); // "Presiona" el botón 3
                    break;
                case '6':
                    document.getElementById('btn6').click(); // "Presiona" el botón 3
                    break;
                case '7':
                    document.getElementById('btn7').click(); // "Presiona" el botón 3
                    break;
                default:
                    break;
            }
        });
    </script>



    <!-- Bootstrap JS (necesario para funcionalidades como modales, etc) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <!-- Cargar jQuery y DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.js"></script>

    <!-- js propios -->
    <script src="./assets/js/tablaPedidos.js"></script>
    <script src="/assets/js/scripts.js"></script>


</body>

</html>