
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MediCitas - Especialidades Médicas</title>

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

            <li class="nav-item active">
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

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <div>
                            <h1 class="h3 mb-0 text-gray-800">Especialidades médicas</h1>
                            <p class="mb-0 text-gray-600">
                                Consulta las especialidades disponibles en nuestro centro médico.
                            </p>
                        </div>

                        <button class="btn btn-primary shadow-sm" data-toggle="modal"
                            data-target="#especialidadModal">
                            <i class="fas fa-plus fa-sm text-white-50"></i>
                            Nueva especialidad
                        </button>
                    </div>

                    <!-- Resumen -->
                    <div class="row">

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Especialidades registradas
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-stethoscope fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Especialidades activas
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
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

                    </div>

                    <!-- Tarjetas de especialidades -->
                    <div class="row">

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-heartbeat fa-3x text-danger mb-3"></i>
                                    <h5 class="font-weight-bold text-gray-800">Cardiología</h5>
                                    <p class="text-gray-600">
                                        Atención y tratamiento de enfermedades del corazón.
                                    </p>
                                    <span class="badge badge-success">Disponible</span>
                                    <hr>
                                    <p class="mb-0 text-gray-600">
                                        <i class="fas fa-user-md mr-2"></i>2 doctores
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-baby fa-3x text-primary mb-3"></i>
                                    <h5 class="font-weight-bold text-gray-800">Pediatría</h5>
                                    <p class="text-gray-600">
                                        Atención médica para bebés, niños y adolescentes.
                                    </p>
                                    <span class="badge badge-success">Disponible</span>
                                    <hr>
                                    <p class="mb-0 text-gray-600">
                                        <i class="fas fa-user-md mr-2"></i>2 doctores
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-allergies fa-3x text-warning mb-3"></i>
                                    <h5 class="font-weight-bold text-gray-800">Dermatología</h5>
                                    <p class="text-gray-600">
                                        Diagnóstico y tratamiento de enfermedades de la piel.
                                    </p>
                                    <span class="badge badge-success">Disponible</span>
                                    <hr>
                                    <p class="mb-0 text-gray-600">
                                        <i class="fas fa-user-md mr-2"></i>1 doctor
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-user-md fa-3x text-info mb-3"></i>
                                    <h5 class="font-weight-bold text-gray-800">Medicina General</h5>
                                    <p class="text-gray-600">
                                        Evaluación médica y atención primaria de los pacientes.
                                    </p>
                                    <span class="badge badge-success">Disponible</span>
                                    <hr>
                                    <p class="mb-0 text-gray-600">
                                        <i class="fas fa-user-md mr-2"></i>2 doctores
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-female fa-3x text-danger mb-3"></i>
                                    <h5 class="font-weight-bold text-gray-800">Ginecología</h5>
                                    <p class="text-gray-600">
                                        Atención y cuidado de la salud reproductiva femenina.
                                    </p>
                                    <span class="badge badge-success">Disponible</span>
                                    <hr>
                                    <p class="mb-0 text-gray-600">
                                        <i class="fas fa-user-md mr-2"></i>1 doctor
                                    </p>
                                </div>
                            </div>
                        </div>

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

    <!-- Modal -->
    <div class="modal fade" id="especialidadModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Registrar especialidad</h5>
                    <button class="close" type="button" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="formEspecialidad">
                        <div class="form-group">
                            <label>Nombre de la especialidad</label>
                            <input type="text" class="form-control" placeholder="Ej. Neurología" required>
                        </div>

                        <div class="form-group">
                            <label>Descripción</label>
                            <textarea class="form-control" rows="3"
                                placeholder="Descripción de la especialidad"></textarea>
                        </div>
                    </form>

                    <small class="text-muted">
                        Este formulario es una demostración. Los datos todavía no se guardan.
                    </small>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        Cancelar
                    </button>
                    <button class="btn btn-primary" type="button"
                        onclick="alert('La función de registro estará disponible próximamente.');">
                        Registrar
                    </button>
                </div>

            </div>
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
