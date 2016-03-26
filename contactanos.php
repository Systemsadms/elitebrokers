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
    <td>
    <img src="img/contactanos.png" width="215" height="35" />
    </td>
  </tr>
</table>
<?php
			if ( isset ($_POST["btn_enviar"]))
			{
				$para = 'admccct.elite@gmail.com';
				$asunto = $_POST["asunto"];
				$desde = $_POST["desde"];
				$mensaje ="
				Telefono de Contacto:" . $_POST["telefono"] . "<br><br>"
				 . $_POST["mensaje"];
				
				
				$cabeceras = "";
				$cabeceras = "MIME-VErsion: 1.0 \r\n";
				$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
				//$cabeceras = "To: " . $_POST ["desde"] . "\r\n";
				$cabeceras .= "From: " . $_POST ["desde"] . "\r\n";
				
				mail ($para, $asunto, $mensaje, $cabeceras);
				
			echo "<font color='#FF0000'><p align='center'>Su mensaje ha sido enviado con exito, pronto sera atendido por uno de nuestros analistas</p></font>";	
			
				
			}
			
?>
<br />
<table width="641" border="0" align="center">
    <tr>
      <td width="635" align="center" class="texto"><form method="post" action="#">
        <fieldset>
          <legend><b>Envianos un e-mail</b></legend>
          <br />
          <table width="597" border="0">
            <tr>
              <td width="186"><strong>Su Nombre:<br />
              </strong></td>
              <td width="401"><label for="nombre"></label>
                <span id="sprytextfield1">
                  <label for="nombre2"></label>
                  <input name="nomre" type="text" id="nomre" />
                </span></td>
            </tr>
            <tr>
              <td><strong>Su Telefono:</strong></td>
              <td><label for="desde"></label>
                <span id="sprytextfield2">
                  <label for="desde2"></label>
                  <input type="text" name="telefono" id="telefono" />
                </span></td>
            </tr>
            <tr>
              <td><strong>Su Direccion e-mai:</strong></td>
              <td><label for="asunto"></label>
                <span id="sprytextfield3">
                  <label for="asunto2"></label>
                  <input type="text" name="desde" id="desde" />
                </span></td>
            </tr>
            <tr>
              <td><strong>Asunto del Mensaje:</strong></td>
              <td><input type="text" name="asunto" id="asunto" /></td>
            </tr>
          </table>
          <br />
          <table width="595" border="0">
            <tr>
              <td width="186" valign="top"><strong>Escriba su mensaje:</strong></td>
              <td width="399"><label for="mensaje"></label>
                <span id="sprytextarea1">
                <label for="mensaje2"></label>
                <textarea name="mensaje" id="mensaje2" cols="45" rows="5"></textarea>
                <span class="textareaRequiredMsg"></span></td>
            </tr>
          </table>
          <br />
          <table width="594" border="0">
            <tr>
              <td width="588" align="center"><input type="submit" name="btn_enviar" value="Enviar Correo"/></td>
            </tr>
          </table>
        </fieldset>
      </form></td>
      <td width="635" align="center" valign="top" class="texto"><p><em><strong>Horario de Atención:<br />
        </strong></em> De Lunes a Viernes
        partir de las 8:00 a 5:pm
        <br />
  <br />
  <em><strong>Atención Telefónica: <br />
  </strong></em>
        (+58)212 7710409<br />
        (+58)212 9591384 <br />
         (+58)212 9593218 <br />
          <br />
          <em><strong>Email:<br />
</strong></em> info@clglobalcargo.com</p></td>
    </tr>
  </table>


<br />
<table width="682" border="0" align="center">
  <tr>
    <td width="676" align="center">Av. la estancia, CCCT (centro comercial ciudad tamanaco), torre B, piso 10. of. b-1002, Chuao.</td>
  </tr>
</table>
<br /><br />


</div><!--FIN DE MARCO Cuerpo-->

<br /><br /><br /><br />






</div><!--FIN DE MARCO GLOBAL-->
<br />
<div id="MarcoDireccion">
<em><strong>Elite Broker Services Corp C.A <br />
Desing by: <a href="http://www.systemsadms.com">Systems Admins C.A</a><br />
</div>






</body>
</html>