<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Elite Broker Services Corp C.A</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="menu/ajxmenu.css" type="text/css" />
<link rel="stylesheet" href="rotador/ajximagerotator.css" type="text/css" />
<script src="rotador/ajximagerotator.js" type="text/javascript"></script>
<link rel="stylesheet" href="galeria/ajxlightbox.css" type="text/css" />
<script src="galeria/ajxlightbox.js" type="text/javascript"></script>
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
    <td>
    <img src="img/galeria.png" width="300" height="34" />
    </td>
  </tr>
</table>

<br />
<br /><br />
<table width="319" border="0" align="center">
  <tr>
    <td align="center">Haz click sobre las fotos para ver en grande</td>
  </tr>
</table>
<br />
<?php

	include ("cnx.php");					
				
				$consulta = "SELECT * FROM galeria;";
				$hacerconsulta=mysql_query ($consulta,$conexion);
				
				if (mysql_num_rows($hacerconsulta)>=1)
				{
				
				echo "<div id='galeria'>";				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{				
				echo "<div id='galeria'>				
				<div class='AJXLightboxOCRJCfB'>
				 <div>
				 <a href='galeria/guia_".$reg[1].".jpg' rel='ajxlightbox'><img src='galeria/guia_".$reg[1].".jpg' width='85' height='85'/></a></div>
				</div>

				</div>";
							

				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				}
				echo "</div>";
				mysql_close($conexion);
				
				echo "<br>";
				

				}
				else
				{
					echo "No hay fotos cargadas a la galeria";
					echo "<br>";
				}
				
				?>
<br />
<br /><br /><br /><br />
<br /><br /><br /><br />
<br /><br /><br /><br />
<br /><br /><br /><br />
<br /><br /><br /><br />



</div><!--FIN DE MARCO Cuerpo-->

<br /><br /><br /><br />



</div><!--FIN DE MARCO GLOBAL-->

<div id="MarcoDireccion">
<em><strong>Elite Broker Services Corp C.A <br />
Desing by: <a href="http://www.systemsadms.com">Systems Admins C.A</a><br />
</div>




</body>
</html>