<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="almeida" />
 	<link href="../modelo/estilo.css" rel="stylesheet" type="text/css" />

 	<title>SISTEMA XXXX</title>

</head>
<body>
	<?php 
		
		$Correo_electronico=$_POST['Correo_electronico'];
		$Contraseña=$_POST['Contraseña'];
		$Profesor=0;
		$existe=false;

		foreach ($matrizusuarios as $registro) {
			if($registro["Correo_electronico"] == $Correo_electronico and $registro["Contraseña"] == $Contraseña){
				$existe=true;
				if($registro["Profesor"] == 1){
					$Profesor=1;
				}elseif($registro["Profesor"] == 2){
					$Profesor=2;
				}
			}
		}

		if($existe == true and $Profesor == 1){
			session_start();
    		$_SESSION['usuario']=$Correo_electronico;
			header("location: ../vista/principal.php");
			
			
		}elseif($existe == true and $Profesor == 2){
			session_start();
    		$_SESSION['usuario']=$Correo_electronico;
			header("location: ../vista/principal2.php");
		}else{

			
			echo'<script type="text/javascript">
    				alert("INFORMACION INCORRECTA");
    				window.location.href="../index.php";
    			</script>';
			
			
		}
	 ?>
	
</body>
</html>