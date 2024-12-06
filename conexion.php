<?php
// Configuración de la base de datos
$host = 'localhost';   
$usuario = 'root';     
$clave = 'Adgl99-';            
$base_de_datos = 'tallermecanico';  

// Crear la conexión
$conn = new mysqli($host, $usuario, $clave, $base_de_datos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

