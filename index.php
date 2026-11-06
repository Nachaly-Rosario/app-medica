<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Sistema de gestión de citas médicas">
    <meta name="author" content="MediCitas">

    <title>MediCitas - Sistema de Citas Médicas</title>

    <!-- Fuentes e iconos -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- Estilos SB Admin 2 -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
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
            <li class="nav-item active">
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
            <li class="nav-item">
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

            <!-- Botón para contraer menú -->
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
                                        <span>Nueva cita médica registrada.</span>
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
                                        <span>Un doctor está disponible.</span>
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
                                        <span>Hay citas pendientes de confirmar.</span>
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
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg" alt="Usuario">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow">
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

                    <!-- TÍTULO -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <div>
                            <h1 class="h3 mb-1 text-gray-800">
                                Sistema de Citas Médicas
                            </h1>
                            <p class="mb-0 text-gray-600">
                                Bienvenido al panel de administración de MediCitas.
                            </p>
                        </div>

                        <a href="tables.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-calendar-plus fa-sm text-white-50"></i>
                            Gestionar citas
                        </a>
                    </div>


                    <!-- TARJETAS DE ESTADÍSTICAS -->
                    <div class="row">

                        <!-- Citas de hoy -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Citas de hoy
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                25
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pacientes -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Pacientes registrados
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                120
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-injured fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Doctores -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Doctores disponibles
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                8
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-md fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Citas pendientes -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Citas pendientes
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                12
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- FIN TARJETAS -->


                    <!-- GRÁFICOS -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">

                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        Estadísticas de citas médicas
                                    </h6>
                                </div>

                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="appointmentsChart"></canvas>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">

                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        Estado de las citas
                                    </h6>
                                </div>

                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="statusChart"></canvas>
                                    </div>

                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Confirmadas
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Completadas
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-warning"></i> Pendientes
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- FIN GRÁFICOS -->


                    <!-- PRÓXIMAS CITAS -->
                    <div class="row">

                        <div class="col-12">
                            <div class="card shadow mb-4">

                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        <i class="fas fa-calendar-alt mr-2"></i>
                                        Próximas citas médicas
                                    </h6>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">

                                        <table class="table table-bordered table-hover" width="100%" cellspacing="0">

                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Paciente</th>
                                                    <th>Doctor</th>
                                                    <th>Especialidad</th>
                                                    <th>Fecha</th>
                                                    <th>Hora</th>
                                                    <th>Estado</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>María Rodríguez</td>
                                                    <td>Dr. Pérez</td>
                                                    <td>Cardiología</td>
                                                    <td>06/11/2026</td>
                                                    <td>09:00 AM</td>
                                                    <td><span class="badge badge-success">Confirmada</span></td>
                                                </tr>

                                                <tr>
                                                    <td>Juan Martínez</td>
                                                    <td>Dra. Gómez</td>
                                                    <td>Pediatría</td>
                                                    <td>06/11/2026</td>
                                                    <td>10:30 AM</td>
                                                    <td><span class="badge badge-warning">Pendiente</span></td>
                                                </tr>

                                                <tr>
                                                    <td>Ana Fernández</td>
                                                    <td>Dr. Castillo</td>
                                                    <td>Medicina general</td>
                                                    <td>06/11/2026</td>
                                                    <td>11:00 AM</td>
                                                    <td><span class="badge badge-success">Confirmada</span></td>
                                                </tr>

                                                <tr>
                                                    <td>Pedro Sánchez</td>
                                                    <td>Dra. López</td>
                                                    <td>Dermatología</td>
                                                    <td>06/11/2026</td>
                                                    <td>02:00 PM</td>
                                                    <td><span class="badge badge-danger">Pendiente</span></td>
                                                </tr>

                                                <tr>
                                                    <td>Laura Jiménez</td>
                                                    <td>Dr. Ramírez</td>
                                                    <td>Oftalmología</td>
                                                    <td>06/11/2026</td>
                                                    <td>03:30 PM</td>
                                                    <td><span class="badge badge-success">Confirmada</span></td>
                                                </tr>
                                            </tbody>

                                        </table>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- FIN PRÓXIMAS CITAS -->

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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- GRÁFICO DE CITAS -->
    <script>
        var ctx = document.getElementById("appointmentsChart");

        new Chart(ctx, {
            type: "line",
            data: {
                labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio"],
                datasets: [{
                    label: "Citas médicas",
                    data: [45, 60, 55, 80, 70, 95],
                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                    borderColor: "rgba(78, 115, 223, 1)",
                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                    borderWidth: 2,
                    fill: true
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: true
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            precision: 0
                        }
                    }]
                }
            }
        });

        // GRÁFICO DE ESTADO DE CITAS
        var status = document.getElementById("statusChart");

        new Chart(status, {
            type: "doughnut",
            data: {
                labels: ["Confirmadas", "Completadas", "Pendientes"],
                datasets: [{
                    data: [45, 35, 20],
                    backgroundColor: [
                        "#4e73df",
                        "#1cc88a",
                        "#f6c23e"
                    ],
                    hoverBorderColor: "rgba(234, 236, 244, 1)"
                }]
            },
            options: {
                maintainAspectRatio: false,
                cutoutPercentage: 70,
                legend: {
                    display: false
                }
            }
        });
    </script>

</body>
</html>
