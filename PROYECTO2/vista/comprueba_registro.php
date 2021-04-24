<?php 

	$Cedula_usuario=$_POST['Cedula_usuario'];
	$Nombre_usuario=$_POST['Nombre_usuario'];
	$Correo_electronico=$_POST['Correo_electronico'];
	$Contraseña=$_POST['Contraseña'];
	$Profesor=$_POST['Profesor'];

	require_once("../modelo/agregar_modelo.php");

	header("location: ../index.php")

?>
	