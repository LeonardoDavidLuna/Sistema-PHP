<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Videoteca</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
<style type="text/css">
<!--
.Estilo1 {color: #0099CC}
.Estilo4 {
	color: #FFFFFF;
	font-family: "Times New Roman", Times, serif;
	font-size: 30px;
}
table {
       border:1px solid black;
       border-collapse:separate;
       background: white;       
       width: 100%;
       }
    th, td {
       border:1px solid black;
       }
-->
</style>
</head>
<body>


</div>
<div class="articles">
<?php session_start();
	if(!isset($_SESSION['k_user']) || $_SESSION['k_tipo']!=0)//Si la variable de sesión no es verdadera, redirijimos
		header("Location: ../index.php");
?>

<div id="wrap">

<div id="header">
  <h1 class="Estilo4">Videoteca</h1>
  <h2 class="Estilo5">Algo más que ver...</h2>
</div>

<div id="top"> </div>
<div id="menu">
<ul>
<li><a href="index.php">Inicio</a></li>
<li><a href="ConsultarAdministrador.php">Consultar</a></li>
<li><a href="BuscarAdministrador.php">Buscar</a></li>
<li><a href="AltasAdministrador.php">Altas</a></li>
<li><a href="BajasAdministrador.php">Bajas</a></li>
<li><a href="ActualizarAdministrador.php">Actualizar</a></li>
<li><a href="SalirAdministrador.php">Salir</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 
<h2>Administrador</h2>
<h2>Consultar</h2>

<form action="ConsultarAdministrador.php" method="post">
	Buscar:
	<input type="radio" name="buscar" value="copias">Copias
	<input type="radio" name="buscar" value="pelicula">Peliculas
	<input type="radio" name="buscar" value="clientes">Clientes
	<input name="Submit" type="submit" value="Enviar">
</form>
<hr>
</div>
<div style="clear: both;"> </div>

<H2>Eliminación de Registros en la tabla pelicula</H2> 

<?php 
   include("conexion.php"); 
   $link=Conectarse(); 
   $result=mysqli_query($link,"select * from pelicula"); 
?> 
   <TABLE BORDER=1> 
      <TR><TD bgcolor="#FFFFCC"><B>ID</B></TD>
          <TD bgcolor="#FFFFCC"><B>Titulo</B></TD> 	  
          <TD bgcolor="#FFFFCC"><B>Director</B></TD> 	  
		  <TD bgcolor="#FFFFCC"><B>Eliminar</B></TD> 
		  <TD bgcolor="#FFFFCC"><B>Actualizar</B></TD>
		  
     </TR> 
<?php       

  while($row = mysqli_fetch_array($result)) 
  { 
    $ti=$row["titulo"];
    $di=$row["director"];
	$id=$row["id_pelicula"];
    printf("<tr><td>%d</td><td>%s</td><td>%s</td>
	       <td><center>
          <a onclick=\"return confirmSubmit()\"href=\"borrar2new.php?id_pelicula=%s\"><img src='eliminar.bmp' width='14' height='14' border='0'></a>
		   </center>
           </td>
		   <td><center>
		   <a href=\"actualizanew.php?id_pelicula=%s\"><img src='actualiza.jpg' width='25' height='25' border='0'></a>
		   </center></td>
		   </tr>",$id,$ti,$di,$id,$id); 
   } 

   mysqli_free_result($result); 
   mysqli_close($link); 
?> 


</div>

</body>
</html>