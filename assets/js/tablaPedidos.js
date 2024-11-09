$(document).ready(function() {
    // Datos ficticios en formato JSON
    var datosFicticios = [
        {
            "#": 1,
            "acciones": "PED-5492927",
            "servicio": "Paquete",
            "cliente": "Juan Pérez",
            "direccion": "Calle Falsa 123, Ciudad",
            "precio": 100.00,
            "conductor": "Luis González",
            "atencion": "Normal",
            "trans": "Sí",
            "anexo": "Factura-001.pdf",
            "registro": "2024-09-01 12:30:45",
            "origen": "Sucursal A"
        },
        {
            "#": 2,
            "acciones": "PED-5492927",
            "servicio": "Paquete",
            "cliente": "María López",
            "direccion": "Avenida Siempre Viva 742, Ciudad",
            "precio": 150.50,
            "conductor": "Carlos Pérez",
            "atencion": "Rápido",
            "trans": "No",
            "anexo": "",
            "registro": "2024-11-06 18:19:45",
            "origen": "Sucursal B"
        },
        {
            "#": 3,
            "acciones": "PED-5492927",
            "servicio": "Sobre",
            "cliente": "Ana Torres",
            "direccion": "Calle Luna 45, Ciudad",
            "precio": 50.25,
            "conductor": "José Martínez",
            "atencion": "Normal",
            "trans": "Sí",
            "anexo": "Factura-002.pdf",
            "registro": "2024-09-01 12:30:45",
            "origen": "Sucursal C"
        },
        {
            "#": 4,
            "acciones": "PED-5492927",
            "servicio": "Paquete",
            "cliente": "Pedro Sánchez",
            "direccion": "Calle Real 18, Ciudad",
            "precio": 75.80,
            "conductor": "María Hernández",
            "atencion": "Normal",
            "trans": "No",
            "anexo": "",
            "registro": "2024-09-01 12:30:45",
            "origen": "Sucursal A"
        },
        {
            "#": 5,
            "acciones": "PED-5492927",
            "servicio": "Sobre",
            "cliente": "Jorge Díaz",
            "direccion": "Avenida del Sol 99, Ciudad",
            "precio": 30.00,
            "conductor": "Pedro Ramírez",
            "atencion": "Normal",
            "cc": "Rápido",
            "trans": "Sí",
            "anexo": "Factura-003.pdf",
            "registro": "2024-09-01 12:30:45",
            "origen": "Sucursal B"
        },
        {
            "#": 6,
            "acciones": "PED-5492927",
            "servicio": "Paquete",
            "cliente": "Laura García",
            "direccion": "Calle Verde 12, Ciudad",
            "precio": 120.00,
            "conductor": "Sofía López",
            "atencion": "Normal",
            "trans": "No",
            "anexo": "",
            "registro": "2024-09-01 12:30:45",
            "origen": "Sucursal C"
        },
        {
            "#": 7,
            "acciones": "PED-5492927",
            "servicio": "Paquete",
            "cliente": "Miguel Ramos",
            "direccion": "Calle Azul 89, Ciudad",
            "precio": 200.00,
            "conductor": "María Pérez",
            "atencion": "Rápido",
            "trans": "Sí",
            "anexo": "Factura-004.pdf",
            "registro": "2024-09-01 12:30:45",
            "origen": "Sucursal A"
        },
        {
            "#": 8,
            "acciones": "PED-5492927",
            "servicio": "Sobre",
            "cliente": "Isabel Castro",
            "direccion": "Avenida del Río 34, Ciudad",
            "precio": 45.00,
            "conductor": "Juan Torres",
            "atencion": "Normal",
            "trans": "No",
            "anexo": "",
            "registro": "2024-09-01 12:30:45",
            "origen": "Sucursal B"
        },
        {
            "#": 9,
            "acciones": "PED-5492927",
            "servicio": "Paquete",
            "cliente": "Fernando Ruiz",
            "direccion": "Calle del Norte 22, Ciudad",
            "precio": 99.99,
            "conductor": "Sofía Gómez",
            "atencion": "Rápido",
            "trans": "Sí",
            "anexo": "Factura-005.pdf",
            "registro": "2024-09-01 12:30:45",
            "origen": "Sucursal C"
        },
        {
            "#": 10,
            "acciones": "PED-5492927",
            "servicio": "Sobre",
            "cliente": "Esteban Morales",
            "direccion": "Calle 24, Ciudad",
            "precio": 25.00,
            "conductor": "Luis González",
            "atencion": "Normal",
            "trans": "No",
            "anexo": "",
            "registro": "2024-11-06 17:37:45",
            "origen": "Sucursal A"
        },
        {
            "#": 11,
            "acciones": "PED-5492927",
            "servicio": "Paquete",
            "cliente": "Sonia Martínez",
            "direccion": "Avenida de la Libertad 55, Ciudad",
            "precio": 120.50,
            "conductor": "Carlos Pérez",
            "atencion": "Rápido",
            "trans": "Sí",
            "anexo": "Factura-006.pdf",
            "registro": "2024-09-01 12:30:45",
            "origen": "Sucursal B"
        },
        {
            "#": 12,
            "acciones": "PED-5492927",
            "servicio": "Paquete",
            "cliente": "Ricardó Vega",
            "direccion": "Calle del Estudiante 66, Ciudad",
            "precio": 80.75,
            "conductor": "Ana Torres",
            "atencion": "Normal",
            "trans": "No",
            "anexo": "Factura-007.pdf",
            "registro": "2024-09-01 12:30:45",
            "origen": "Sucursal C"
        }
    ];

    var cantidad = 80000;

    let datosGenerados = [];
    for (let i = 1; i <= cantidad; i++) {
        // Selecciona un dato base aleatorio
        let datoBase = datosFicticios[i % datosFicticios.length];

        // Crea una copia del dato base y modifica los valores
        let nuevoDato = {
            "#": i,
            "acciones": `
            <div class="d-flex justify-content-center mb-1">
                <button type="button" class="btn btn-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#enviarPedidoModal" onclick="cargarDatosModal('${datoBase.cliente}', '${datoBase.direccion}', '${datoBase.trans}')">
                    <i class="bi bi-taxi-front-fill"></i>
                </button>
                <button type="button" class="btn btn-danger btn-sm">
                    <i class="bi bi-x-square-fill"></i>
                </button>
            </div>
            <div class="text-center small">${datoBase.acciones}</div> <!-- Clase 'small' para texto más pequeño -->
            `,
            "servicio": datoBase.servicio,
            "cliente": datoBase.cliente + ' ' + i, // Modificar nombre cliente
            "direccion": datoBase.direccion,
            "precio": (datoBase.precio * (1 + (i % 10) * 0.01)).toFixed(2), // Variar el precio ligeramente
            "conductor": datoBase.conductor,
            "atencion": datoBase.atencion,
            "trans": datoBase.trans,
            "anexo": datoBase.anexo ? datoBase.anexo.replace("001", String(i).padStart(3, '0')) : "", // Modifica el número en la factura
            "registro": datoBase.registro,
            "origen": datoBase.origen
        };

        datosGenerados.push(nuevoDato);
    }


    // Inicializar DataTable sin paginación
    var table = $('#tablaPedidosPendientes').DataTable({
        data: datosGenerados.slice(0, 30), // Mostrar inicialmente los primeros 10
        columns: [
            { data: '#' },
            { data: 'acciones' },
            { data: 'servicio' },
            { data: 'cliente' },
            { data: 'direccion' },
            { data: 'trans' },
            {
                data: 'registro',
                render: function(data, type, row) {
                    return actualizarRegistro(data);
                }
            },
            { data: 'origen' }
        ],
        paging: false,
        scrollCollapse: true,
        scrollY: '20vh',
        searching: false, // Mantener el cuadro de búsqueda
        info: false, // Sin "Mostrando X de X"
        lengthChange: false, // Deshabilitar el selector de cantidad de filas
        language: {
            search: "Buscar:", // Traducción del cuadro de búsqueda
            zeroRecords: "No se encontraron registros coincidentes", // Mensaje cuando no hay resultados
            emptyTable: "No hay datos disponibles en la tabla" // Mensaje cuando no hay datos
        }
    });

    function actualizarRegistro(data) {
        let fechaRegistro = new Date(data);
        let fechaActual = new Date();
        let diferenciaMilisegundos = fechaActual - fechaRegistro;
        let segundos = Math.floor(diferenciaMilisegundos / 1000);
        let minutos = Math.floor(segundos / 60);
        let horas = Math.floor(minutos / 60);

        if (segundos < 60) {
            return `<div style="background-color: #d4edda; padding: 5px;">Hace ${segundos} segundos</div>`;
        } else if (minutos < 60) {
            return `<div style="background-color: #fff3cd; padding: 5px;">Hace ${minutos} minutos</div>`;
        } else {
            return `<div style="background-color: #f8d7da; padding: 5px;">${data}</div>`;
        }
    }

    function cargarDatosModal(cliente, direccion, trans) {
        document.getElementById('clientName').value = cliente;
        document.getElementById('clientAddress').value = direccion;
        document.getElementById('clientSection').value = trans;
        document.getElementById('clientPhone').value = ''; // Asigna un valor si tienes el dato disponible
    }
    

    // Actualizar los registros en intervalos de tiempo definidos (ejemplo: cada 30 segundos)
    setInterval(function() {
        table.rows().every(function(rowIdx, tableLoop, rowLoop) {
            var node = this.node();
            if (node) { // Verifica que la fila existe en el DOM
                var cell = node.querySelector('td:nth-child(7)'); // Selecciona la celda de la columna 'registro'
                var data = this.data();
                if (cell) {
                    cell.innerHTML = actualizarRegistro(data.registro);
                }
            }
        });
    }, 2000); // 30,000 ms = 30 segundos


    var table = $('#tablaPedidosAtendidos').DataTable({
        data: datosGenerados.slice(0, 30), // Mostrar inicialmente los primeros 10
        columns: [
            { data: '#' },
            { data: 'acciones' },
            { data: 'servicio' },
            { data: 'cliente' },
            { data: 'direccion' },
            { data: 'precio' },
            { data: 'conductor' },
            { data: 'atencion' },
            { data: 'trans' },
            { data: 'anexo' },
            { data: 'registro' },
            { data: 'origen' }
        ],
        paging: true,
        scrollCollapse: true,
        scrollY: '25vh',
        deferRender:    true,
        searching: true, // Mantener el cuadro de búsqueda
        info: true, // Mostrar "Mostrando X de X"
        lengthChange: true, // Deshabilitar el selector de cantidad de filas
        pageLength: 10, // Mostrar inicialmente 10 filas
        language: {
            search: "Buscar:", // Traducción del cuadro de búsqueda
            lengthMenu: "Mostrar _MENU_ filas", // Traducción del selector de filas
            zeroRecords: "No se encontraron registros coincidentes", // Mensaje cuando no hay resultados
            emptyTable: "No hay datos disponibles en la tabla", // Mensaje cuando no hay datos
            info: "Mostrando _START_ a _END_ de _TOTAL_ entradas", // Mensaje de información
            paginate: {
                previous: "Anterior", // Etiqueta de botón anterior
                next: "Siguiente" // Etiqueta de botón siguiente
            }
        }
    });
});