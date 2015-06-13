<?php
session_start('apertura');
if(isset($_SESSION['sesionapertura'])){
    echo $_SESSION['sesionapertura'];
}else{
	$mensaje = "Las elecciones no han sido aperturadas, No tienes derecho de ver esta pagina";
	echo "<script>";
echo "alert('$mensaje');";  
echo "self.location = 'welcome.php';";
echo "</script>"; 
    
}
?>
<!doctype html>
  <html lang="es">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="iso-8859-1">
			<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/initindex.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>

		
	<head>
	<head>
		<title>Login</title>
			        <link rel="stylesheet" type="css/text" href="estilo.css">
			        <link rel="stylesheet" type="css/text" href="estilos.css">
	</head>
			<body bgcolor="silver">
		<center>
			
		
          <div><img width="400 px" src="../img/Looney-Tunes.jpg"></div>
		<th>
		<center>
		<form action="accionlogin.php" method="post">
		<th>
		<center>
		
		<tr>
			<th colspan="2"><h3>INICIO DE SESION</h3></th>
		</tr>
		<tr>
		<br>
			<th>Usuario : <input type="text"  required autocomplete="on" autofocus style="width:300px" name="usuario"></th>
		</tr>
		<tr>
			<th>Contraseña :</th>
			<th></label><input type="password"  required autocomplete="on" autofocus style="width:300px" name="clave"></th>
		</tr>
		<tr>
			<br><br>
			<center><th colspan="2"><input type="submit" name='bot' value='ACCEDER'></th></center>
		</tr>
		</table>
		</center>
		</th>
		</form>
		</th>
		</th>
		</center>
                    <footer>
            <center>
            	<br><br>
        <class="copyright">
        <h2>
                   <br>Diseñado y programado por: Emma Hernández & Saira Chávez </h2>
             </center>
        </footer>
		</body>
  </html>