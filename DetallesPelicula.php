<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Videoteca</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<style type="text/css">
<!--
.Estilo1 {color: #0099CC}
.Estilo4 {
	color: #FFFFFF;
	font-family: "Times New Roman", Times, serif;
	font-size: 30px;
}
.Estilo5 {color: #9900CC}
-->
</style>
</head>
<body>

<div id="wrap">

<div id="header">
  <h1 class="Estilo4">Videoteca</h1>
  <h2 class="Estilo5">Algo más que ver...</h2>
</div>

<div id="top"> </div>
<div id="menu">
<ul>
<li><a href="index.php">Inicio</a></li>
<li><a href="ConsultarUsuario.php">Consultar</a></li>
<li><a href="BuscarUsuario.php">Buscar</a></li>
<li><a href="Registro.php">Registro</a></li>
<li><a href="Contacto.php">Contacto</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

<h3> Pelicula Seleccionada</h3>

<div class="articles"></div>
</div>
	<?php
$link=mysqli_connect("localhost","root",""); //Conectar al servidor
	mysqli_select_db($link,"rentas");//Seleccionar la base de datos
$id = $_GET['id_pelicula'];	
$consulta=mysqli_query($link,"SELECT * from pelicula where id_pelicula=$id");
						  
	while($row=mysqli_fetch_array($consulta))
	{
		$id=$row['id_pelicula'];
		$ti=$row['titulo'];
		$di=$row['director'];
		$ac=$row['actor'];
		$im=$row['imagen'];
		$ra=$row['ranking'];
		$de=$row['descripcion'];

			echo "<img width=400 height=400 src='MisImagenes/$im'>";
			echo "<table>
					<tr>
						<td>Id pelicula:</td>
						<td>$id</td>
					</tr>
					<tr>
						<td>Titulo:</td>
						<td>$ti</td>
					</tr>
					<tr>
						<td>Director:</td>
						<td>$di</td>
					</tr>
					<tr>
						<td>Actor:</td>
						<td>$ac</td>
					</tr>
					<tr>
						<td>Descripcion:</td>
						<td>$de</td>
					</tr>
					<tr>
						<td>Recomendacion:</td>
						<td>$ra%</td>
					</tr>
				</table>";
	}
mysqli_close($link);
?>
<div style="clear: both;"> </div>
<a href="ConsultarUsuario.php">Regresar</a>
</div>

</div>
</body>
</html>