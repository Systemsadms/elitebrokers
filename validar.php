<?php
	$nick	= 	$_POST['nick'];
	$pass	=	$_POST['pass'];

		
	//$conn = mysql_connect("localhost","elitebro_admin","hdwtnkue456");
	$conn = mysql_connect("localhost","root","root");
			mysql_select_db("elitebro_bd",$conn);
			
			
			
			$ssql = "SELECT * FROM usuarios WHERE nick='$nick' and pass='$pass'";
			$rs = mysql_query($ssql,$conn);
			
			
			
			if (mysql_num_rows($rs)==1)
			{
				session_start();		
 
				$_SESSION["login"] = $nick;
				
				header("location:micuenta.php");
				mysql_close($conn);
				
			}
			else
			{
				header("location:micuenta2.php");
				mysql_close($conn);
				
				
			} 
	
?>