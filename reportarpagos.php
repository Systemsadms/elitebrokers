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
    <a href="login.php"><img src="img/elite.png" width="150" height="130" /></a>    
    </div>


    <div id="nombre">  
        		 <table width="588" border="0" align="center">
              <tr>
                <td width="450" align="center"><h1> <font color="white">Elite Broker Services Corp C.A</font><br>
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
<table width="352" border="0" align="center">
  <tr>
    <td align="center"><strong>
    <font size="+1">Reporte de Pagos</font></strong></td>
  </tr>
</table>
<br />

<?php
		
		if (isset($_POST['reportarpago']))
		{
			$dia	=$_POST['dia'];
			$mes	=$_POST['mes'];
			$ano	=$_POST['ano'];
			
			$fecha	= $dia."/".$mes."/".$ano."/";		
			$numero		= 	$_POST['numero'];
			$banco		=	$_POST['banco'];
			$nombredep	=	$_POST['nombredep'];
			$usuario	=	$_POST['usuario'];
			$telefono	=	$_POST['telefono'];
			$monto		=	$_POST['monto'];
			$correo		=	$_POST['correo'];
	
	
	
	
	
							require("cnx.php");
							mysql_query ("INSERT INTO pagos VALUES 
							('', '$nombredep','$numero','$banco','$fecha','$usuario','$telefono','$monto','$correo')");
							mysql_close ($conexion);
	
			
	
	 		// ENVIO DE EMAIL
			
			$body='Se ha reportado un nuevo pago
			
								Numero de Deposito o Transferencia:		'.$_POST['numero'].'
								Banco: 		'.$_POST['banco'].'
								Monto: 		'.$_POST['monto'].'
								Fecha: 		'.$dia.'/'.$mes.'/'.$ano.'
								Nombre del Depositante: 	'.$_POST['nombredep'].'
								Nombre:		'.$_POST['usuario'].'
								Telefono: 	'.$_POST['telefono'].'
								Correo: 	'.$_POST['correo'].'

								
								';
								
											$para="admccct.elite@gmail.com";
			
	
			
											$desde = $_POST["nombre"];
											$mensaje = $body;
										
					
											$asunto 	= "Nuevo Reporte de Pago ";
											$desde		= $_POST["nick"];
											$mensaje 	= $body;
											$cabeceras = "";
											$cabeceras = "MIME-VErsion: 1.0 \r\n";
											$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras = "To: " . $_POST ["nick"] . "\r\n";
											$cabeceras = "From: " . $_POST ["correo"] . "\r\n";    
							
							
											mail ($para, $asunto, $mensaje, $cabeceras);   					
			
			
			
			
			
			echo "<br><br>";
			echo" <font size='+1' color='#FF0000'><p align='center'>Su pago ha sido reportado con exito</p></font>";
			echo "<br><br>";
			echo "<br><br>";
			echo "<br><br>";
			echo "<br><br>";
			echo "<br><br>";
			echo "<br><br>";
						echo "<br><br>";
			echo "<br><br>";
			echo "<br><br>";
			echo "<br><br>";
			echo "<br><br>";
			
		}
		else
		{



?>
<br /><br />

	<form method="post" action="#">

            <table width="415" border="0" align="center">
              <tr>
                <td width="149" align="center"><em>N° de Deposito<br />o Transferencia</em></td>
                <td width="256"><span id="sprytextfield1">
                <label for="numero"></label>
                  <input type="text" name="numero" id="numero" />
                </span></td>
              </tr>
              <tr>
                <td align="center"><em>Banco Emisor:</em></td>
                <td><label for="banco"></label>
                  <select name="banco" id="banco">
                    <option selected="selected">Mercantil</option>
                    <option>Banesco</option>
                    <option>Venezuela</option>
                    <option>Provincial</option>
                </select></td>
              </tr>
              <tr>
                <td align="center"><em>Fecha del deposito</em>:</td>
                <td><span id="sprytextfield2">
                <label for="fecha"></label>
                </span>
                  <table width="200" border="0">
                    <tr>
                      <td><select name="dia" id="dia">
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                      </select></td>
                      <td><select name="mes" id="mes">
                        <option>enero</option>
                        <option>febrero</option>
                        <option>marzo</option>
                        <option>abril</option>
                        <option>mayo</option>
                        <option>junio</option>
                        <option>julio</option>
                        <option>agosto</option>
                        <option>septiembre</option>
                        <option>octubre</option>
                        <option>noviembre</option>
                        <option>diciembre</option>
                      </select></td>
                      <td><select name="ano" id="ano">
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                      </select></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center"><em>Nombre del depositante</em>:</td>
                <td><span id="sprytextfield3">
                  <input type="text" name="nombredep" id="nombredep" />
                </span></td>
              </tr>
              <tr>
                <td align="center"><em>Tu nombre:</em></td>
                <td><span id="sprytextfield4">
                <label for="nombre"></label>
                <input type="text" name="usuario" id="usuario" />
                </span></td>
              </tr>
              <tr>
                <td align="center"><em>Telefono</em>:</td>
                <td><span id="sprytextfield5">
                <label for="telefono"></label>
                  <input type="text" name="telefono" id="telefono" />
                </span></td>
              </tr>
              <tr>
                <td align="center"><em>Monto</em>:</td>
                <td><span id="sprytextfield6">
                <label for="monto"></label>
                  <input type="text" name="monto" id="monto" />
                </span></td>
              </tr>
              <tr>
                <td align="center"><em>Correo</em>:</td>
                <td><span id="sprytextfield7">
                <label for="correo"></label>
                  <input type="text" name="correo" id="correo" />
                </span></td>
              </tr>
              </table>
            <br />
            <table width="200" border="0" align="center">
              <tr>
                <td align="center"><input type="submit" name="reportarpago" value="Reportar Pago"></td>
              </tr>
            </table>
<p>&nbsp;</p>
</form>
<br /><br />

<?php
}
?>
<br /><br /><br />


</div><!--FIN DE MARCO Cuerpo-->

<br /><br /><br /><br />







</div><!--FIN DE MARCO GLOBAL-->


<div id="MarcoDireccion">
<em><strong>Elite Broker Services C.A
<br />
Desing by: <a href="http://www.systemsadms.com">Systems Admins C.A</a><br />
</div>




</body>
</html>