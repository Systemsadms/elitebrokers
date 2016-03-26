<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Elite Broker Services Corp C.A</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="menu/ajxmenu.css" type="text/css" />
<link rel="stylesheet" href="rotador/ajximagerotator.css" type="text/css" />
<script src="rotador/ajximagerotator.js" type="text/javascript"></script>
<style>
body{
	background-image:url(img/azul2.jpg);
	background-repeat:repeat-x;
}
</style>
</head>

<body>


<div id="MarcoGlobal">


<div id="MarcoHead">
	
    
    
      <div id="logo">
    <a href="login.php"><img src="img/elite.png" width="150" height="130" /></a>    
    </div>
    
    
    
    
    <div id="nombre">
   				 <table width="588" border="0" align="center">
              <tr>
                <td width="450" align="center"><h1><font color="white">Elite Broker Services Corp C.A</font><br>
                  <a href=""><img src="img/espanol2.png" width="80" height="20" /></a>
                  / 
                  <a href=""><img src="img/english2.png" width="80" height="20" /></a></h1></td>
              </tr>
            </table>
    </div><!-- FIN DE NOMBRE -->
    
    
    
   <div id="menu">
    <div id="dentromenu">
    
    <div class="AJXMenuCeGKRNA"><!-- AJXFILE:menu/ajxmenu.css -->
<ul>
 <li><a href="index.php">Home</a></li>
 <li><a href="quienesomos.php">¿Quienes Somos?</a></li>
  <li><a href="servicios.php">Servicios</a></li>
 <li><a href="micuenta.php">Mi&nbsp;cuenta</a></li>
 <li><a href="galeria.php">Galeria</a></li>
 <li><a href="tarifas.php">Tarifas</a></li>
   <li><a href="calculadora.php">Calculadora</a></li>
  <li><a href="aliados.php">Aliados</a></li>
 <li><a href="contactanos.php">Contacto</a></li>
</ul>
 <br />
</div></div></div>
</div><!--FIN DE MARCO HEAD-->



<div id="MarcoSeparacion"></div>



<div id="MarcoCuerpo2">

<br />

<table width="200" border="0" align="center">
  <tr>
    <td align="center"><strong><em>Registro de Usuarios</em></strong></td>
  </tr>
</table>
<br />





<?php
 
