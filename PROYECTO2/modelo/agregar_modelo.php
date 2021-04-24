<?php 
	include("conectar.php");

	$base = conectar::conexion();

	try {
		$sql = "INSERT INTO usuario VALUES (:ced, :nom, :cor, :con, :pro)";
    	$resultado = $base->prepare($sql);
    	$resultado->execute(array(":ced"=>$Cedula_usuario, ":nom"=>$Nombre_usuario, ":cor"=>$Correo_electronico, ":con"=>$Contraseña, ":pro"=>$Profesor));
	} catch (Exception $e) {
		if ($e->getcode() == 23000) {
			echo'<script type="text/javascript">
    				alert("el usuario ya existe");
    				window.location.href="../vista/registro.php";
    			</script>';
		}
		
	}

   

    // header("Location:../index.php");

  
 ?>