<?php
	// Recibimos la ID del vinculo desde la URL
	$id = $_REQUEST['id'];
	$estado = $_REQUEST['estado'];
	

	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("saira") or die(mysql_error());

	// Incrementamos en 1 el contador del link con la ID especificada en la url
	$update = "UPDATE votaciones SET clicks=(clicks + 1) WHERE id='$id'";
	$update = "UPDATE ciudadano SET estado=1 WHERE estado='$estado'";
	mysql_query($update) or die (mysql_error());


?>	
