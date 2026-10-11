<?php


$host = "localhost";
$usuario = "root"; // El usuario por defecto en XAMPP
$password = ""; // En XAMPP en Windows, la contraseña suele ir vacía
$base_datos = "refacciones_bd"; // El nombre exacto de la base de datos de ketzy

// Crear la conexión
$conexion = new mysqli($host, $usuario, $password, $base_datos);

// Comprobar si hay errores
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Configurar el conjunto de caracteres a UTF-8 para no tener problemas con acentos y ñ
$conexion->set_charset("utf8mb4");


// echo "Conexión exitosa a refacciones_bd";
?>