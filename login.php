<?php
session_start();

// Aquí iría tu lógica de autenticación
// Supongamos que el nombre del usuario se guarda en $username después de una autenticación exitosa.

$username = 'Usuario Ejemplo';  // Ejemplo: este valor debería ser obtenido de la base de datos

// Guardar el nombre del usuario en la sesión
$_SESSION['username'] = $username;

// Redirigir al usuario a la página principal después de iniciar sesión
header('Location: index.php');
exit();
?>
