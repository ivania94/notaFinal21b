<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta name="viewport" content=width="device-width"/>
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet" type="text/css" href="eje.css">
</head>
<body bgcolor="silver">
   <section>
<hr border="2" color="black"></hr>
<center>
<nav>
	<ul>
       		<h5> Resultados preliminares<br></h5>
				<li> <a href="resultados.php">MENU PRINCIPAL</a> </li>
							
	</ul>
</nav>
</center>
</section>	

<?php 
   mysql_connect("127.0.0.1", "root", "") or die(mysql_error());
   mysql_select_db("saira") or die(mysql_error());
   $result=mysql_query("select * from  votaciones"); 
?>
<center>
<TABLE BORDER=2 CELLSPACING=2 CELLPADDING=2> 
<?php 
   
   while($row = mysql_fetch_array($result)) { 
      printf("<tr>
      	<td>
      	<BR>&nbsp;
      	<font color='brown' 
      	size='6'>
      	<center><b>por el partido '%s' se han obtenido:</b> 
      	<font color='darkblue'>'%s'</font> votos</font></center></font>
      	</td></TR>",$row["id"],$row["clicks"]);
}    
   mysql_free_result($result); 

?> 


</table>
</center>

</body>
</html>