if (isset($_POST['btn_enviar']))
{
		$largo=5;
		$str = "abcdefghijklmnopqrstuvwxyz";
		$may = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$num = "1234567890";
		$cad = "";
		# Comienzo de la generacion de clave.
		$cad = substr($may ,rand(0,24),1);
		$cad .= substr($num ,rand(0,10),1);
		$cad .= substr($num ,rand(0,10),1);
		for($i=0; $i<$largo; $i++) {
		$cad .= substr($str,rand(0,24),1);
		}
		//print "\nClave = ". $cad . "\n\n" ;
		;
	


	
	$nick		= 	$_POST['usuario'];
	$pass		=	$cad;
	$nombres	=	$_POST['nombres'];
	$apellidos	=	$_POST['apellidos'];
	$ci			=	'ci';
	$email		=	$_POST['email'];
	$pais		=	$_POST['pais'];
	$estado		=	$_POST['estado'];
	$ciudad		=	$_POST['ciudad'];
	$telefono	=	$_POST['celular'];
	$celular	=	$_POST['telefono'];
	$direccion	=	$_POST['dir'];
	
	
			
			require("cnx.php");
			//$conn = mysql_connect("localhost","root","root");			
			//mysql_select_db("elitebroker",$conexion);
			$ssql = "SELECT * FROM usuarios WHERE nick ='$nick'";
			$rs = mysql_query($ssql,$conexion);			
			if (mysql_num_rows($rs)>0)
				{
									
				echo "<b>Ya existe un un usuario con ese nick, por favor intente registrarse con otro nick</b>";
				
				
				
				mysql_close($conexion);
				
				?>
                	<br /><br />
                    <a href="registro.php">--> Intentar de Nuevo</a>
				<?php
			
				}
				else 
				{
				
							
							
							
							require("cnx.php");
							$ssql = "SELECT * FROM usuarios WHERE email ='$email'";
							$rs = mysql_query($ssql,$conexion);
				
							if (mysql_num_rows($rs)>0)
							{								
							echo "<b>Ya existe un un usuario con ese email, por favor intente registrarse con otra direccion de correo</b>";							
							mysql_close($conexion);
							
							?>
                            <br /><br />
                            <a href="registro.php">--> Intentar de Nuevo</a>
                        	<?php
	
							}
							else													
							{
								
			
				
							require("cnx.php");
							mysql_query ("INSERT INTO usuarios VALUES 
							('', '$nick','$pass','$nombres','$apellidos','$ci','$email','$pais','$estado','$ciudad','$telefono','$celular','$direccion')");
							mysql_close ($conexion);
							
									
								?>
                                <table width="588" border="0" align="center">
                              <tr>
                                <td align="center"><strong><em><font size="+1">
                                Bienvenido a nuestra familia de clientes. <br /><br />
                                </font></em></strong><em><font size="+1">Se ha registrado exitosamente por favor busque en su correo electronico nuestro email con los datos para ingresar a su cuenta de usuario, de no estar en la bandeja de entrada buscar en la bandeja de spam o correos no deseados y guardar nuestra direccion como segura
                                .</font></em></td>
                              </tr>
                            </table>

                                <?php
								echo "<br><br><br>";
				
			
		
								
								//Enviar email a correo
									
							
							
								$body='Se ha registrado un Nuevo Usuario
								Usuario:	'.$_POST['usuario'].'
								Nombres: 	'.$_POST['nombres'].'
								Apellidos: 	'.$_POST['apellidos'].'
								Pais: 		'.$_POST['pais'].'
								Estado: 	'.$_POST['estado'].'
								Ciudad:		'.$_POST['ciudad'].'
								E-Mail: 	'.$_POST['email'].'
								Celular: 	'.$_POST['celular'].'
								Telefono: 	'.$_POST['telefono'].'
								Direccion: 	'.$_POST['dir'].'
								
								';

								$body2 = 'Saludos Cordiales:
							
Sr(a). '.$_POST['nombres'].', es un gusto para nosotros que usted forme parte de nuestra cartera de clientes. Su usuario y su password para acceer a su cuenta son los siguientes:
								
Usuario:	'.$_POST['usuario'].'
Password:	'.$cad.'
									
Usted puede cambiar su contraseña cuando guste desde su cuenta en www.elitebrokerserv.com		
								
Por lo tanto a partir de ahora al realizar cualquier compra usted debera informarle a su proveedor que la direccion de envio de su carga es la siguiente:
								 
SHIPPING ADDRESS:
Nombre: elitebrokerserv /SU NOMBRE COMPLETO
Adress: 							
City: MIAMI
Estate: FLORIDA
Zip Code: 
Phone: 
									
											
									
Cada vez que recibamos un paquete , usted recibira un correo electronico informandole los detalles de la carga que ha recepcionado. Esta informacion es actualizada a diario por lo tanto usted sera notificado de los paquetes el mismo dia de su recepcion.
									
De igual forma lo invitamos a visitar nuestra pagina web www.elitebrokerserv.com donde con su usuario y su contrasena, usted podra monitorear el estatus de sus paquetes y asi estar informado sobre la ubicacion del mismo.
										
Gracias por su interes en trabajar con nosotros, esperamos brindarles un excelente servicio.
										
											';
							
							
							
										$para="admccct.elite@gmail.com";
										$para2= $_POST['email'];
							
									
										if ( isset ($_POST["btn_enviar"]))
										{
											$asunto = "Nuevo Registro de Usuario";
											$desde = $_POST["nick"];
											$mensaje = $body;
											
											$cabeceras = "";
											$cabeceras = "MIME-VErsion: 1.0 \r\n";
											$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras = "To: " . $_POST ["nick"] . "\r\n";
											$cabeceras = "From: " . $_POST ["email"] . "\r\n";  
							
							
											$asunto2 	= "Bienvenido a Elite Broker Services Corp C.A";
											$desde2		= $_POST["nick"];
											$mensaje2 	= $body2;
											$cabeceras2 = "";
											$cabeceras2 = "MIME-VErsion: 1.0 \r\n";
											$cabeceras2	= "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras2 = "To: " . $_POST ["nick"] . "\r\n";
											$cabeceras2 = "From: " . "info@elitebrokerserv.com" . "\r\n";    
							
							
											mail ($para2, $asunto2, $mensaje2, $cabeceras2); 
											mail ($para, $asunto, $mensaje, $cabeceras);
												
											echo "<b>Se ha registrado exitosamete, por favor intente ingresar a su cuenta</b>";
												
												
										}
										
									
						}	
		
	}
			
		

	

} 
 ?>



<br /><br /><br /><br /><br /><br />


</div><!--FIN DE MARCO Cuerpo-->

<br /><br /><br /><br />



</div><!--FIN DE MARCO GLOBAL-->

<div id="MarcoDireccion">
<em>Elite Broker Services C.A<br />
Desing by: <a href="http://www.systemsadms.com">Systems Admins C.A</a><br />
</div>





</body>
</html>