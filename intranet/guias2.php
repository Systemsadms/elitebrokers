<?php
session_start();
if ($_SESSION['admin'] == 'elitebrokerserv')
{
include ("cnx.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="menu/ajxmenu.css" type="text/css" />
</head>

<body>


<div id="Marcocosmo">
<div id="MarcoGlobal">



                <div id="modulotop">
                
                	<div id="logo"></div>
                    <div id="titulo">
                    Sistema de Control de Usuarios, Tracking y Envios.
                    <br /><br />
                    CUTE v2.0
                    </div>
                
                
                </div><!--FIN DE modulotop-->
                
                
                <div id="menu">
                
 <div class="AJXMenuWJcNLQA"><!-- AJXFILE:menu/ajxmenu.css -->
 <div class="ajxmw1">
  <div class="ajxmw2">
<ul>
					<li class="tfirst"><a href="home.php">Home</a></li>
                     <li><a href="clientes.php">Clientes</a></li>
                     <li><a href="guias.php">Guias</a></li>                     
                     <li><a href="no.php">Almacen</a></li>                     
                     <li><a href="pagos.php">Pagos</a></li>
                     <li><a href="galeria.php">Galeria</a></li>
                     <li><a href="precios.php">Precios</a></li>
                     <li><a href="destruir.php"><font color="#0000FF">Cerrar Admin Center</font></a></li>
</ul>
  </div>
 </div>
 <br />
 
 
 
 
 
 
</div>
                                    
</div><!--FIN DE MARCO menu-->
                
                
                
                
                
                <div id="sparacion"></div><!--FIN DE  sparacion-->
                
                
                
                
                
                
                <div id="contenido">
                  <table width="530" border="0" align="center">
                    <tr>
                      <td width="433" align="center"><em><strong><font color="#999999">Sistema de Control de Usuarios y Carga de Tracking. v2.0</font></strong></em></td>
                    </tr>
                  </table>
                  
                  
                  
                   <?php
								 if(isset ($_POST["abrir"]))
									{
										$id 	= $_POST["guia"];										
						
										require ("cnx.php");
										$ssql = mysql_query("SELECT * FROM guias WHERE guia='$id'");
										
										
										if (mysql_num_rows($ssql)==1)
										{
										$guia2 		=  mysql_result($ssql,0,"guia");
										$usuario	=  mysql_result($ssql,0,"usuario");
										$tracking 	=  mysql_result($ssql,0,"tracking");
										$direccion 	=  mysql_result($ssql,0,"direccion");
										$libras 	=  mysql_result($ssql,0,"libras");
										$volumen 	=  mysql_result($ssql,0,"volumen");
										$costo 		=  mysql_result($ssql,0,"costo");										
										$des	 	=  mysql_result($ssql,0,"des");										
										$dimensiones	 	=  mysql_result($ssql,0,"dimensiones");
										$foto	 	=  mysql_result($ssql,0,"foto");
										$ext	 	=  mysql_result($ssql,0,"ext");
										$estatus 	=  mysql_result($ssql,0,"estatus");
										mysql_close($conexion);																																
										
										}
										else
										{
										echo "el numero de guia no existe";	
										}										
										         
									   }                
									  ?> 
                  
                  
                  			
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <?php
                                 if (isset($_POST['modificar']))
								 {
									$guia		= $_POST['guia'];								
									$tracking	= $_POST['tracking'];
									$direccion	= $_POST['direccion'];
									$libras		= $_POST['libras'];
									$volumen 	= $_POST["volumen"];									
									$costo		= $_POST['costo'];
									$dimensiones 	= $_POST['dimensiones'];									
									$des		= $_POST['des'];
									$estatus	= $_POST['estatus'];
									
									
											
												
								if ($_FILES['foto']['name'] != "")
								{
									
								
								$fotonew = $_POST['foto2'];
								$extnew  = $_POST['ext'];
								$archivo = "guia_".$fotonew.'.'.$extnew;						
								unlink('img_guias/'.$archivo);
											
####
## Funcin para redimencionar las imgenes
## utilizando las liberas de GD de PHP
####
 
function resizeImagen($ruta, $nombre, $alto, $ancho,$nombreN,$extension)
{
$rutaImagenOriginal = $ruta.$nombre;
if($extension == 'GIF' || $extension == 'gif')
{
	$img_original = imagecreatefromgif($rutaImagenOriginal);
}
if($extension == 'jpg' || $extension == 'JPG')
{
	$img_original = imagecreatefromjpeg($rutaImagenOriginal);
}
if($extension == 'png' || $extension == 'PNG')
{
	$img_original = imagecreatefrompng($rutaImagenOriginal);
}
$max_ancho = $ancho;
$max_alto = $alto;
list($ancho,$alto)=getimagesize($rutaImagenOriginal);
$x_ratio = $max_ancho / $ancho;
$y_ratio = $max_alto / $alto;
if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho
$ancho_final = $ancho;
$alto_final = $alto;
} elseif (($x_ratio * $alto) < $max_alto){
$alto_final = ceil($x_ratio * $alto);
$ancho_final = $max_ancho;
} else{
$ancho_final = ceil($y_ratio * $ancho);
$alto_final = $max_alto;
}
$tmp=imagecreatetruecolor($ancho_final,$alto_final);
imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
imagedestroy($img_original);
$calidad=70;
imagejpeg($tmp,$ruta.$nombreN,$calidad);
}

	$largo=2;
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
		;





// comprobamos que se ha enviado el formulario
// comprobar que han seleccionado una foto
if($_FILES['foto']['name'] != ""){ // El campo foto contiene una imagen...
// Primero, hay que validar que se trata de un JPG/GIF/PNG
$allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "GIF", "PNG");
$extension = end(explode(".", $_FILES["foto"]["name"]));
if ((($_FILES["foto"]["type"] == "image/gif")
|| ($_FILES["foto"]["type"] == "image/jpeg")
|| ($_FILES["foto"]["type"] == "image/png")
|| ($_FILES["foto"]["type"] == "image/pjpeg"))
&& in_array($extension, $allowedExts)) {
// el archivo es un JPG/GIF/PNG, entonces...
$extension = end(explode('.', $_FILES['foto']['name']));
$foto = $fotonew . ".".$extension;
$directorio = "img_guias"; // directorio de tu eleccin
// almacenar imagen en el servidor
move_uploaded_file($_FILES['foto']['tmp_name'], $directorio.'/'.$foto);
$minFoto = 'guia_'.$foto;
$resFoto = 'res_'.$foto;
resizeImagen($directorio.'/', $foto, 800, 600,$minFoto,$extension);
//resizeImagen($directorio.'/', $foto, 500, 500,$resFoto,$extension);
unlink($directorio.'/'.$foto);

echo "Se ha cargado el un nuevo tracking ";
} else { // El archivo no es JPG/GIF/PNG
$malformato = $_FILES["foto"]["type"];
echo "El tipo de archivo no es una imagen valida";
//header("Location: index.php");
exit;
}
} else { // El campo foto NO contiene una imagen
		
		echo "Se ha cargado un nuevo tracking sin imagen ";
//echo "No contiene ninguna imagen";

//header("Location: index.php");
//exit;
}
			


require ("cnx.php");									
$consulta = "UPDATE guias SET 
ext ='$extension', estatus='$estatus',tracking ='$tracking', direccion ='$direccion', libras='$libras', volumen='$volumen', costo='$costo', des='$des', dimensiones='$dimensiones' WHERE guia= $guia ";	
$hacerconsulta = mysql_query ($consulta);
mysql_close ($conexion);										
										
					
								
								
				?>
                                    
                               <table width="348" border="0" align="center">
                              <tr>
                                <td width="320" align="center"><p><strong>SUS CAMBIOS FUERON REALIZADOS CON EXITO</strong></p>
                                <p><a href="guias.php">Click Aqui para volver al Area de Clientes</a></p></td>
                              </tr>
                            </table>

					<?php
					}
					else
					{
						
						echo "<br>";
						echo "<br>";
					
									require ("cnx.php");									
									$consulta = "UPDATE guias SET 
									tracking ='$tracking', estatus='$estatus',direccion ='$direccion', libras='$libras', volumen='$volumen', costo='$costo', des='$des', dimensiones='$dimensiones' WHERE guia = $guia " ;
							
									$hacerconsulta = mysql_query ($consulta);
							
								
									mysql_close ($conexion);
									
									echo "<br>";									
									echo "<br>";	
									?>
                                    
                                                  <table width="348" border="0" align="center">
                              <tr>
                                <td width="320" align="center"><p><strong>SUS CAMBIOS FUERON REALIZADOS CON EXITO</strong></p>
                                <p><a href="guias.php">Click Aqui para volver al Area de Clientes</a></p></td>
                              </tr>
                            </table>

									<?php
									 }
										
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								


									



							






									
									 }
									elseif (isset($_POST['eliminar']))
									{
										
										$guia5 = $_POST['guia'];
										
										
											
										include ("cnx.php");
										$ssql = mysql_query("SELECT * FROM guias WHERE guia='$guia5'");	
										$foto 		=  mysql_result($ssql,0,"foto");									
										$ext 		=  mysql_result($ssql,0,"ext");
										mysql_close($conexion);		
										$archivo = "guia_".$foto.'.'.$ext;						
										unlink('img_guias/'.$archivo);
										
										
										include ("cnx.php");
										$consulta = "DELETE FROM guias WHERE guia='$guia5';";
										$hacerconsulta=mysql_query ($consulta,$conexion);
										mysql_close($conexion);
										?>	
                                        	<br />								
										<table width="348" border="0" align="center">
                                          <tr>
                                            <td width="320" align="center"><p><strong>LA GUIA FUE ALIMINADA CON EXITO</strong></p>
                                            <p><a href="guias.php">Click Aqui para volver al Area de Clientes</a></p></td>
                                          </tr>
                                        </table>
                                        
                                    <?php   
									
										}
										elseif (isset($_POST['reportar']))
										{
											$guia3	 	= $_POST["guia"];
											$userx	 	= $_POST["userx"];									
											$tracking3	= $_POST['tracking'];
											$estatus3 	= "El Paquete se encuentra en nuestras oficinas listo para ser entregado";
											
											
											require ("cnx.php");
											
											$consulta = "UPDATE guias SET 
											estatus ='$estatus3' WHERE guia= $guia3" ;
									
											$hacerconsulta = mysql_query ($consulta);
										
											mysql_close ($conexion);	
											
											echo "<br>";
											echo "<br>";
											
											
											//EMAIL DE NOTIFICACION
											
														require ("cnx.php");
														$ssql = mysql_query("SELECT * FROM casilleros WHERE id='$userx'");

														$emailx 		=  mysql_result($ssql,0,"email");
														mysql_close($conexion);	
														

														$body='Saludos Cordiales.
														
														Le notificamos que la guia con tracking el Nº '.$tracking3.' se encuentra en nuestra oficina lista para entregar. 
														
														Pongase en contacto con nuestro personal para finiquitar la entrega de su paquete.

														';
														
																	$para= $emailx;
																	$mensaje = $body;
											
																	$asunto 	= "Paquete recibido y listo para entregar";
																	$desde		=  "entregas@clglobalcargo.com";
																	$mensaje 	= $body;
																	$cabeceras = "";
																	$cabeceras = "MIME-VErsion: 1.0 \r\n";
																	$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
																	$cabeceras = "To: " . "entregas@tuorichaexpress.com" . "\r\n";
																	$cabeceras = "From: " . "entregas@tuorichaexpress.com" . "\r\n";    
													
													
																	mail ($para, $asunto, $mensaje, $cabeceras);	
																	
											//FIN DE EMAIL 
											
											
											
											
											
											?>
                                    
                                           <table width="348" border="0" align="center">
                                              <tr>
                                                <td width="320" align="center"><p><strong>La guia fue reportada en oficina</strong></p>
                                                <p><a href="guias.php">Click Aqui para volver al Area de Clientes</a></p></td>
                                              </tr>
                                            </table>

									<?php
										
										
										
										
										
										
									}
									else
									{
					
                                 	?>
                                    
                                    
                   <br /><br />
                   

				  
                   
<form method="post" action="#" enctype="multipart/form-data">
                             <table width="340" border="0" align="center">
                                  <tr>
                                    <td width="142">Usuario:</td>
                                    <td width="46" align="left"><input name="usuario" type="text" id="usuario" value="<?php echo $usuario ?> " size="2" readonly="readonly" /></td>
                               </tr>
                                  <tr>
                                    <td>Guia:</td>
                                    <td align="left"><input name="guia" type="text" id="guia" value="<?php echo $guia2; ?> " readonly="readonly" /></td>
                                  </tr>
                                  <tr>
                                    <td>Nº de Tracking:</td>
                                    <td align="left"><input name="tracking" type="text" id="tracking" value="<?php echo $tracking ?>" /></td>
                                  </tr>
                                    <tr>
                                    <td>Estatus:</td>
                                    <td align="left"><input name="estatus" type="text" id="estatus" value="<?php echo $estatus ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>Direccion:</td>
                                    <td align="left"><input name="direccion" type="text" id="direccion" value="<?php echo $direccion ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>Libras:</td>
                                    <td align="left"><input name="libras" type="text" id="libras" value="<?php echo $libras ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>Volumen:</td>
                                    <td align="left"><input name="volumen" type="text" id="volumen" value="<?php echo $volumen ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>Costo:</td>
                                    <td align="left"><input name="costo" type="text" id="costo" value="<?php echo $costo ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>Dimensiones:</td>
                                    <td align="left"><input name="dimensiones" type="text" id="dimensiones" value="<?php echo $dimensiones ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>Cambiar Imagen:</td>
                                    <td align="left"><input type="file" name="foto" /></td>
                                  </tr>
                                  <tr>
                                    <td>Descripcion:</td>
                                    <td>
                                    <textarea name="des" id="des" cols="30" rows="5"><?php echo $des ?></textarea>  
                                    <input type="hidden" name="foto2" value="<?php echo $foto; ?>" />
                                    <input type="hidden" name="ext" value="<?php echo $ext; ?>" />                            	  
                                    </td>
                                  </tr>
                  </table>
<br />
                  <table width="119" border="0" align="center">
                    <tr>
                      <td width="111">
                      <input type="hidden" name="userx" value="<?php echo $usuario ?>" />
                      
                      <input type="submit" name="reportar" id="reportar" value="Reportar llegada" />
                      </td>
                    </tr>
                  </table>
                  <table width="119" border="0" align="center">
                    <tr>
                      <td width="111"><input type="submit" name="modificar" id="modificar" value="Guardar Cambios" /></td>
                    </tr>
                  </table>
                  
                  <table width="125" border="0" align="center">
                    <tr>
                      <td width="165"><input type="submit" name="eliminar" id="eliminar" value="**Eliminar esta Guia**" /></td>
                    </tr>
                  </table>
<br />
          </form>        
                  
<?php
}
?>
                             
                                  
                  <br /><br /><bvr>
    </div><!--FIN DE  contenido-->


</div><!--FIN DE MARCOMarcoGlobal-->
</div><!--FIN DE MARCO MarcocosmoGLOBAL-->



<?php			
}
else
{			
session_destroy();		
header("location:../index.php");	
}
?>	
</body>
</html>