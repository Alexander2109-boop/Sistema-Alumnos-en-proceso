<?php
class Conexion
{
    public function conectar()
    {
        // 1. Parámetros de conexión
        $servidor = "localhost";
        $usuario = "root";
        $contra = "Paul2109.@";
        $base_datos = "bd_papeleria";

        try {
            // 2. Conexión PDO para MySQL (todo en una sola línea de texto)
            $pdo = new PDO("mysql:host=$servidor;dbname=$base_datos;charset=utf8", $usuario, $contra);

            // 3. Configuración de errores
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;

        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}

// Ejemplo de uso para probar la conexión:
/*
$db = new Conexion();
$conexion = $db->conectar();
echo "Conexión exitosa a la base de datos " . $base_datos;
*/
?>