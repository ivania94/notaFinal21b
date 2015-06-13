
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>INICIO DE SESIÓN</title>
<link rel="stylesheet" href="estilo.css" />
<link href="../misEstilos/estilo.css" rel="stylesheet" type="text/css">
<link href="../dts/estilos.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
    <?php
session_start();
if (isset($_SESSION['usuario']))
{
    echo '<script>location.href = "welcome.php";</script>'; 
}
else
{
?>
<div class="contenedor">
    <br><br>
    <img class="logo" src ="../img/logo.jpg"><br>
    <h1>SISTEMA DE INSCRIPCIONES DE EL SALVADOR</h1><hr><br>
    <h1>Inicio de Sesión</h1><br>
    <br>
    <div id="formulario">
        <form method="POST" action="return false" onsubmit="return false" >
            <div id="resultado"></div>
            <p><input type="text" name="user" id="user" value="" placeholder="USUARIO"></p>
            <br>
            <p><input type="password" name="pass" id="pass" value="" placeholder="*******"></p>
            <br>
            <p><button type="submit" onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);">ENTRAR</button></p>
            <br><br><br>
        </form>
        <script>
        function Validar(user, pass)
        {
            $.ajax({
                url: "validar.php",
                type: "POST",
                data: "user="+user+"&pass="+pass,
                success: function(resp){
                    $('#resultado').html(resp)
                }        
            });
        }
        </script>
    </div>
</div>
</body>
</html>
<?php
}
?>