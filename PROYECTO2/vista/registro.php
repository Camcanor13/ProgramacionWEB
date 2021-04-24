<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>registro</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="css\estilos.css">
	

</head>  
<body >
 <form class="formulario" action="comprueba_registro.php" method="post">
    
    <h1>REGISTRATE</h1>
     <div class="contenedor">

     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" placeholder="Cedula" name="Cedula_usuario" required="" autocomplete="off">
         
         </div>
     
         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" placeholder="Nombre Completo" name="Nombre_usuario" required="">
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico" name="Correo_electronico" required="">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" name="Contraseña" required="">
         
         </div>

         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" placeholder="Profesor" name="Profesor" required="">
         
         </div>

         <input type="submit" value="Registrate" class="button" name="enviar">


         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="../index.php">Iniciar Sesion</a></p> 
     </div>
    </form>
    
</body>
</html>