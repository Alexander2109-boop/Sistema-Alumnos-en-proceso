<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller de Gestión de Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?accion=inicio">Alumnos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?accion=inicio">Inicio</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Gestión de Alumnos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Registrar Nuevo</a></li>
                            <li><a class="dropdown-item" href="#">Listado General</a></li>
                            <li><a class="dropdown-item" href="#">Asistencias</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Reportes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Reporte por Notas</a></li>
                            <li><a class="dropdown-item" href="#">Reporte por Asistencias</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-danger" href="index.php?accion=logout">Cerrar Sesión</a>
                    </li>
                </ul>

                <?php if (isset($_SESSION['usuario'])): ?>
                    <span class="navbar-text text-white">
                        Bienvenido: <strong><?= htmlspecialchars($_SESSION['usuario']) ?></strong>
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </nav>