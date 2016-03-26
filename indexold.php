<?php
session_start();
if(isset($_POST['cerrar']))
{
	session_destroy();
		?>	 
	  <script type="text/javascript">
	window.location="index.php";
	</script>    
    <?php	
}
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
    
      <a href="login.php"><img src="img/elite.png" width="150" height="130" /></a>
    
</div>
    <div id="nombre">
    
    
            <table width="588" border="0" align="center">
              <tr>
                <td width="450" align="center"><h1><font color="white" face="Lucida Sans Unicode, Lucida Grande, sans-serif">Elite Broker Services Corp C.A</font><br>
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



<div id="MarcoBanner">
	<div id="login">
    <div id="loginbox">
<br /><br />
    
    
  <?php  
  
  	if (isset($_SESSION["login"]))
	{
		$micuenta=$_SESSION["login"];
		?>
        <table width="200" border="0">
          <tr>
            <td align="center"><img src="img/silueta.png" width="105" height="105" />
            <br />.
            <?php
			 echo "<font color='#000'><strong><em>'Hola"." ".$micuenta."'</em></strong></font>";
			?>
            </td>
          </tr>
          <tr>
            <td align="center"><form method="post" action="micuenta.php">
              <input type="submit" name="button2" id="button2" value="Mi cuenta" />
            </form></td>
          </tr>
          <tr>
            <td align="center"><form action="#" method="post">
              <input type="submit" name="cerrar" id="button3" value="Cerrar Sessión" />
            </form></td>
          </tr>
        </table>
<?php
	}else
	{
  
  ?>

    <br /> 
    <form method="post" action="validar.php">
   <table width="200" border="0" align="center">
  <tr>
    <td align="center"><strong><em><font color="#510000" size="-3">USUARIO</font></em></strong></td>
  </tr>
  <tr>
  		<td align="center"><input name="nick" type="text" id="nick" /></td>
  </tr>
</table>

   <table width="200" border="0" align="center">
  <tr>
    <td align="center"><strong><em><font color="#510000" size="-3">CONTRASEÑA</font></em></strong></td>
  </tr>
  <tr>
    <td align="center"><input name="pass" type="password" id="pass" /></td>
  </tr>
  </table>
  <br />
   <table width="200" border="0" align="center">
  <tr>
    <td align="center"><input type="submit" name="button" id="button" value="Entrar" /></td>
  </tr>
  <tr>
    <td align="center"><font col color="#FF0000" size="-6"><a href="#">¿olvido su password?</a> <br /> <a href="registro.php">Registrate</a></font></td>
    
  </tr>
   </table>

</form>

<?php
	}
?>

<br />
<br />

    
    </div>
    
    
    
    
<div id="facebook">
<div align="center">
<iframe src="http://widget.stagram.com/follow/elitebrokerservices" style="height:27px;" frameborder="0" scrolling="no"></iframe>
</div>

<!--<iframe src="http://snapwidget.com/sc/?u=ZWxpdGVicm9rZXJzZXJ2aWNlc3xpbnwxMjB8M3wzfHx5ZXN8MjB8bm9uZXxvblN0YXJ0fHllcw==&v=21714" title="Instagram Widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:200px; height:95px"></iframe>-->



<!-- SnapWidget -->
<iframe src="http://snapwidget.com/sc/?u=ZWxpdGVicm9rZXJzZXJ2aWNlc3xpbnwxNTB8M3wzfHxub3w1fG5vbmV8b25TdGFydHx5ZXN8bm8=&ve=190515" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:200px; height:95px"></iframe>


</div>  <!--FIN DE FACEBOOK-->








    <br />

    </div>
    <div id="banner">
   
      <div class="AJXIRLbZdFfD"><!-- AJXFILE:rotador/ajximagerotator.css -->
        <div class="AJXIRLbZdFfDpics">
          <ul class="AJXIRLbZdFfDul">
            <li class="AJXIRLbZdFfDli"><a href="#"><img class="AJXIRLbZdFfDimg" src="rotador/img/1.jpg" alt="" /></a></li>
            <li class="AJXIRLbZdFfDlihide"><a href="#"><img class="AJXIRLbZdFfDimg" src="rotador/img/2.jpg" alt="" /></a></li>
            <li class="AJXIRLbZdFfDlihide"><a href="#"><img class="AJXIRLbZdFfDimg" src="rotador/img/3.jpg" alt="" /></a></li>
            <li class="AJXIRLbZdFfDlihide"><a href="#"><img class="AJXIRLbZdFfDimg" src="rotador/img/4.jpg" alt="" /></a></li>
          </ul>
        </div>
        <br />
      </div>
    </div>
    
