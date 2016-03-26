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
                  
                   <br /><br />
                   
              <?php

                                 if (isset($_POST['guardartracking']))
								 {
										$id			= 	$_POST['id'];										
										$tracking	=	$_POST['tracking'];
										$direccion	=	$_POST['direccion'];
										$libras		=	$_POST['libras'];
										$volumen	=	$_POST['volumen'];
										$costo		=	$_POST['costo'];
										$des		=	$_POST['des'];
										$dimensiones	=$_POST['dimensiones'];
										
										
										
										include ("cnx.php");	
										$ssql = "SELECT * FROM guias WHERE tracking='$tracking'";
										$rs = mysql_query($ssql,$conexion);
												
																	
															
												if (mysql_num_rows($rs)>0)
												{
														
													echo "<b>Este Numero de Tracking ya existe</b>";
													echo "<br><br>";
													mysql_close($conexion);

												
												}
												else 
												{	
												
												
												
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
$foto = $cad . ".".$extension;
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
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
																																				
												mysql_query ("INSERT INTO guias VALUES 
												('', '$id','$tracking','$direccion','$libras','$volumen','$costo','$des','$cad','$dimensiones','$extension','En Tramite')");
												mysql_close ($conexion);
												
												
												
													
													
										
												
																			
												}
									
									
									
								
								 							
				} //aqui termina la accion de cargar la guia..............................................................
				else
				{
					
					
					
					
					
					
				$id2= $_POST['cargarguias'];
				
				
				require ("cnx.php");
				$ssql = mysql_query("SELECT * FROM usuarios WHERE id='$id2'");
	
				$dir  =  mysql_result($ssql,0,"dir");
				mysql_close($conexion);
				
				
				
				
				
				?>	
				  
 <form action="#" method="POST" enctype="multipart/form-data">
 <table width="498" border="0" align="center">
    <tr>
      <td width="199">Usuario N°:</td>
      <td width="287"><label for="id"></label>
        <input name="id" type="text" id="id" value="<?php echo $id2;?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td>N° Tracking:</td>
      <td><label for="tracking"></label>
        <input type="text" name="tracking" id="tracking" /></td>
    </tr>
    <tr>
      <td>Direccion de Envio:</td>
      <td><label for="direccion"></label>
        <input type="text" name="direccion" id="direccion" value="<?php echo $dir; ?>"/></td>
    </tr>
    <tr>
      <td>Libras:</td>
      <td><label for="direccion"></label>
        <input type="text" name="libras" id="libras" /></td>
    </tr>
    <tr>
      <td>Volumen:</td>
      <td><label for="direccion"></label>
        <input type="text" name="volumen" id="volumen" /></td>
    </tr>
    <tr>
      <td>Dimensiones:</td>
      <td><label for="direccion"></label>
        <input type="text" name="dimensiones" id="volumen" /></td>
    </tr>
    <tr>
      <td>Costo de Envio:</td>
      <td><label for="direccion"></label>
        <input type="text" name="costo" id="costo" /></td>
    </tr>
    <tr>
      <td>Descripcion:</td>
      <td><label for="des"></label>
        <textarea name="des" id="des" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Cargar Foto del Paquete:</td>
      <td><input type="file" name="foto" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <input type="hidden" value="<?php echo $id2;?>" name="cargarguias"/>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><table width="200" border="0">
        <tr>
          <td align="center"><input type="submit" name="guardartracking" value="Guardar" /></td>
          <td align="center"><input type="reset" name="borrar" value="Borrar" /></td>
        </tr>
      </table></td>
    </tr>
  </table>
<br />
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