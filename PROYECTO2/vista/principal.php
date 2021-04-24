<!DOCTYPE html>
<html>
<img src="img//banner.png">

<header>
<section>
<a href="..//index.html" id="logo" target="_blank">Iniciar Sesión</a>

<label for="toggle-1" class="toggle-menu"></label>
<input type="checkbox" id="toggle-1">
<link rel="stylesheet" href="css/estilo.css">
<nav>
<ul>
<li><a href="principal.html"><i class="icon-home"></i>Inicio</a></li>
<li><a href="crearclase.html"><i class="icon-user"></i>Crear Clase</a></li>
<li><a href="ListaClase.html"><i class="icon-List"></i>Clases Disponibles</a></li>
<li><a href="contactenos.html"><i class="icon-thumbs-up-alt"></i>Contáctenos</a></li>
</ul>
</nav>
</header>

</section>


<body>
<div class="contact_form">  

    <div class="formulario">      
      <h1>BUSCAR CLASE</h1>
        <h3>Estudiante tu profesor debera proporcionarte un codigo de clase con el cual podras encontras la clase y confirmar tu asistencia</h3>


          <form action="submeter-formulario.php" method="post">      

            
                <p>
                  <label for="nombre" class="colocar_nombre">CODIGO CLASE
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe el codigo de la clase">
                </p>
              
                               
                <button type="submit" name="enviar_formulario" id="enviar"><p>BUSCAR CLASE</p></button>

                <table style="width: 50%;">

                <tr>
                    <th colspan="3">
                        CLASE
                    </th>
                </tr>
                <TR>
                	<th>CODIGO CLASE</th>
                	<th>NOMBRE CLASE</th>
                	<th>CONFIRMAR ASISTENCIA</th>
                </TR>
                <tr>
                    <td>12345</td>
                    <td>INGLES</td>
                    <td><p>ASISTENCIA: <input type="radio" name="asistencia" value="a"></p></td>
                  
                </tr>
                
            </table>
            <button type="submit" name="enviar_formulario" id="enviar"><p>ENVIAR ASISTENCIA</p></button>

        

                          
            
          </form>
    </div>  
  </div>	
    
</body>

 <!--PIE DE PAGINA-->
  <footer>
    AULA VIRTUAL<br>
    Diseñado por: Kennyn Aullon, Diego Quintero y David Cano<BR>
    Email:kennyn.aullon00@usc.edu.co<BR>
    diego.quintero04@usc.edu.co<BR>
    camcanor13@gmail.com<BR>

</footer>-->
<!--TERMINA PIE DE PAGINA-->
</html>