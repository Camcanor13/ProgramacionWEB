<?php 

	include("../modelo/usuarios_modelo.php");//solicita el archivo usuarios_modelo

	$usuario=new usuarios_modelo();
	$matrizusuarios=$usuario->get_usuarios();

	include("../vista/comprueba_login.php");
 ?>