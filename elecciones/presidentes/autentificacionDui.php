<?php session_start(); ?>

<?php

 $dui = $_REQUEST['barra'];


 $conexion = mysql_connect("localhost", "root") or die ("PROBLEMA AL CONECTAR");


 mysql_select_db("saira", $conexion) or die ("ERROR AL CONECTAR A LA BASE DE DATOS");

 
 $estandar= mysql_query( "SELECT * FROM ciudadano where dui = '$dui' AND estado=0" ,$conexion);
  //var_dump($estandar);
  //exit();
 if (mysql_num_rows($estandar)>0) {
					$row = mysql_fetch_array($estandar);
					$_SESSION["barra"] = $row['dui']; 
					header("location: papeleta_municipal.php=".$row['dui']);


					header("location: papeleta_municipal.php");
				}
				else{
					header("Location:formularioVotante.php?msg=1");
				}
			
		?>