</div><!--FIN DE MARCO BANNER-->

<div id="MarcoSeparacion"></div>
<div id="MarcoSeparacion2"></div>


<div id="test">
        <table align="center" border="0">
            <tr>
                <td align="center">
                    <div id="logos"> <img src="img/tiendas2.png" width="850" height="55" border="0" usemap="#Map" />
                    </div>
                </td>
            </tr>
        </table>
</div>
<div id="MarcoSeparacion"></div>
<div id="MarcoSeparacion2"></div>



<div id="MarcoCuadros">
 <div id="espacionotas"></div>
    <div id="nota">
	  <table width="263" border="0" align="center">
        	<tr>
         		 <td align="center"><img src="img/registrate.png" width="130" height="35" /></td>
        	</tr>
        	<tr>
        	  <td align="center">Crea tu cuenta  para que puedas ver el estatus de tu carga sin costo alguno.</td>
      	  </tr>
        	<tr valign="top">
              
        	  <td valign="top" align="center"><a href="registro.php">
              
                  <table>
                        <tr valign="top">
                            <td valign="top">
                               
                  			<img src="img/registraricon.png" width="55" height="55" />
                            </td>
                 
                        </tr>
                    </table>
              
              </a></td>
      	  </tr>
   	  </table>
    </div>
    
    
    <div id="MarcoCuadros">
 <div id="espacionotas"></div>
    <div id="nota">
	  <table width="263" border="0" align="center">
        	<tr>
         		 <td align="center"><img src="img/registrate.png" width="130" height="35" /></td>
        	</tr>
        	<tr>
        	  <td align="center">Crea tu cuenta  para que puedas ver el estatus de tu carga sin costo alguno.</td>
      	  </tr>
        	<tr valign="top">
              
        	  <td valign="top" align="center"><a href="registro.php">
              
                  <table>
                        <tr valign="top">
                            <td valign="top">
                               
                  			<img src="img/registraricon.png" width="55" height="55" />
                            </td>
                 
                        </tr>
                    </table>
              
              </a></td>
      	  </tr>
   	  </table>
    </div>
    <div id="espacionotas"></div>
        <div id="nota">
        
        
        
        
        
        
        
        
<table width="263" border="0" align="center">
        	<tr>
         		 <td align="center"><img src="img/trackingleter.png" width="120" height="35" /></td>
        	</tr>
        	<tr>
        	  <td align="center">Revisa rapidamente el estatus de tu carga</td>
      	  </tr>
          <tr>
          	<td>
            	<table border="0" align="center">
                	<tr>
                    	<td valign="top">
                        <img src="img/mapa.png" width="60" height="60" />
                        </td>
                        <td>
                        
                        
                        
              <form action="#" method="post">
              <?php
			  if (isset($_POST['tracking']))
			  {
				$tracking 	=$_POST['tracking']; 
				
				require("cnx.php");
				$consulta = "SELECT * FROM guias WHERE tracking='$tracking';";
				$hacerconsulta=mysql_query ($consulta,$conexion);


							if (mysql_num_rows($hacerconsulta)>=1)
							{
							require("cnx.php");
							$ssql = mysql_query("SELECT * FROM guias WHERE tracking='$tracking'");
							$estatus	=  mysql_result($ssql,0,"estatus");
							
								echo "<p align='center'><font color='#FF0000'>".$estatus."</font></p>";	
							}else
							
							{
								echo "<p align='center'><font color='#FF0000'>El Nº tracking colocado no existe".$estatus."</font></p>";	
								
							}
							
				
				
			  }
			  else
			  {
			  ?>
        	    <table width="100" border="0">
        	      <tr>
        	        <td width="100" align="center">
                      <em>Nº de Tracking: </em>
                      <br />
                    <input name="tracking" type="text" id="tracking" size="12" />
                    
                  
                    </td>
      	          </tr>
      	      </table>
        	
              <?php
			  }
			  ?>
                        
                <?php
			  if (isset($_POST['tracking']))
			  {
				 ?> 
               
				<form action="index.php" method="post">
                <input name="volver" type="submit" value="Atras"/>
                </form>

                <?php
			  }
			  else
			  {
			  ?>
           <input type=image src="img/buscar.png" width="110" height="43">
            
           </form>
              <?php
			  }
			  ?>         

                        </td>
                    </tr>
                </table>
            </td>            
          </tr>
      	 </table>
         
         
         
         
         
         
         
    </div>
    <div id="espacionotas"></div>
    <div id="nota">
