<?php
session_start();
if (isset($_SESSION['usuario']))
{
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Menu principal de inscripciones</title>
<link href="estilo.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="eje.css">
</head>

  <body bgcolor="silver"><div class="contenedor">
    <h1>Bienvenido : <?php echo $_SESSION['usuario']; ?> 
    <br>al sistema de inscripciones para las proximas elecciones de El Salvador</h1><hr>
    <img src="../img/minions.jpg" alt="">
   
<section>
<hr border="2" color="black"></hr>
<center>
<nav>
  <ul>
    <h5> MENU PRINCIPAL<br></h5>
    <li><a href="./frm/frmPartidos.php" title="">REGISTRAR PARTIDOS</a></li><br><br>
    <li><a href="./frm/frmCandidatos.php" title="">REGISTRAR CANDIDATO</a></li><br><br>
    <li><a href="./frm/frmVotantes.php" title="">REGISTRAR CIUDADANO</a></li><br><br>
    <li><a href="emmasaira.php">CERRAR SESIÓN</a></li>
  </ul>
</nav>
</center>
</section>  
</body>
</html>
<?php
}
else
{
    echo '<script>location.href = "welcome.php";</script>'; 
}
?>