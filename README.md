# 📚 Sistema de Gestión de Alumnos - MVC

Este es un proyecto de aplicación web desarrollado en clase utilizando el patrón de diseño **Modelo-Vista-Controlador (MVC)** con PHP. El sistema incluye un módulo de autenticación (Login) y un menú principal con opciones de navegación.

## 🚀 Características
* **Autenticación de Usuarios:** Sistema de login conectado a una base de datos MySQL.
* **Arquitectura MVC:** Separación lógica entre el modelo de datos, la interfaz de usuario y la lógica de control.
* **Diseño Moderno:** Interfaz estilizada con **Bootstrap 5** y estilos CSS personalizados para el login.
* **Menú Dinámico:** Navegación principal con menús desplegables para gestión y reportes.
* **Conexión Segura:** Uso de **PDO** para la gestión de la base de datos.

## 🛠️ Tecnologías Utilizadas
* **Lenguaje:** PHP 8.x
* **Base de Datos:** MySQL
* **Frontend:** HTML5, CSS3, Bootstrap 5
* **Servidor Sugerido:** XAMPP / WAMP

## 📂 Estructura del Proyecto
```text
├── config/
│   └── conexion.php      # Configuración de la base de datos
├── controlador/
│   └── LoginControlador.php # Lógica del login y sesiones
├── modelo/
│   └── LoginModelo.php      # Consultas SQL a la tabla usuarios
├── vista/
│   ├── layout/
│   │   ├── header.php    # Barra de navegación minimalista
│   │   └── footer.php    # Pie de página
│   └── login.php         # Interfaz de acceso con degradado
├── CSS/
│   └── styles.css        # Estilos personalizados para el login
└── index.php             # Enrutador principal del sistema
