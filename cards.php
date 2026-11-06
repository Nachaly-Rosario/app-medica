<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gestión de doctores de MediCitas">
    <meta name="author" content="MediCitas">

    <title>MediCitas - Gestión de Doctores</title>

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

        <li class="nav-item active">
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
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                Administrador
                            </span>
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

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div>
                        <h1 class="h3 mb-0 text-gray-800">Gestión de Doctores</h1>
                        <p class="mb-0 text-gray-600">Directorio del personal médico disponible.</p>
                    </div>

                    <button class="btn btn-primary shadow-sm" data-toggle="modal" data-target="#doctorModal">
                        <i class="fas fa-plus fa-sm text-white-50"></i>
                        Registrar doctor
                    </button>
                </div>

                <!-- Estadísticas -->
                <div class="row">

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total de doctores
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">8</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Disponibles
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">6</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Especialidades
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    No disponibles
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Directorio de doctores -->
                <div class="row">

                    <div class="col-lg-6 mb-4">
                        <div class="card shadow h-100">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                                <h6 class="m-0 font-weight-bold text-primary">Dra. María Rodríguez</h6>
                                <span class="badge badge-success">Disponible</span>
                            </div>
                            <div class="card-body text-center">
                                <i class="fas fa-user-md fa-5x text-primary mb-3"></i>
                                <h5 class="font-weight-bold">Cardiología</h5>
                                <p class="text-gray-600">Especialista en enfermedades del corazón.</p>
                                <hr>
                                <p><i class="fas fa-clock text-primary mr-2"></i>Lunes a viernes: 8:00 AM - 2:00 PM</p>
                                <p><i class="fas fa-phone text-primary mr-2"></i>809-555-0101</p>
                                <button class="btn btn-outline-primary btn-sm" onclick="alert('Información de ejemplo del doctor.')">
                                    <i class="fas fa-eye"></i> Ver perfil
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="card shadow h-100">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                                <h6 class="m-0 font-weight-bold text-primary">Dr. Carlos Martínez</h6>
                                <span class="badge badge-success">Disponible</span>
                            </div>
                            <div class="card-body text-center">
                                <i class="fas fa-user-md fa-5x text-success mb-3"></i>
                                <h5 class="font-weight-bold">Pediatría</h5>
                                <p class="text-gray-600">Especialista en atención médica infantil.</p>
                                <hr>
                                <p><i class="fas fa-clock text-primary mr-2"></i>Lunes a viernes: 9:00 AM - 3:00 PM</p>
                                <p><i class="fas fa-phone text-primary mr-2"></i>809-555-0102</p>
                                <button class="btn btn-outline-primary btn-sm" onclick="alert('Información de ejemplo del doctor.')">
                                    <i class="fas fa-eye"></i> Ver perfil
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="card shadow h-100">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                                <h6 class="m-0 font-weight-bold text-primary">Dra. Laura Fernández</h6>
                                <span class="badge badge-success">Disponible</span>
                            </div>
                            <div class="card-body text-center">
                                <i class="fas fa-user-md fa-5x text-info mb-3"></i>
                                <h5 class="font-weight-bold">Dermatología</h5>
                                <p class="text-gray-600">Especialista en el cuidado de la piel.</p>
                                <hr>
                                <p><i class="fas fa-clock text-primary mr-2"></i>Martes a sábado: 8:00 AM - 1:00 PM</p>
                                <p><i class="fas fa-phone text-primary mr-2"></i>809-555-0103</p>
                                <button class="btn btn-outline-primary btn-sm" onclick="alert('Información de ejemplo del doctor.')">
                                    <i class="fas fa-eye"></i> Ver perfil
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="card shadow h-100">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                                <h6 class="m-0 font-weight-bold text-primary">Dr. José Ramírez</h6>
                                <span class="badge badge-danger">No disponible</span>
                            </div>
                            <div class="card-body text-center">
                                <i class="fas fa-user-md fa-5x text-warning mb-3"></i>
                                <h5 class="font-weight-bold">Medicina General</h5>
                                <p class="text-gray-600">Atención médica y consultas generales.</p>
                                <hr>
                                <p><i class="fas fa-clock text-primary mr-2"></i>Lunes a viernes: 10:00 AM - 4:00 PM</p>
                                <p><i class="fas fa-phone text-primary mr-2"></i>809-555-0104</p>
                                <button class="btn btn-outline-primary btn-sm" onclick="alert('Información de ejemplo del doctor.')">
                                    <i class="fas fa-eye"></i> Ver perfil
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="alert alert-info">
                    <i class="fas fa-info-circle mr-2"></i>
                    Los doctores y sus horarios mostrados son datos de ejemplo para la demostración del sistema.
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

<!-- Modal registrar doctor -->
<div class="modal fade" id="doctorModal" tabindex="-1" role="dialog" aria-labelledby="doctorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="doctorModalLabel">Registrar doctor</h5>
                <button class="close" type="button" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="doctorForm">
                    <div class="form-group">
                        <label>Nombre completo</label>
                        <input type="text" class="form-control" placeholder="Nombre del doctor" required>
                    </div>

                    <div class="form-group">
                        <label>Especialidad</label>
                        <select class="form-control" required>
                            <option value="">Seleccione una especialidad</option>
                            <option>Cardiología</option>
                            <option>Pediatría</option>
                            <option>Dermatología</option>
                            <option>Medicina General</option>
                            <option>Ginecología</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="tel" class="form-control" placeholder="809-000-0000" required>
                    </div>

                    <div class="alert alert-warning mb-0">
                        Este formulario es demostrativo. Los datos no se guardan en una base de datos.
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary" type="button" onclick="alert('Formulario de demostración. No se guardaron los datos.')">
                    Registrar
                </button>
            </div>

        </div>
    </div>
</div>

<!-- Modal cerrar sesión -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
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
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
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

</body>
</html>