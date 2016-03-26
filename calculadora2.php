<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Elite Broker Services Corp C.A</title>
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
    <td>
    <img src="img/calc.png" width="333" height="33" />
    </td>
  </tr>
</table>

<br />
<br />
<table width="362" border="0" align="center">
  <tr>
    <td align="center"><strong>Calcula</strong> <strong>el envio de tus paquetes a Venezuela</strong></td>
  </tr>
</table>
<br /><br />
<table align="center" bgcolor="#FFFFFF" border="0">
  <tr>
    <td><?php
//-------------------------------------------------------------------------------------------------------------------------	   	
		if (isset($_POST['aereo']))
		{
			$largo 	= $_POST['largo'];
			$ancho 	= $_POST['ancho'];
			$alto 	= $_POST['alto'];
			$peso 	= $_POST['peso'];

			
			$pv 	= $largo * $ancho * $alto / 166 ;
			
				if($pv > $peso)
				{

					
						$costo = $pv * 6;
						$final  = number_format($costo,2,".",",");
						
				?>
      <table width="667" border="0" align="center" bordercolor="#FF0000">
        <tr>
          <td align="center"><?php echo "El costo estimado de su envio es de" . " " . "<b>".$final*50 . " bs." . "</b>"; ?></td>
        </tr>
        <tr>
          <td align="center"></td>
        </tr>
        <tr>
          <td align="center"><strong><a href="calculadora.php"><em>Hacer otro calculo</em></a></strong></td>
        </tr>
      </table>
      <?php     
  
				}
				else
				{
					$costo = $peso * 6;
					$final  = number_format($costo,2,".",",");
 

							?>
      <table width="667" border="0" align="center" bordercolor="#FF0000">
        <tr>
          <td align="center"><?php echo "EL costo estimado de su envio es de" . " " . "<b>" . $final*50 . " bs." . "</b>"; ?></td>
        </tr>
        <tr>
          <td align="center"><strong><a href="calculadora.php"><em>Hacer otro calculo</em></a></strong></td>
        </tr>
        <tr>
          <td align="center"><strong><a href="calculadora.php"></a></strong></td>
        </tr>
      </table>
      <?php
								
					

				}
				
				//Fin de calculo de Envio aereo
				
				
				
		}
		
		
		//Calculo de envio maritimo
		
		
		
		
		if (isset($_POST['maritimo']))
		{
			$largo 	= $_POST['largo'];
			$ancho 	= $_POST['ancho'];
			$alto 	= $_POST['alto'];
			
			$cuft 	= $largo * $ancho * $alto / 1728 ;
			
			
			
			$costo = $cuft * 17.99;
			$final  = number_format($costo,2,".",",");
			
					
						
							
							?>
      <table width="667" border="0" align="center" bordercolor="#FF0000">
        <tr>
          <td align="center"><?php echo "EL costo estimado de su envio es de" . " " . "<b>". $final*50 . " bs." . "</b>"; ?></td>
        </tr>
        <tr>
          <td align="center"><strong><a href="calculadora.php"><em>Hacer otro calculo</em></a></strong></td>
        </tr>
        <tr>
          <td align="center">&nbsp;</td>
        </tr>
      </table>
      <?php
	 
							
				
			

		}
	   ?></td>
  </tr>
</table>
<br />
<br />
<br />
<strong>Tenga presente las siguientes observaciones a la hora de introducir sus datos para que no tenga estimaciones incorrectas : </strong><br />
<br />
<b>1)</b> Las medidas y peso requeridos para cotizar deben ser expresados en pulgadas y libras respectivamente.<br />
<br />
<b>2)</b> Es necesario que las medidas y peso sean de la caja que contiene el articulo, mas no del articulo como tal. Es decir las medidas deben ser del embalaje del articulo. <br />
<br />
<b>3)</b> Tenga presente que por lo general en internet estan las medidas de los articulos y no de sus cajas... mientras que en caso de los articulos que requieren armado, las medidas que aparecen son del articulo ya armado, mas no de la caja donde viene desarmado el articulo.
</p>
<p></p>
<br /><br /><br />


</div><!--FIN DE MARCO Cuerpo-->

<br /><br /><br /><br />

<div id="MarcoDireccion">
<em><strong>Elite Broker Service Corp C.A <br />
Rif:</strong></em><br />
Desing by: <a href="#">Systems Admins C.A</a><br />

</div>


</div><!--FIN DE MARCO GLOBAL-->






</body>
</html>