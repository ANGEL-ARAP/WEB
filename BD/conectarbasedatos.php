<?php

$codigo=$_POST['codusu'];

$nombre=$_POST['nomusu'];

$pasword=$_POST['pasusu'];

$correo=$_POST['correousu'];

//CADENA DE CONEXION

$hostname="localhost";

$username="root";

$password="";

$basedatosname="usuarios_prueba";

$tablaname="suscripcion_usuario";



//crear cadena conexion

$conexion = mysqli_connect($hostname, $username, $password, $basedatosname);



//Chequear conexion

if (!$conexion){

	die ("Error al conectar a la base de datos" .mysql_connect_error());

}

echo "Conectado Correctamente a la Base de Datos";



//insertar datos

$consulta = "INSERT INTO suscripcion_usuario (cod_usu,nom_usu,pas_usu,correo_usu) VALUES ('$codigo','$nombre','$pasword','$correo')";

if (mysqli_query($conexion, $consulta))

{

	echo "Datos Ingresados Correctamente";

	header ("Location:pag-principal.html");

}

else

{

	echo "ERROR:" .$consulta ."<br>" .mysqli_error($consulta);

}

?>

