<?php
session_start();

require_once __DIR__ . '/controlador/LoginControlador.php';

$loginCTRL = new LoginControlador();

$accion = $_GET['accion'] ?? 'default';

switch ($accion) {
    case 'login':
        $loginCTRL->login();
       
        break;
    case 'inicio':

         // Lógica para verificar si el usuario está realmente logueado
        if (!isset($_SESSION['usuario'])) {
            header("Location: index.php?accion=login");
            exit;
        }
        // Cargar las vistas de inicio
        require_once __DIR__ . '/vista/layout/header.php';
        echo'<div class = "container mt-5"> <h2 class ="text-center"> Bienvenido al sistema de alumno</h2> </div>' ;
        require_once __DIR__ . '/vista/layout/footer.php'; // Cambié el segundo header por footer, asumiendo que lo tienes
        break;

    default:
    $loginCTRL->mostrarFormulario();
    break;
}