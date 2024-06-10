<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambia esto si tienes otro usuario
$password = ""; // Cambia esto si tienes una contraseña
$dbname = "jarma";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el nombre de la laptop desde el formulario
$laptop_name = $_POST['laptop_name'];

// Insertar el nombre en la tabla laptops
$sql = "INSERT INTO laptops (name) VALUES ('$laptop_name')";

if ($conn->query($sql) === TRUE) {
    echo "Laptop agregada exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