<table width="263" border="0" align="center">
        	<tr>
         		 <td align="center"><img src="img/cacl2.png" width="195" height="30" /></td>
        	</tr>
        	<tr>
        	  <td align="center">Calcula el costo del envio de tu carga sin importar el medio de transporte </td>
      	  </tr>
        	<tr>
        	  <td align="center"><a href="calculadora.php"><img src="img/calculadora.png" width="60" height="60" /></a></td>
      	  </tr>
   	  </table>
    </div>
    <div id="espacionotas"></div>



</div><!--FIN DE MARCO cadros-->





<div id="MarcoSeparacion"></div>

<div id="MarcoSeparacion2"></div>



<div id="MarcoCuerpo">


<div id="contenido">


<table width="200" border="0" align="center">
  <tr>
    <td><img src="img/bienvenido2.png" width="550" height="50" /></td>
  </tr>
</table>

<table width="630" border="0" align="center">
  <tr>
    <td>
    Elite Broker Services Corp C.A es una empresa líder dedicada al Agenciamiento Aduanal, Nacional e Internacional, a la Consolidación de Carga Aérea, Marítima Y Terrestre;  contando con diversas sucursales.</td>
  </tr>
</table>
<table width="630" border="0" align="center">
  <tr>
    <td width="215" height="129" align="center"><img src="img/maetest.jpg" width="197" height="125" /></td>
    <td width="399" valign="top"><p>Estamos constituida con el fin de ser la empresa Premium  en servicios, ya que ofrecemos servicios de calidad insuperable e integrales  orientados a la satisfacción de las necesidades de nuestros clientes, poniendo  a su disposición nuestro conocimiento y a su vez le brindamos una excelente  atención con el personal más capacitado listo para servirles.</p></td>
  </tr>
  </table>




</div><!--FIN DE contenido-->

  <div id="widget">
  
  
          <!-- <a class="twitter-timeline"  href="https://twitter.com/Clglobalcargo" data-widget-id="555391796386488320">Tweets por el @Clglobalcargo.</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          

   </div><!--Fin de twitter-->




</div><!--FIN DE MARCO cuerpo-->

<div id="MarcoSeparacion"></div>

<div id="MarcoDireccion">
<em><strong>Elite Broker Services C.A
<br />
Desing by: <a href="http://www.systemsadms.com">Systems Admins C.A</a><br />

</div>


</div><!--FIN DE MARCO GLOBAL-->


<map name="Map" id="Map">
  <area shape="rect" coords="624,31,762,49" href="http://www.target.com" target="_blank" />
  <area shape="rect" coords="414,33,542,51" href="http://www.etoys.com" target="_blank" />
  <area shape="rect" coords="196,29,377,52" href="http://www.brandsmart.com" target="_blank" />
  <area shape="rect" coords="56,28,157,50" href="http://www.ebay.com" target="_blank" />
  <area shape="rect" coords="762,4,846,48" href="http://www.bestbuy.com" target="_blank" />
  <area shape="rect" coords="499,-1,695,31" href="http://www.blackberry.com" target="_blank" />
  <area shape="rect" coords="307,4,449,30" href="http://www.macys.com" target="_blank" />
  <area shape="rect" coords="109,5,260,28" href="http://www.walmart.com" target="_blank" />
  <area shape="rect" coords="0,2,98,26" href="http://www.amazon.com" target="_blank" />
</map>
</body>
</html>