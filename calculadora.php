<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Elite Broker Services Corp C.A</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="menu/ajxmenu.css" type="text/css" />
<link rel="stylesheet" href="rotador/ajximagerotator.css" type="text/css" />
<script src="rotador/ajximagerotator.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

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



<table width="700" border="0" align="center">




  <tr>
    <td width="359">
    <form method="post" action="#">
      <table width="300" border="0" align="center">
        <tr>
          <td width="93" align="right" nowrap="nowrap">Tipo de Envio: </td>
          <td width="231"><select name="tipo" id="tipo">
            <option>Aereo</option>
            <option>Maritimo</option>
            </select></td>
          </tr>
        <tr>
          <td align="right">Largo:</td>
          <td><span id="sprytextfield1">
          <input name="largo" type="text" id="largo" size="7" />
          <span class="textfieldRequiredMsg">Coloque el largo.</span><span class="textfieldInvalidFormatMsg">Expresar cantidad en numeros.</span></span></td>
          </tr>
        <tr>
          <td align="right">Ancho:</td>
          <td><span id="sprytextfield2">
          <input name="ancho" type="text" id="ancho" size="7" />
          <span class="textfieldRequiredMsg">Coloque el ancho.</span><span class="textfieldInvalidFormatMsg">Expresar cantidad en numeros.</span></span></td>
          </tr>
        <tr>
          <td align="right">Alto:</td>
          <td><span id="sprytextfield3">
          <input name="alto" type="text" id="alto" size="7" />
          <span class="textfieldRequiredMsg">Coloque el alto.</span><span class="textfieldInvalidFormatMsg">Expresar cantidad en numeros.</span></span></td>
          </tr>
        <tr>
          <td align="right">Peso:</td>
          <td><span id="sprytextfield4">
            <input name="peso" type="text" id="peso" size="7" />
            <span class="textfieldInvalidFormatMsg">Expresar cantidad en numeros.</span></span></td>
        </tr>
        </table>
      <table width="160" border="0" align="center">
        <tr>
          <td width="96" align="center"><input type="submit" name="calcular" id="calcular" value="Calcular Envio" /></td>
          <td width="54" align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar" /></td>
          </tr>
        </table>
    </form>
    </td>
    <td width="485" valign="top"><table width="200" border="0" align="center">
      <tr>
        <td align="center"><em>Resultado del Calculo</em></td>
      </tr>
    </table>
    <br />
      <table width="350" border="0" align="center">
        <tr>        
          <td>
          
          
          <?php
	if (isset ($_POST['calcular']))
	{
		$tipo	=	$_POST['tipo'];
		$largo	=	$_POST['largo'];
		$ancho	=	$_POST['ancho'];
		$alto	=	$_POST['alto'];
		$peso	=	$_POST['peso'];
		
		
		
		//echo $tipo . $largo . $ancho . $alto . $peso;
		
			if ($tipo == "Aereo")
			{
				$pv 	= $largo * $ancho * $alto / 166 ;
				
				if($pv > $peso)
				{

					
						$costo = $pv * 6.5;
						$final  = number_format($costo,2,".",",");
						
				?>
                      <table width="350" border="0" align="center" bordercolor="#FF0000">
                        <tr>
                          <td align="center">
						  <?php echo "EL costo estimado de su envio Aereo1 es de" . " " . "<b>" . $final . " $(USD)." . "</b>"; ?>
                          </td>
                        </tr>
                        <tr>
                          <td align="center"></td>
                        </tr>
                        <tr>
                          <td align="center">&nbsp;</td>
                        </tr>
    </table>
                  <?php     
  
				}
				else
				{
					$costo = $peso * 6.5;
					$final  = number_format($costo,2,".",",");
 

							?>
                              <table width="350" border="0" align="center" bordercolor="#FF0000">
                                <tr>
                                  <td align="center">
								   <?php echo "EL costo estimado de su envio Aereo2 es de" . " " . "<b>" . $final . " $(USD)." . "</b>"; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="center">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td align="center"><strong><a href="calculadora.php"></a></strong></td>
                                </tr>
                              </table>
                              <?php
				}// Fin envio aereo 
				
				
				
			}
			else if ($tipo == "Maritimo")
			{
				
				$cuft 	= $largo * $ancho * $alto / 1728 ;
				
				$costo = $cuft * 22;
				$final  = number_format($costo,2,".",",");
				
				?>
                  <table width="350" border="0" align="center" bordercolor="#FF0000">
                    <tr>
                      <td align="center"><?php echo "EL costo estimado de su envio Maritimo es de" . "<b>" . $final . "$(USD)" . "</b>"; ?></td>
                    </tr>
                    <tr>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="center">&nbsp;</td>
                    </tr>
                  </table>
      			<?php
			}
			
	}
?>
          
          
          </td>
        </tr>
      </table></td>
    </tr>
</table>






<table width="800" border="0" align="center">
  <tr>
    <td>
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
    </td>
  </tr>
</table>




</div><!--FIN DE MARCO Cuerpo-->






<br /><br /><br /><br />






</div><!--FIN DE MARCO GLOBAL-->



<div id="MarcoDireccion">
<em><strong>Elite Broker Services Corp C.A <br />
Desing by: <a href="http://www.systemsadms.com">Systems Admins C.A</a><br />
</div>




<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "real");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "real");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "real");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "real", {isRequired:false});
</script>
</body>
</html>