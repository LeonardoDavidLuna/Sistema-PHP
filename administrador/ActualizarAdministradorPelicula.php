<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Actualizar</title>
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
-->
</style>
</head>
<body>

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
<h2>Actualizar</h2>
<div class="articles"></div>
</div>

<div style="clear: both;"> </div>
<H2>Editar Películas</H2> 

<?php
   include("conexion.php"); 
   $link=Conectarse(); 
   $id=$_GET['id_pelicula'];
   //echo "<br> id Pelicula = $id";
  echo '<FORM METHOD="POST" ACTION="ActualizarAdministradorPelicula2.php">';

//Creamos la sentencia SQL y la ejecutamos
//$sSQL="Select titulo,director, actor,ranking From pelicula where id_pelicula='$id'";
//$result=mysql_query($sSQL);

  $result=mysqli_query($link,"select * from pelicula where id_pelicula='$id'");
  $row = mysqli_fetch_array($result);
  $ti=$row["titulo"];
  $di=$row["director"];
  $ac=$row["actor"];
  $ca=$row["categoria"];
  $de=$row["descripcion"];
  $ra=$row["ranking"];
  //$dis=$row["disponibilidad"];

  echo "Titulo: <INPUT TYPE='text' NAME='titulo' value='$ti' SIZE='50'><br>";
  echo "director: <INPUT TYPE='text' NAME='director' value='$di' SIZE='50'><br>";
  echo "Actor: <INPUT TYPE='text' NAME='actor' value='$ac' SIZE='50'><br>";
  echo "Categoria: <INPUT TYPE='text' NAME='categoria' value='$ca' SIZE='50'><br>";
  echo "Descripción: <INPUT TYPE='text' NAME='descripcion' value='$de' SIZE='50'><br>";
  echo "Ranking: <INPUT TYPE='text' NAME='ranking' value='$ra' SIZE='50'><br>";
  echo "<input type='hidden' name='id' value='$id'>";
?>
<INPUT TYPE="SUBMIT" value="Actualizar">
<br>
<a href="ActualizarAdministrador.php">Cancelar</a>
</div>

</div>

</body>
</html>