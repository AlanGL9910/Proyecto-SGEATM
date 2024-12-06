<?php
// Incluir el archivo de conexión
include('conexion.php');

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];

// Insertar los datos en la tabla cliente
$sql = "INSERT INTO cliente (Nombre, Apellidos, Telefono) VALUES ('$nombre', '$apellidos', '$telefono')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Nuevo cliente registrado con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
