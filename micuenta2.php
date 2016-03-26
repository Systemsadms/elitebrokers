<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Elite Broker Services C.A</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="menu/ajxmenu.css" type="text/css" />
<link rel="stylesheet" href="rotador/ajximagerotator.css" type="text/css" />
<script src="rotador/ajximagerotator.js" type="text/javascript"></script>
</head>

<body>


<div id="MarcoGlobal">


<div id="MarcoHead">
	<div id="logo">
    
    
    </div>
    <div id="nombre">
    <table width="200" border="0" align="center">
  <tr>
    <td>
    
    <img src="img/nombre.png" width="600" height="30" />
    </td>
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
		
  ?>
  
  
  
  <form method="post" action="#">
<table width="200" border="0" align="right">
  <tr>
    <td width="101" align="center"><input type="submit" name="cuenta" id="cuenta" value="Mi Cuenta" /></td>
    <td width="134" align="center"><input type="submit" name="end" id="end" value="Cerrar Sessión" /></td>
    </tr>
  </table>
</form>  
  
  
  
  <?php
  
  if(isset($_POST['cuenta']))
  {	  
				//$nick = $_SESSION["login"];
				$nick = "kakashi";
	


	 $conn = mysql_connect("localhost","tuorisha_express","hdwtnkue456");
			mysql_select_db("tuorisha_bd",$conn);
			
	
			
	//require("cnx.php");
	$ssql = mysql_query("SELECT * FROM usuarios WHERE nick='$nick'");
	
	
	
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
	

	mysql_close($conn);
				
  ?>
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
                       
                        <td width="512" align="center"><table width="637" border="0">
                          <tr>
                            <td width="287" align="left"><strong>Shipping Address (Envios Aereos)</strong></td>
                            <td width="27" align="left">&nbsp;</td>
                            <td width="285" align="left"><strong>Shipping Address (Envios Maritimos)</strong></td>
                          </tr>
                          <tr>
                            <td>Name: Tuorichaexpress / &quot;Coloque su nombre aqui&quot;</td>
                            <td>&nbsp;</td>
                            <td>Name: Tuorichaexpress / &quot;Coloque su nombre aqui&quot;</td>
                          </tr>
                          <tr>
                            <td>ADDRESS:12250 NW 25th ST Suite 115</td>
                            <td>&nbsp;</td>
                            <td>ADDRESS:3750 NW 114th Ave Unit 6. Doral,FL</td>
                          </tr>
                          <tr>
                            <td>ADDRESS2: C/O Air Marine</td>
                            <td>&nbsp;</td>
                            <td>City: Doral State.</td>
                          </tr>
                          <tr>
                            <td>CITY: MIAMI</td>
                            <td>&nbsp;</td>
                            <td>State: FLORIDA</td>
                          </tr>
                          <tr>
                            <td>STATE: FLORIDA</td>
                            <td>&nbsp;</td>
                            <td>Phone: 305 629 5016</td>
                          </tr>
                          <tr>
                            <td>ZIP CODE: 33182</td>
                            <td>&nbsp;</td>
                            <td>Fax: 305 629 5017</td>
                          </tr>
                          <tr>
                            <td>PHONE: 3054773496</td>
                            <td>&nbsp;</td>
                            <td>ZIP CODE: 33175</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td align="center">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center"><table width="200" border="0">
                          <tr>
                            <td align="center"><strong>Nuestra Cuenta Bancaria</strong></td>
                          </tr>
                        </table>
                          <table width="327" border="0">
                          
                          <tr>
                            <td align="center"><em>Banco</em>:</td>
                            <td>Exterior</td>
                          </tr>
                          <tr>
                            <td align="center"><em>A nombre:</em></td>
                            <td>Importadora Yemaya 2013 C.A</td>
                          </tr>
                          <tr>
                            <td align="center"><em>Cuenta: </em></td>
                            <td>Corriente</td>
                          </tr>
                          <tr>
                            <td align="center"><em>Nº Cuenta:</em></td>
                            <td>01150053651003616205</td>
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
  <table width="510" border="0" align="center">
    <tr>
      <td align="center"><font color="#FF0000">Disculpe, la clave o el usuario colacado es incorrecto. Intente nuevamente.</font></td>
    </tr>
  </table>
  <table width="200" border="0" align="center">
  <tr>
    <td width="82"><strong><em>Usuario:</em></strong></td>
    <td width="102"><input type="text" name="nick" id="textfield" /></td>
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
</form>  
 <?php
}
?> 
<br />
<br /><br />
<br />
<br /><br /><br />
<br /><br /><br />
<br /><br /><br />


</div><!--FIN DE MARCO Cuerpo-->

<br /><br /><br /><br />

<div id="MarcoDireccion">
<em><strong>Elite Broker Service Corp C.A <br />

Desing by: <a href="#">Systems Admins C.A</a><br />

</div>


</div><!--FIN DE MARCO GLOBAL-->






</body>
</html>