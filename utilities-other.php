
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MediCitas - Reportes</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,700,800,900" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-hospital"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MediCitas</div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">Gestión médica</div>

            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Pacientes</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="cards.php">
                    <i class="fas fa-fw fa-user-md"></i>
                    <span>Doctores</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-calendar-check"></i>
                    <span>Citas médicas</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="utilities-color.php">
                    <i class="fas fa-fw fa-stethoscope"></i>
                    <span>Especialidades</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="utilities-other.php">
                    <i class="fas fa-fw fa-file-medical-alt"></i>
                    <span>Reportes</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <h5 class="text-gray-700 mb-0">Sistema de Citas Médicas</h5>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown"
                                role="button" data-toggle="dropdown">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    Administrador
                                </span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow">
                                <a class="dropdown-item" href="login.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End Topbar -->

                <div class="container-fluid">

                    <!-- Encabezado -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <div>
                            <h1 class="h3 mb-0 text-gray-800">Reportes médicos</h1>
                            <p class="mb-0 text-gray-600">
                                Resumen general de las actividades del centro médico.
                            </p>
                        </div>

                        <button class="btn btn-primary shadow-sm" onclick="window.print()">
                            <i class="fas fa-print fa-sm text-white-50"></i>
                            Imprimir reporte
                        </button>
                    </div>

                    <!-- Tarjetas de estadísticas -->
                    <div class="row">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total de citas
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">25</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Pacientes registrados
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">120</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Doctores disponibles
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">8</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-md fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Citas pendientes
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">7</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Progreso de citas -->
                    <div class="row">

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        Estado de las citas
                                    </h6>
                                </div>

                                <div class="card-body">

                                    <h4 class="small font-weight-bold">
                                        Citas confirmadas
                                        <span class="float-right">60%</span>
                                    </h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: 60%" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <h4 class="small font-weight-bold">
                                        Citas pendientes
                                        <span class="float-right">28%</span>
                                    </h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                            style="width: 28%" aria-valuenow="28"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <h4 class="small font-weight-bold">
                                        Citas canceladas
                                        <span class="float-right">12%</span>
                                    </h4>
                                    <div class="progress mb-2">
                                        <div class="progress-bar bg-danger" role="progressbar"
                                            style="width: 12%" aria-valuenow="12"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Información general -->
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        Resumen del centro médico
                                    </h6>
                                </div>

                                <div class="card-body">

                                    <div class="mb-3">
                                        <h6 class="font-weight-bold text-gray-800">
                                            <i class="fas fa-hospital text-primary mr-2"></i>
                                            MediCitas
                                        </h6>
                                        <p class="text-gray-600 mb-0">
                                            Sistema de gestión de citas y servicios médicos.
                                        </p>
                                    </div>

                                    <hr>

                                    <div class="mb-3">
                                        <h6 class="font-weight-bold text-gray-800">
                                            <i class="fas fa-stethoscope text-success mr-2"></i>
                                            Especialidades
                                        </h6>
                                        <p class="text-gray-600 mb-0">
                                            5 especialidades médicas registradas.
                                        </p>
                                    </div>

                                    <hr>

                                    <div class="mb-3">
                                        <h6 class="font-weight-bold text-gray-800">
                                            <i class="fas fa-user-md text-info mr-2"></i>
                                            Personal médico
                                        </h6>
                                        <p class="text-gray-600 mb-0">
                                            8 doctores disponibles para atender pacientes.
                                        </p>
                                    </div>

                                    <hr>

                                    <div>
                                        <h6 class="font-weight-bold text-gray-800">
                                            <i class="fas fa-calendar-alt text-warning mr-2"></i>
                                            Fecha del reporte
                                        </h6>
                                        <p class="text-gray-600 mb-0">
                                            6 de noviembre de 2026
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Tabla de resumen -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Resumen de citas médicas
                            </h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered" width="100%" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>Estado</th>
                                            <th>Cantidad</th>
                                            <th>Porcentaje</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="badge badge-success">Confirmadas</span>
                                            </td>
                                            <td>15</td>
                                            <td>60%</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="badge badge-warning">Pendientes</span>
                                            </td>
                                            <td>7</td>
                                            <td>28%</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="badge badge-danger">Canceladas</span>
                                            </td>
                                            <td>3</td>
                                            <td>12%</td>
                                        </tr>
                                    </tbody>

                                    <tfoot>
                                        <tr class="font-weight-bold">
                                            <td>Total</td>
                                            <td>25</td>
                                            <td>100%</td>
                                        </tr>
                                    </tfoot>

                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="alert alert-info">
                        <i class="fas fa-info-circle mr-2"></i>
                        <strong>Nota:</strong> Los datos presentados en este reporte son de demostración.
                        No están conectados a una base de datos.
                    </div>

                </div>
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; MediCitas 2026</span>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
