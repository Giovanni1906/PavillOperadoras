<div class="modal fade" id="enviarPedidoModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Hacemos el modal más grande -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Atender Clientes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="clientForm">
                    <!-- Input Cliente y celular-->
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="clientName" class="form-label">Cliente</label>
                            <input type="text" class="form-control" id="clientName" required>
                        </div>
                        <div class="col-6">
                            <label for="clientPhone" class="form-label">Celular</label>
                            <input type="text" class="form-control" id="clientPhone" required>
                        </div>
                    </div>

                    <!-- Input Dirección, Sección y eliminar -->
                    <div class="row align-items-end mb-3 ">
                        <div class="col-7 col-lg-8">
                            <label for="clientAddress" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="clientAddress" required>
                        </div>
                        <div class="col-3">
                            <label for="clientSection" class="form-label">Sección</label>
                            <input type="text" class="form-control" id="clientSection" required>
                        </div>
                        <div class="col-2 col-lg-1">
                            <button type="button" class="btn btn-danger w-100" onclick="setAddress('', '')"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                    </div>

                    <!-- Filas con direcciones, sectores y botón -->
                    <div class="address-list">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <div class="row mb-2">
                                <div class="col-1">
                                    <h3><?=$i?></h3>
                                </div>
                                <div class="col-6 col-lg-7">
                                    <input type="text" class="form-control" value="Dirección <?= $i ?>" disabled readonly>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control" value="Sector <?= $i ?>" disabled readonly>
                                </div>
                                <div class="col-2 col-lg-1">
                                    <button type="button" class="btn btn-success w-100" onclick="setAddress('Dirección <?= $i ?>', 'Sector <?= $i ?>')"><i class="bi bi-send"></i>
                                    </button>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>

                    <!-- Botones de acción -->
                    <div class="modal-footer row justify-content-between">
                        <button type="button" class="btn btn-primary col" onclick="sendAction('Atender Pedido')" data-bs-dismiss="modal">Atender Pedido</button>
                        <button type="button" class="btn btn-danger col" onclick="sendAction('Anular Pedido')" data-bs-dismiss="modal">Anular Pedido</button>
                        <button type="button" class="btn btn-secondary col" data-bs-dismiss="modal">Cerrar Ventana</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
