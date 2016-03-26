<?php
session_start();
?>
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

table {
   width: 100%;
   border: 0px solid #000;
}
th, td {
   width: 25%;
   text-align: center;
   vertical-align: top;
   border: 0px solid #000;
   border-collapse: collapse;
   padding: 0.3em;
   caption-side: bottom;
}
caption {
   padding: 0.3em;
   color: #fff;
    background: #000;
}
th {
   background: #eee;
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
    <td align="center">
    <img src="img/micuenta.png" width="167" height="27" />
    </td>
  </tr>
</table>

<br />
<br /><br />

<?php
  
  if (isset($_POST["end"]))
  {
	 session_destroy(); 
	?>	 
	  <script type="text/javascript">
	window.location="index.php";
	</script>    
    <?php	 		
	
	}
	
	
	
	
	
	if (isset($_SESSION["login"]))
	{
		$micuenta=$_SESSION["login"];
  ?>
  
  
  
  <form method="post" action="#">
<table width="200" border="0" align="right">
  <tr>
    <td width="101" align="center"><input type="submit" name="cuenta" id="cuenta" value="Mi Cuenta" /></td>
    <td width="134" align="center"><input type="submit" name="end" id="end" value="Cerrar Sessión" /></td>
    </tr>
  </table>
</form>
  <table width="200" border="0" align="center">
    <tr>
      <td><img src="img/midrfree241.png" width="760" height="150" /></td>
    </tr>
  </table>
  <table width="256" border="0" align="center">
    <tr>
      <td width="205" align="center"><b>Tus articulos en almacen</b></td>
    </tr>
  </table>
  <br />
  <!-------------------------------------------------------Tracking----------------------------------------------------->
  <?php
  

  	require("cnx.php");
	$ssql = mysql_query("SELECT * FROM usuarios WHERE nick='$micuenta'");	
	
	$cas	 	=  mysql_result($ssql,0,"id");
	$nick 		=  mysql_result($ssql,0,"nick");
	$pass 		=  mysql_result($ssql,0,"pass");
	$nombres 	=  mysql_result($ssql,0,"nombres");
	$apellidos 	=  mysql_result($ssql,0,"apellidos");
	$ci 		=  mysql_result($ssql,0,"ci");
	$email 		=  mysql_result($ssql,0,"email");
	$pais 		=  mysql_result($ssql,0,"pais");
	$estado 	=  mysql_result($ssql,0,"estado");
	$ciudad 	=  mysql_result($ssql,0,"ciudad");
	$telefono 	=  mysql_result($ssql,0,"telefono");
	$celular 	=  mysql_result($ssql,0,"celular");
	$dir 		=  mysql_result($ssql,0,"dir");
	

	mysql_close($conexion);
				
				
				
				require("cnx.php");
				$consulta = "SELECT * FROM guias WHERE usuario='$cas';";
				$hacerconsulta=mysql_query ($consulta,$conexion);


				if (mysql_num_rows($hacerconsulta)>=1)
				{
				echo "<table border='1' bordercolor='' align='center'>";
				echo "<tr>";
				echo "<td align='center'><b>Guia</b></td>";
			
				echo "<td align='center'><b>Tracking</b></td>";
				echo "<td align='center'><b>Estatus</b></td>";
				echo "<td align='center'><b>Descripcion</b></td>";
				echo "<td align='center'><b>Libras</b></td>";
				echo "<td align='center'><b>Volumen</b></td>";
				echo "<td align='center'><b>Dimension</b></td>";
				echo "<td align='center'><b>Costo</b></td>";
				echo "<td align='center'><b>Foto</b></td>";



				echo "</tr>";
				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{
				echo "<tr>";
				echo "<tr>";
				echo "<td align='center'>".$reg[0]."</td>";
			
				echo "<td align='center'>".$reg[2]."</td>";
				echo "<td align='center'>".$reg[11]."</td>";
				echo "<td align='center'>".$reg[7]."</td>";
				echo "<td align='center'>".$reg[4]."</td>";
				echo "<td align='center'>".$reg[5]."</td>";
				echo "<td align='center'>".$reg[9]."</td>";
				echo "<td align='center'>".$reg[6]."</td>";
				//echo "<td align='center'>".$reg[8]."</td>";
				echo "<td a valign='top'  align='center' width='140' >
				<div class='AJXLightboxGVHQAXA'><a href='intranet/img_guias/guia_".$reg[8].".jpg' rel='ajxlightbox' target='_blank'><img src='intranet/img_guias/guia_".$reg[8].".jpg' 				height='25px' width='25px'/></a></div>
				</td>";
				
				
				


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
				}
				else
				{
					echo "<font color='#FF0000'><p align='center'>Actualmente usted no posee articulos en nuestros almacenes</p></font>";
					echo "<br>";
				}
			/*		
				include ("cnx.php");				
				$consulta = "SELECT * FROM guias WHERE usuario='$cas';";
				$hacerconsulta=mysql_query ($consulta,$conexion);
				
				if (mysql_num_rows($hacerconsulta)>=1)
				{
				
				echo "<table border='3' bordercolor='#FF0000' align='center'>";
				echo "<tr>";
				echo "<td align='center'><b>Guia</b></td>";
				echo "<td align='center'><b>Usuario</b></td>";
				echo "<td align='center'><b>Tracking</b></td>";
				echo "<td align='center'><b>Estatus</b></td>";
				echo "<td align='center'><b>Descripcion</b></td>";



				echo "</tr>";
				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{
				echo "<tr>";
				echo "<td align='center'>".$reg[0]."</td>";
				echo "<td align='center'>".$reg[1]."</td>";
				echo "<td align='center'>".$reg[2]."</td>";
				echo "<td align='center'>".$reg[3]."</td>";
				echo "<td align='center'>".$reg[4]."</td>";
				
				
				


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
				
				echo "<br>";
				}
				else
				{
					echo "Usted no Posee articulos en almacen";
					echo "<br>";
				}*/
					?>
                    <br /><br /><br />
<?php
  
  if(isset($_POST['cuenta']))
  {	  
				

	require("cnx.php");
	$ssql = mysql_query("SELECT * FROM usuarios WHERE nick='$micuenta'");
	
	
	
	$cas	 	=  mysql_result($ssql,0,"id");
	$nick 		=  mysql_result($ssql,0,"nick");
	$pass 		=  mysql_result($ssql,0,"pass");
	$nombres 	=  mysql_result($ssql,0,"nombres");
	$apellidos 	=  mysql_result($ssql,0,"apellidos");
	$ci 		=  mysql_result($ssql,0,"ci");
	$email 		=  mysql_result($ssql,0,"email");
	$pais 		=  mysql_result($ssql,0,"pais");
	$estado 	=  mysql_result($ssql,0,"estado");
	$ciudad 	=  mysql_result($ssql,0,"ciudad");
	$telefono 	=  mysql_result($ssql,0,"telefono");
	$celular 	=  mysql_result($ssql,0,"celular");
	$dir 		=  mysql_result($ssql,0,"dir");
	

	mysql_close($conexion);
		
  ?>
  <br /><br />
  <br />
  <form>
  <table width="200" border="0" align="center">
    <tr>
      <td><table width="200" border="0" align="center">
        <tr>
          <td width="82" align="left"><b>ID:</b></td>
          <td width="102" align="left"><?php echo $cas ?></td>
        </tr>
        <tr>
          <td align="left"><b>Nick:</b></td>
          <td align="left"><?php echo $nick ?></td>
        </tr>
        <tr></tr>
        <tr>
          <td align="left"><b>Clave:</b></td>
          <td align="left"><?php echo $pass ?></td>
        </tr>
        <tr>
          <td align="left"><b>Nombres:</b></td>
          <td align="left"><?php echo $nombres ?></td>
        </tr>
        <tr>
          <td align="left"><b>Apellidos:</b></td>
          <td align="left"><?php echo $apellidos ?></td>
        </tr>
        <!--
                      <tr>
                        <td align="left"><b>Cedula:</b></td>
                        <td align="left"><?php echo $ci ?></td>
                      </tr>
                      -->
        <tr>
          <td align="left"><b>E-mail:</b></td>
          <td align="left"><?php echo $email ?></td>
        </tr>
        <tr>
          <td align="left"><b>Pais:</b></td>
          <td align="left"><?php echo $pais ?></td>
        </tr>
        <tr>
          <td align="left"><b>Estado:</b></td>
          <td align="left"><?php echo $estado ?></td>
        </tr>
        <tr>
          <td align="left"><b>Ciudad:</b></td>
          <td align="left"><?php echo $ciudad ?></td>
        </tr>
        <tr>
          <td align="left"><b>Telfono:</b></td>
          <td align="left"><?php echo $telefono ?></td>
        </tr>
        <tr>
          <td align="left"><b>BBpin:</b></td>
          <td align="left"><?php echo $celular ?></td>
        </tr>
        <tr>
          <td align="left"><b>Direccion:</b></td>
          <td align="left"><?php echo $dir ?></td>
        </tr>
      </table></td>
      <!--Fin de la tabla tracking-->
    </tr>
    <tr>
      <td align="center"><table width="200" border="0">
        <tr>
          <td align="center"><input name="bton" type="submit" id="bton" value="Ocultar Datos" /></td>
          <td align="center"><input name="bton2" type="submit" id="bton2" value="Editar Datos" /></td>
        </tr>
      </table></td>
    </tr>
    </table>
    </form>
    <?php
  	}
	?>
   <br />
   <table width="773" border="0" align="center">
     <tr>
       <td align="center"> <em><strong>Si realizaste una compra en los Estados Unidos y puedes enviar tus paquetes a nuestra direccion o hacer uso de nuestro servicio Delivery,</strong></em></td>
     </tr>
   </table>
   <br />
                    <br />
<table width="693" border="0" align="center">
                      <tr>
                       
                        <td width="512" align="center"><table width="388" border="0" bgcolor="#CCCCCC">
                          <tr>
                            <td width="287" align="left"><strong>Shipping Address (Envios Aereos y Maritimos)</strong></td>
                          </tr>
                          <tr>
                            <td>Name: Clglobalcago/ &quot;Coloque su nombre aqui&quot;</td>
                          </tr>
                          <tr>
                            <td>ADDRESS: 1335 NW 98CT, UNIT #4</td>
                          </tr>
                          <tr>
                            <td>Zip Code: 33172</td>
                          </tr>
                          <tr>
                            <td>CITY: MIAMI</td>
                          </tr>
                          <tr>
                            <td>STATE: FLORIDA</td>
                          </tr>
                          <tr>
                            <td>PHONE: (305) 359-3449</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td align="center">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center"><table width="200" border="0">
                          <tr>
                            <td align="center"><strong>Nuestras Cuentas Bancaria</strong></td>
                          </tr>
                        </table>
                          <table width="552" border="0">
                            <tr>
                              <td width="327" align="center"><table width="327" border="0">
                                <tr>
                                  <td align="center"><em>Banco</em>:</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td align="center"><em>A nombre:</em></td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td align="center"><em>Cuenta: </em></td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td align="center"><em>Nº Cuenta:</em></td>
                                  <td>&nbsp;</td>
                                </tr>
                              </table></td>
                              <td width="11" align="center">&nbsp;</td>
                              <td width="200" align="center"><a href="reportarpagos.php"><img src="img/reportar.gif" width="172" height="74" /></a></td>
                            </tr>
                          </table></td>
                      </tr>
    </table>
    <br /><br />
    <br /><br />
</div>
          
          
        
        <div id="serparaion2"></div>
        
        


  
  <?php
  
}
else
{
?>

<table width="850" border="0" align="center">
  <tr>
    <td width="823">Obtén tu cuenta para que hagas compras en los Estados Unidos, Si todavía   no eres miembro de nuestra familia regístrate ahora mismo, es muy   fácil, rápido y sin ningún costo. Simplemente pulsa <a href="registro.php"><em><strong>AQUI</strong></em></a>, completa el    formulario y en un momento seras parte de nuestra familia.</td>
  </tr>
</table>
<br /><br /><br />


<form method="post" action="validar.php">
	<div style="   
    width: 50%;
    height: 100px;
    margin: 0 auto 0 auto;
    ">
    
    <table width="50%" border="1" align="center">
 	 <tr>
   	 	<td><strong><em>Usuario:</em></strong></td>
     	<td><input type="text" name="nick" id="textfield" /></td>
     </tr>
     <tr>
        <td><strong><em>Contraseña:</em></strong></td>
        <td><input type="password" name="pass" id="textfield2" /></td>
      </tr>
 	</table>
  
    <table width="200" border="0" align="center">
      <tr>
        <td align="center"><input type="submit" name="entrar" id="entrar" value="Entrar" /></td>
      </tr>
    </table>
    
    
    
    </div>
</form>  
<!--
<form method="post" action="validar.php">

	<table width="50%" border="1" align="center">
 	 <tr>
   	 	<td><strong><em> Usuarioj:</em></strong></td>
     	<td><input type="text" name="nick" id="textfield" /></td>
     </tr>
     <tr>
        <td><strong><em>Contraseñas:</em></strong></td>
        <td><input type="password" name="pass" id="textfield2" /></td>
      </tr>
 	</table>
  
    <table width="200" border="0" align="center">
      <tr>
        <td align="center"><input type="submit" name="entrar" id="entrar" value="Entrar" /></td>
      </tr>
    </table>
</form>  
-->

 <?php
}
?> 
<br />
<br /><br />
<br />
<br /><br /><br />
<br /><br />








</div><!--FIN DE MARCO Cuerpo-->






</div><!--FIN DE MARCO GLOBAL-->


<div id="MarcoDireccion">
<em><strong>Elite Broker Services Corp C.A <br />
Desing by: <a href="http://www.systemsadms.com">Systems Admins C.A</a><br />
</div>




</body>
</html>