<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gestión de citas médicas MediCitas">
    <meta name="author" content="MediCitas">

    <title>MediCitas - Citas Médicas</title>

    <!-- Fuentes -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- Estilos -->
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

        <li class="nav-item active">
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

        <li class="nav-item">
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
    <!-- Fin Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Buscar..." aria-label="Buscar">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown"
                            role="button" data-toggle="dropdown">
                            <i class="fas fa-bell fa-fw"></i>
                            <span class="badge badge-danger badge-counter">3</span>
                        </a>

                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in">
                            <h6 class="dropdown-header">Notificaciones</h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-calendar-check text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">06 de noviembre de 2026</div>
                                    Hay nuevas citas médicas registradas.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">
                                Ver todas las notificaciones
                            </a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown"
                            role="button" data-toggle="dropdown">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrador</span>
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
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
            <!-- Fin Topbar -->

            <!-- Contenido principal -->
            <div class="container-fluid">

                <div class="mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Citas médicas</h1>
                    <p class="mb-0 text-gray-600">
                        Consulta las estadísticas y el estado de las citas médicas.
                    </p>
                </div>

                <!-- Resumen de citas -->
                <div class="row">

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total de citas
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">25</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Confirmadas
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pendientes
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">7</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Canceladas
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Gráficos -->
                <div class="row">

                    <!-- Gráfico de citas por semana -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">

                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    Citas médicas durante la semana
                                </h6>
                            </div>

                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="citasSemanaChart"></canvas>
                                </div>
                                <hr>
                                <small class="text-muted">
                                    Cantidad de citas registradas por día.
                                </small>
                            </div>

                        </div>
                    </div>

                    <!-- Gráfico circular -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">

                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    Estado de las citas
                                </h6>
                            </div>

                            <div class="card-body">
                                <div class="chart-pie pt-4">
                                    <canvas id="estadoCitasChart"></canvas>
                                </div>
                                <hr>
                                <small class="text-muted">
                                    Distribución de citas según su estado.
                                </small>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Gráfico por especialidad -->
                <div class="row">

                    <div class="col-12">
                        <div class="card shadow mb-4">

                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    Citas por especialidad médica
                                </h6>
                            </div>

                            <div class="card-body">
                                <div class="chart-bar">
                                    <canvas id="especialidadChart"></canvas>
                                </div>
                                <hr>
                                <small class="text-muted">
                                    Cantidad de citas solicitadas por especialidad.
                                </small>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="alert alert-info">
                    <i class="fas fa-info-circle mr-2"></i>
                    Los gráficos y las cantidades presentadas contienen datos de ejemplo para la demostración del sistema.
                </div>

            </div>
            <!-- Fin del contenido -->

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

<!-- Botón volver arriba -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Modal cerrar sesión -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
    aria-labelledby="logoutModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">¿Desea cerrar sesión?</h5>
                <button class="close" type="button" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                Seleccione "Cerrar sesión" si desea salir del sistema.
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">
                    Cancelar
                </button>
                <a class="btn btn-primary" href="login.php">Cerrar sesión</a>
            </div>

        </div>
    </div>
</div>

<!-- JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>

<!-- Chart.js -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Gráficos personalizados -->
<script>
    // Gráfico de citas durante la semana
    var ctxSemana = document.getElementById("citasSemanaChart");

    new Chart(ctxSemana, {
        type: 'line',
        data: {
            labels: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'],
            datasets: [{
                label: 'Citas registradas',
                data: [5, 8, 4, 10, 7, 6, 3],
                backgroundColor: 'rgba(78, 115, 223, 0.15)',
                borderColor: 'rgba(78, 115, 223, 1)',
                pointBackgroundColor: 'rgba(78, 115, 223, 1)',
                pointBorderColor: '#fff',
                borderWidth: 3,
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

    // Gráfico del estado de las citas
    var ctxEstado = document.getElementById("estadoCitasChart");

    new Chart(ctxEstado, {
        type: 'doughnut',
        data: {
            labels: ['Confirmadas', 'Pendientes', 'Canceladas'],
            datasets: [{
                data: [15, 7, 3],
                backgroundColor: ['#1cc88a', '#f6c23e', '#e74a3b'],
                hoverBackgroundColor: ['#17a673', '#dda20a', '#be2617'],
                borderWidth: 2
            }]
        },
        options: {
            maintainAspectRatio: false,
            cutoutPercentage: 65,
            legend: {
                position: 'bottom'
            }
        }
    });

    // Gráfico de citas por especialidad
    var ctxEspecialidad = document.getElementById("especialidadChart");

    new Chart(ctxEspecialidad, {
        type: 'bar',
        data: {
            labels: ['Cardiología', 'Pediatría', 'Dermatología', 'Medicina General', 'Ginecología'],
            datasets: [{
                label: 'Número de citas',
                data: [8, 6, 4, 5, 2],
                backgroundColor: [
                    '#4e73df',
                    '#1cc88a',
                    '#36b9cc',
                    '#f6c23e',
                    '#e74a3b'
                ],
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
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
</script>

</body>
</html>
