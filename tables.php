
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Gestión de pacientes de MediCitas">
    <meta name="author" content="MediCitas">

    <title>MediCitas - Gestión de Pacientes</title>

    <!-- Fuentes e iconos -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- Estilos principales -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Estilos DataTables -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <!-- MENÚ LATERAL -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Logo -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-hospital-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MediCitas</div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Inicio -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Inicio</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Gestión médica
            </div>

            <!-- Pacientes -->
            <li class="nav-item active">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-user-injured"></i>
                    <span>Pacientes</span>
                </a>
            </li>

            <!-- Doctores -->
            <li class="nav-item">
                <a class="nav-link" href="cards.php">
                    <i class="fas fa-fw fa-user-md"></i>
                    <span>Doctores</span>
                </a>
            </li>

            <!-- Citas -->
            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-calendar-check"></i>
                    <span>Citas médicas</span>
                </a>
            </li>

            <!-- Especialidades -->
            <li class="nav-item">
                <a class="nav-link" href="utilities-color.php">
                    <i class="fas fa-fw fa-stethoscope"></i>
                    <span>Especialidades</span>
                </a>
            </li>

            <!-- Reportes -->
            <li class="nav-item">
                <a class="nav-link" href="utilities-other.php">
                    <i class="fas fa-fw fa-chart-bar"></i>
                    <span>Reportes</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <!-- Contraer menú -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <div class="sidebar-card d-none d-lg-flex">
                <i class="fas fa-heartbeat fa-3x mb-3"></i>
                <p class="text-center mb-2">
                    <strong>MediCitas</strong>
                    <br>
                    Gestión y organización de servicios médicos.
                </p>
            </div>

        </ul>
        <!-- FIN MENÚ LATERAL -->


        <!-- CONTENIDO PRINCIPAL -->
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <!-- BARRA SUPERIOR -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <h5 class="text-primary font-weight-bold mb-0">
                        Sistema de gestión médica
                    </h5>

                    <ul class="navbar-nav ml-auto">

                        <!-- Notificaciones -->
                        <li class="nav-item dropdown no-arrow mx-1">

                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown"
                               role="button" data-toggle="dropdown">
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge badge-danger badge-counter">3</span>
                            </a>

                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow"
                                 aria-labelledby="alertsDropdown">

                                <h6 class="dropdown-header">
                                    Centro de notificaciones
                                </h6>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-calendar text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Hoy</div>
                                        Nueva cita médica registrada.
                                    </div>
                                </a>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-user-md text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Hoy</div>
                                        Un doctor está disponible.
                                    </div>
                                </a>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-clock text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Hoy</div>
                                        Hay citas pendientes de confirmar.
                                    </div>
                                </a>

                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Usuario -->
                        <li class="nav-item dropdown no-arrow">

                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown"
                               role="button" data-toggle="dropdown">

                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    Administrador
                                </span>

                                <img class="img-profile rounded-circle"
                                     src="img/undraw_profile.svg" alt="Administrador">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow"
                                 aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Mi perfil
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>

                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- FIN BARRA SUPERIOR -->


                <!-- CONTENIDO DE LA PÁGINA -->
                <div class="container-fluid">

                    <!-- Título -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                        <div>
                            <h1 class="h3 mb-1 text-gray-800">
                                Gestión de Pacientes
                            </h1>

                            <p class="mb-0 text-gray-600">
                                Consulta y administra la información de los pacientes registrados.
                            </p>
                        </div>

                        <button class="btn btn-primary shadow-sm" type="button"
                                data-toggle="modal" data-target="#nuevoPacienteModal">

                            <i class="fas fa-user-plus fa-sm text-white-50"></i>
                            Registrar paciente

                        </button>

                    </div>


                    <!-- TARJETAS INFORMATIVAS -->
                    <div class="row">

                        <!-- Total pacientes -->
                        <div class="col-xl-4 col-md-6 mb-4">

                            <div class="card border-left-primary shadow h-100 py-2">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">

                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total de pacientes
                                            </div>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                120
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>


                        <!-- Pacientes nuevos -->
                        <div class="col-xl-4 col-md-6 mb-4">

                            <div class="card border-left-success shadow h-100 py-2">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">

                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Nuevos pacientes
                                            </div>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                15
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>


                        <!-- Pacientes activos -->
                        <div class="col-xl-4 col-md-6 mb-4">

                            <div class="card border-left-info shadow h-100 py-2">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">

                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Pacientes activos
                                            </div>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                105
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- FIN TARJETAS -->


                    <!-- TABLA DE PACIENTES -->
                    <div class="card shadow mb-4">

                        <div class="card-header py-3 d-flex align-items-center justify-content-between">

                            <h6 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-users mr-2"></i>
                                Lista de pacientes registrados
                            </h6>

                        </div>

                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-bordered table-hover" id="dataTable"
                                       width="100%" cellspacing="0">

                                    <thead class="thead-light">

                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre completo</th>
                                            <th>Teléfono</th>
                                            <th>Correo electrónico</th>
                                            <th>Fecha de registro</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>

                                    </thead>

                                    <tfoot>

                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre completo</th>
                                            <th>Teléfono</th>
                                            <th>Correo electrónico</th>
                                            <th>Fecha de registro</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>

                                    </tfoot>

                                    <tbody>

                                        <tr>
                                            <td>001</td>
                                            <td>María Rodríguez</td>
                                            <td>809-555-1001</td>
                                            <td>maria@email.com</td>
                                            <td>01/10/2026</td>
                                            <td><span class="badge badge-success">Activo</span></td>
                                            <td>
                                                <button class="btn btn-info btn-sm" title="Ver información">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-warning btn-sm" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>002</td>
                                            <td>Juan Martínez</td>
                                            <td>809-555-1002</td>
                                            <td>juan@email.com</td>
                                            <td>03/10/2026</td>
                                            <td><span class="badge badge-success">Activo</span></td>
                                            <td>
                                                <button class="btn btn-info btn-sm" title="Ver información">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-warning btn-sm" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>003</td>
                                            <td>Ana Fernández</td>
                                            <td>809-555-1003</td>
                                            <td>ana@email.com</td>
                                            <td>05/10/2026</td>
                                            <td><span class="badge badge-success">Activo</span></td>
                                            <td>
                                                <button class="btn btn-info btn-sm" title="Ver información">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-warning btn-sm" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>004</td>
                                            <td>Pedro Sánchez</td>
                                            <td>809-555-1004</td>
                                            <td>pedro@email.com</td>
                                            <td>07/10/2026</td>
                                            <td><span class="badge badge-warning">Inactivo</span></td>
                                            <td>
                                                <button class="btn btn-info btn-sm" title="Ver información">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-warning btn-sm" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>005</td>
                                            <td>Laura Jiménez</td>
                                            <td>809-555-1005</td>
                                            <td>laura@email.com</td>
                                            <td>10/10/2026</td>
                                            <td><span class="badge badge-success">Activo</span></td>
                                            <td>
                                                <button class="btn btn-info btn-sm" title="Ver información">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-warning btn-sm" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>006</td>
                                            <td>Carlos Méndez</td>
                                            <td>809-555-1006</td>
                                            <td>carlos@email.com</td>
                                            <td>12/10/2026</td>
                                            <td><span class="badge badge-success">Activo</span></td>
                                            <td>
                                                <button class="btn btn-info btn-sm" title="Ver información">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-warning btn-sm" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>007</td>
                                            <td>Gabriela Torres</td>
                                            <td>809-555-1007</td>
                                            <td>gabriela@email.com</td>
                                            <td>15/10/2026</td>
                                            <td><span class="badge badge-success">Activo</span></td>
                                            <td>
                                                <button class="btn btn-info btn-sm" title="Ver información">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-warning btn-sm" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>008</td>
                                            <td>Daniel Herrera</td>
                                            <td>809-555-1008</td>
                                            <td>daniel@email.com</td>
                                            <td>18/10/2026</td>
                                            <td><span class="badge badge-warning">Inactivo</span></td>
                                            <td>
                                                <button class="btn btn-info btn-sm" title="Ver información">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-warning btn-sm" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>009</td>
                                            <td>Isabel Gómez</td>
                                            <td>809-555-1009</td>
                                            <td>isabel@email.com</td>
                                            <td>20/10/2026</td>
                                            <td><span class="badge badge-success">Activo</span></td>
                                            <td>
                                                <button class="btn btn-info btn-sm" title="Ver información">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-warning btn-sm" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>010</td>
                                            <td>Roberto Díaz</td>
                                            <td>809-555-1010</td>
                                            <td>roberto@email.com</td>
                                            <td>22/10/2026</td>
                                            <td><span class="badge badge-success">Activo</span></td>
                                            <td>
                                                <button class="btn btn-info btn-sm" title="Ver información">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-warning btn-sm" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>
                    <!-- FIN TABLA -->


                    <!-- INFORMACIÓN -->
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle mr-2"></i>
                        Los datos mostrados son ejemplos para la demostración del sistema.
                        Todavía no están conectados a una base de datos.
                    </div>

                </div>
                <!-- FIN CONTENIDO -->

            </div>


            <!-- PIE DE PÁGINA -->
            <footer class="sticky-footer bg-white">

                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; MediCitas 2026</span>
                    </div>
                </div>

            </footer>

        </div>

    </div>


    <!-- BOTÓN VOLVER ARRIBA -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- MODAL REGISTRAR PACIENTE -->
    <div class="modal fade" id="nuevoPacienteModal" tabindex="-1" role="dialog"
         aria-labelledby="nuevoPacienteLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="nuevoPacienteLabel">
                        Registrar nuevo paciente
                    </h5>

                    <button class="close" type="button" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <div class="modal-body">

                    <form id="formPaciente">

                        <div class="form-group">
                            <label for="nombrePaciente">Nombre completo</label>
                            <input type="text" class="form-control" id="nombrePaciente"
                                   placeholder="Ingrese el nombre" required>
                        </div>

                        <div class="form-group">
                            <label for="telefonoPaciente">Teléfono</label>
                            <input type="tel" class="form-control" id="telefonoPaciente"
                                   placeholder="809-000-0000" required>
                        </div>

                        <div class="form-group">
                            <label for="correoPaciente">Correo electrónico</label>
                            <input type="email" class="form-control" id="correoPaciente"
                                   placeholder="correo@email.com" required>
                        </div>

                        <div class="alert alert-warning small mb-0">
                            Este formulario es una demostración visual.
                            Los registros todavía no se guardan.
                        </div>

                    </form>

                </div>

                <div class="modal-footer">

                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        Cancelar
                    </button>

                    <button class="btn btn-primary" type="button" disabled>
                        Registrar
                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- MODAL CERRAR SESIÓN -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
         aria-labelledby="logoutModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="logoutModalLabel">
                        ¿Deseas cerrar sesión?
                    </h5>

                    <button class="close" type="button" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <div class="modal-body">
                    Selecciona "Cerrar sesión" si deseas salir del sistema.
                </div>

                <div class="modal-footer">

                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        Cancelar
                    </button>

                    <a class="btn btn-primary" href="login.php">
                        Cerrar sesión
                    </a>

                </div>

            </div>

        </div>

    </div>


    <!-- JAVASCRIPT -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

    <!-- DataTables -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Configuración de tabla -->
    <script>
        $(document).ready(function () {

            $('#dataTable').DataTable({
                language: {
                    decimal: "",
                    emptyTable: "No hay pacientes registrados",
                    info: "Mostrando _START_ a _END_ de _TOTAL_ pacientes",
                    infoEmpty: "Mostrando 0 a 0 de 0 pacientes",
                    infoFiltered: "(filtrado de _MAX_ pacientes)",
                    lengthMenu: "Mostrar _MENU_ pacientes",
                    loadingRecords: "Cargando...",
                    processing: "Procesando...",
                    search: "Buscar:",
                    zeroRecords: "No se encontraron pacientes",
                    paginate: {
                        first: "Primero",
                        last: "Último",
                        next: "Siguiente",
                        previous: "Anterior"
                    }
                }
            });

        });
    </script>

</body>
</html>
